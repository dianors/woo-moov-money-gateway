<?php
/**
 * Moov Money Payment Gateway
 *
 * Provides a Moov Money Payment Gateway.
 *
 * @class 		WC_Gateway_Moov_Money
 * @extends		WC_Payment_Gateway
 * @version		1.0.0
 * @package		WooCommerce/Classes/Payment
 * @author 		Marnel Fresh'eur
 * @url         http://grandhosters.com/download.php
 */
// Exit if accessed directly
if (!defined('ABSPATH')) exit;
session_start();

class WC_Gateway_Moov_Money extends WC_Payment_Gateway {

    /**
     * Constructor for the gateway.
     */
	public function __construct() {
		$this->id                 = 'momoney';
		$this->icon               = apply_filters('woocommerce_wunion_icon', plugins_url('mm.png', __FILE__));
		$this->has_fields         = true;
		$this->method_title       = __( 'Moov Money', 'woocommerce' );
		$this->method_description = __( 'Permits payments using Moov Money.', 'woocommerce' );

		// Load the settings.
		$this->init_form_fields();
		$this->init_settings();

		// Define user set variables
		$this->title        = $this->get_option( 'title' );
		$this->description  = $this->get_option( 'description' );
		$this->instructions = $this->get_option( 'instructions', $this->description );

		// Actions
		add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );
    	add_action( 'woocommerce_thankyou_wunion', array( $this, 'thankyou_page' ) );

    	// Customer Emails
    	add_action( 'woocommerce_email_before_order_table', array( $this, 'email_instructions' ), 10, 3 );
    }

    public function output_variations () {

    }


    public function mm_costomer_page(){
        //Mm_money::output_variations();
    }






    public function payment_fieldss()
    {
        if ( $this->supports( 'tokenization' ) && is_checkout() ) {
            $this->tokenization_script();
            $this->saved_payment_methods();
            $this->form();
            $this->save_payment_method_checkbox();
        } else {
            $this->form();
        }
    }

    public function payment_fields(){
	    $this->form();
    }

    public function field_name( $name ) {
        return $this->supports( 'tokenization' ) ? '' : ' name="' . esc_attr( $this->id . '-' . $name ) . '" ';
    }


    public function form() {

        $fields = array();

        $default_fields = array(
            'mm-user-field' => '<p class="form-row form-row-wide">
				<label for="' . esc_attr( $this->id ) . '-mm-user">' . esc_html__( 'Nom et Prenom', 'woocommerce' ) . ' <span class="required">*</span></label>
				<input id="' . esc_attr( $this->id ) . '-mm-user" class="input-text" autocomplete="cc-number" autocorrect="no" autocapitalize="no" spellcheck="no" type="tel" placeholder="Nom de l\'abonné" name="user-mm-name" />
			</p>',
            'mm-number-field' => '<p class="form-row form-row-wide">
				<label for="' . esc_attr( $this->id ) . '-mm-number">' . esc_html__( 'Numéro Moov-Money', 'woocommerce' ) . ' <span class="required">*</span></label>
				<input id="' . esc_attr( $this->id ) . '-mm-number" class="input-text" inputmode="numeric" autocomplete="cc-number" autocorrect="no" autocapitalize="no" spellcheck="no" type="tel" placeholder="+229 &bull;&bull; &bull;&bull; &bull;&bull; &bull;&bull;" name="user-mm-number" />
			</p>',
        );

        $fields = wp_parse_args( $fields, apply_filters( 'woocommerce_credit_card_form_fields', $default_fields, $this->id ) );
        ?>

        <fieldset id="wc-<?php echo esc_attr( $this->id ); ?>-cc-form" class='wc-credit-card-form wc-payment-form'>
            <?php do_action( 'woocommerce_credit_card_form_start', $this->id );

            foreach ( $fields as $field ) {
                echo $field;
            }

            do_action( 'woocommerce_credit_card_form_end', $this->id ); ?>
            <div class="clear"></div>
        </fieldset>
        <?php
    }

    /**
     * Initialise Gateway Settings Form Fields
     */
    public function init_form_fields() {

    	$this->form_fields = array(
			'enabled' => array(
				'title'   => __( 'Enable/Disable', 'woocommerce' ),
				'type'    => 'checkbox',
				'label'   => __( 'Enable Moov Money?', 'woocommerce' ),
				'default' => 'yes'
			),
			'title' => array(
				'title'       => __( 'Title', 'woocommerce' ),
				'type'        => 'text',
				'description' => __( 'This controls the title which the user sees during checkout.', 'woocommerce' ),
				'default'     => __( 'Moov Money', 'woocommerce' ),
				'desc_tip'    => true,
			),
			'description' => array(
				'title'       => __( 'Description', 'woocommerce' ),
				'type'        => 'textarea',
				'description' => __( 'Payment method description that the customer will see on your checkout.', 'woocommerce' ),
				'default'     => __( '', 'woocommerce' ),
				'desc_tip'    => true,
			),
			'instructions' => array(
				'title'       => __( 'Instructions', 'woocommerce' ),
				'type'        => 'textarea',
				'description' => __( 'Instructions that will be added to the thank you page and emails.', 'woocommerce' ),
				'default'     => '',
				'desc_tip'    => true,
			),
		);
    }

    /**
     * Output for the order received page.
     */
	public function thankyou_page() {
		if ( $this->instructions )
        	echo wpautop( wptexturize( $this->instructions ) );
	}

    /**
     * Add content to the WC emails.
     *
     * @access public
     * @param WC_Order $order
     * @param bool $sent_to_admin
     * @param bool $plain_text
     */
	public function email_instructions( $order, $sent_to_admin, $plain_text = false ) {
        if ( $this->instructions && ! $sent_to_admin && 'momoney' === $order->payment_method && $order->has_status( 'on-hold' ) ) {
			echo wpautop( wptexturize( $this->instructions ) ) . PHP_EOL;
		}
	}

    /**
     * Process the payment and return the result
     *
     * @param int $order_id
     * @return array
     */
	public function process_payment( $order_id ) {

	    global $wpdb;
        $name = strip_tags($_POST['user-mm-name']);
        $number = strip_tags($_POST['user-mm-number']);

        $_SESSION['user-mm-name'] = $name;
        $_SESSION['user-mm-number'] = $number;

	    //$wpdb->insert('usersuer', ['nom' => $_POST['user-mm-name']]);

	    /*
	     *
	     * Le code d'enregistrement dans la base de données sera mise ici
	     *
	     * */

		$order = wc_get_order( $order_id );

		// Mark as on-hold (we're awaiting the wunion)
		$order->update_status( 'on-hold', __( "Awaiting Moov Money payment.\nUser account: {$name} \nMMoney number: {$number}\n", 'woocommerce' ) );

		// Reduce stock levels
		$order->reduce_order_stock();

		// Remove cart
		WC()->cart->empty_cart();

		// Return thankyou redirect
		return array(
			'result' 	=> 'success',
			'redirect'	=> $this->get_return_url( $order )
		);
	}
}
?>