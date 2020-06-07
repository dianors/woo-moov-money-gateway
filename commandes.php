<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<form id="posts-filter" method="get">

    <p class="search-box">
        <label class="screen-reader-text" for="post-search-input">Recherche commandes:</label>
        <input type="search" id="post-search-input" name="s" value="">
        <input type="submit" id="search-submit" class="button" value="Recherche commandes"></p>

    <input type="hidden" name="post_status" class="post_status_page" value="all">
    <input type="hidden" name="post_type" class="post_type_page" value="shop_order">



    <input type="hidden" id="_wpnonce" name="_wpnonce" value="ecec345dae"><input type="hidden" name="_wp_http_referer" value="/newWord/wp-admin/edit.php?post_type=shop_order">	<div class="tablenav top">

        <div class="alignleft actions bulkactions">
            <label for="bulk-action-selector-top" class="screen-reader-text">Sélectionnez l’action groupée</label><select name="action" id="bulk-action-selector-top">
                <option value="-1">Actions groupées</option>
                <option value="trash">Déplacer dans la corbeille</option>
                <option value="mark_processing">Marquer en cours</option>
                <option value="mark_on-hold">Marquer en attente</option>
                <option value="mark_completed">Marquer terminée</option>
            </select>
            <input type="submit" id="doaction" class="button action" value="Appliquer">
        </div>
        <div class="alignleft actions">
            <label for="filter-by-date" class="screen-reader-text">Filtrer par date</label>
            <select name="m" id="filter-by-date">
                <option selected="selected" value="0">Toutes les dates</option>
                <option value="201710">octobre 2017</option>
            </select>
            <select class="wc-customer-search select2-hidden-accessible enhanced" name="_customer_user" data-placeholder="Chercher un client…" data-allow_clear="true" tabindex="-1" aria-hidden="true">
                <option value="" selected="selected"></option><option>
                </option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 27px;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-_customer_user-23-container" role="combobox"><span class="select2-selection__rendered" id="select2-_customer_user-23-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Chercher un client…</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <input type="submit" name="filter_action" id="post-query-submit" class="button" value="Filtrer">		</div>
        <div class="tablenav-pages one-page"><span class="displaying-num">3 éléments</span>
            <span class="pagination-links"><span class="tablenav-pages-navspan" aria-hidden="true">«</span>
<span class="tablenav-pages-navspan" aria-hidden="true">‹</span>
<span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Page actuelle</label><input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> sur <span class="total-pages">1</span></span></span>
<span class="tablenav-pages-navspan" aria-hidden="true">›</span>
<span class="tablenav-pages-navspan" aria-hidden="true">»</span></span></div>
        <br class="clear">
    </div>
    <h2 class="screen-reader-text">Liste des commandes</h2><table class="wp-list-table widefat fixed striped posts">
        <thead>
        <tr>
            <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Tout sélectionner</label><input id="cb-select-all-1" type="checkbox"></td><th scope="col" id="order_status" class="manage-column column-order_status"><span class="status_head tips">État</span></th><th scope="col" id="order_title" class="manage-column column-order_title column-primary sortable desc"><a href="http://localhost/newWord/wp-admin/edit.php?post_type=shop_order&amp;orderby=ID&amp;order=asc"><span>Commande</span><span class="sorting-indicator"></span></a></th><th scope="col" id="billing_address" class="manage-column column-billing_address hidden">Facturation</th><th scope="col" id="shipping_address" class="manage-column column-shipping_address">Livrée à</th><th scope="col" id="customer_message" class="manage-column column-customer_message"><span class="notes_head tips">Message client</span></th><th scope="col" id="order_notes" class="manage-column column-order_notes"><span class="order-notes_head tips">Notes de commande</span></th><th scope="col" id="order_date" class="manage-column column-order_date sortable desc"><a href="http://localhost/newWord/wp-admin/edit.php?post_type=shop_order&amp;orderby=date&amp;order=asc"><span>Date</span><span class="sorting-indicator"></span></a></th><th scope="col" id="order_total" class="manage-column column-order_total sortable desc"><a href="http://localhost/newWord/wp-admin/edit.php?post_type=shop_order&amp;orderby=order_total&amp;order=asc"><span>Total</span><span class="sorting-indicator"></span></a></th><th scope="col" id="order_actions" class="manage-column column-order_actions">Actions</th>	</tr>
        </thead>

        <tbody id="the-list">
        <tr id="post-49" class="iedit author-self level-0 post-49 type-shop_order status-wc-on-hold post-password-required hentry">
            <th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-49">Sélectionner Order – octobre 30, 2017 @ 05:37</label>
                <input id="cb-select-49" type="checkbox" name="post[]" value="49">
                <div class="locked-indicator">
                    <span class="locked-indicator-icon" aria-hidden="true"></span>
                    <span class="screen-reader-text">“Order – octobre 30, 2017 @ 05:37” est verrouillé</span>
                </div>
            </th><td class="order_status column-order_status" data-colname="État"><mark class="on-hold tips">En attente</mark></td><td class="order_title column-order_title has-row-actions column-primary" data-colname="Commande"><a href="http://localhost/newWord/wp-admin/post.php?post=49&amp;action=edit" class="row-title"><strong>#49</strong></a> par Marnel Ginola<small class="meta email"><a href="mailto:marnel@net.fr">marnel@net.fr</a></small><button type="button" class="toggle-row"><span class="screen-reader-text">Afficher plus de détails</span></button><div class="row-actions"><span class="edit"><a href="http://localhost/newWord/wp-admin/post.php?post=49&amp;action=edit" aria-label="Modifier «&nbsp;Order – octobre 30, 2017 @ 05:37&nbsp;»">Modifier</a> | </span><span class="trash"><a href="http://localhost/newWord/wp-admin/post.php?post=49&amp;action=trash&amp;_wpnonce=b6bfc62253" class="submitdelete" aria-label="Déplacer “Order – octobre 30, 2017 @ 05:37” dans la corbeille">Corbeille</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Afficher plus de détails</span></button></td><td class="billing_address column-billing_address hidden" data-colname="Facturation">Marnel Ginola, GrandHosters, 228856, Porto-Novo, Bénin, 229<small class="meta">Téléphone&nbsp;: +229 97 40 36 27</small></td><td class="shipping_address column-shipping_address" data-colname="Livrée à"><a target="_blank" href="https://maps.google.com/maps?&amp;q=228856%2C+%2C+Porto-Novo%2C+B%C3%A9nin%2C+229%2C+BJ&amp;z=16">Marnel Ginola, GrandHosters, 228856, Porto-Novo, Bénin, 229</a><small class="meta">Par Forfait</small></td><td class="customer_message column-customer_message" data-colname="Message client"><span class="note-on tips">Oui</span></td><td class="order_notes column-order_notes" data-colname="Notes de commande"><span class="note-on tips">Oui</span></td><td class="order_date column-order_date" data-colname="Date"><time datetime="2017-10-30T17:37:40+00:00" title="30 octobre 2017 17 h 37 min">30 octobre 2017</time></td><td class="order_total column-order_total" data-colname="Total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">CFA</span>1,036.00</span><small class="meta">Par Mobile Money</small></td><td class="order_actions column-order_actions" data-colname="Actions"><p>
                    <a class="button tips processing" href="http://localhost/newWord/wp-admin/admin-ajax.php?action=woocommerce_mark_order_status&amp;status=processing&amp;order_id=49&amp;_wpnonce=d895e095fa">En cours</a><a class="button tips complete" href="http://localhost/newWord/wp-admin/admin-ajax.php?action=woocommerce_mark_order_status&amp;status=completed&amp;order_id=49&amp;_wpnonce=d895e095fa">Terminer</a><a class="button tips view" href="http://localhost/newWord/wp-admin/post.php?post=49&amp;action=edit">Voir</a>				</p></td>		</tr>
        <tr id="post-48" class="iedit author-self level-0 post-48 type-shop_order status-wc-cancelled post-password-required hentry">
            <th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-48">Sélectionner Order – octobre 18, 2017 @ 05:10</label>
                <input id="cb-select-48" type="checkbox" name="post[]" value="48">
                <div class="locked-indicator">
                    <span class="locked-indicator-icon" aria-hidden="true"></span>
                    <span class="screen-reader-text">“Order – octobre 18, 2017 @ 05:10” est verrouillé</span>
                </div>
            </th><td class="order_status column-order_status" data-colname="État"><mark class="cancelled tips">Annulée</mark></td><td class="order_title column-order_title has-row-actions column-primary" data-colname="Commande"><a href="http://localhost/newWord/wp-admin/post.php?post=48&amp;action=edit" class="row-title"><strong>#48</strong></a> par <a href="user-edit.php?user_id=2">Marnel</a><small class="meta email"><a href="mailto:marnel@grandhosters.com">marnel@grandhosters.com</a></small><button type="button" class="toggle-row"><span class="screen-reader-text">Afficher plus de détails</span></button><div class="row-actions"><span class="edit"><a href="http://localhost/newWord/wp-admin/post.php?post=48&amp;action=edit" aria-label="Modifier «&nbsp;Order – octobre 18, 2017 @ 05:10&nbsp;»">Modifier</a> | </span><span class="trash"><a href="http://localhost/newWord/wp-admin/post.php?post=48&amp;action=trash&amp;_wpnonce=e6595bedfb" class="submitdelete" aria-label="Déplacer “Order – octobre 18, 2017 @ 05:10” dans la corbeille">Corbeille</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Afficher plus de détails</span></button></td><td class="billing_address column-billing_address hidden" data-colname="Facturation">Marnel Gnacadja, GrandHosters, 2254, Cotonou, Bénin, 229<small class="meta">Téléphone&nbsp;: 97403496</small></td><td class="shipping_address column-shipping_address" data-colname="Livrée à"><a target="_blank" href="https://maps.google.com/maps?&amp;q=2254%2C+%2C+Cotonou%2C+B%C3%A9nin%2C+229%2C+BJ&amp;z=16">Marnel Gnacadja, GrandHosters, 2254, Cotonou, Bénin, 229</a><small class="meta">Par Forfait</small></td><td class="customer_message column-customer_message" data-colname="Message client"><span class="note-on tips">Oui</span></td><td class="order_notes column-order_notes" data-colname="Notes de commande"><span class="note-on tips">Oui</span></td><td class="order_date column-order_date" data-colname="Date"><time datetime="2017-10-18T17:10:00+00:00" title="18 octobre 2017 17 h 10 min">18 octobre 2017</time></td><td class="order_total column-order_total" data-colname="Total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">CFA</span>1,038.00</span><small class="meta">Par Western Union</small></td><td class="order_actions column-order_actions" data-colname="Actions"><p>
                    <a class="button tips view" href="http://localhost/newWord/wp-admin/post.php?post=48&amp;action=edit">Voir</a>				</p></td>		</tr>
        <tr id="post-47" class="iedit author-self level-0 post-47 type-shop_order status-wc-processing post-password-required hentry">
            <th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-47">Sélectionner Order – octobre 18, 2017 @ 05:01</label>
                <input id="cb-select-47" type="checkbox" name="post[]" value="47">
                <div class="locked-indicator">
                    <span class="locked-indicator-icon" aria-hidden="true"></span>
                    <span class="screen-reader-text">“Order – octobre 18, 2017 @ 05:01” est verrouillé</span>
                </div>
            </th><td class="order_status column-order_status" data-colname="État"><mark class="processing tips">En cours</mark></td><td class="order_title column-order_title has-row-actions column-primary" data-colname="Commande"><a href="http://localhost/newWord/wp-admin/post.php?post=47&amp;action=edit" class="row-title"><strong>#47</strong></a> par Marnel Gnacadja<small class="meta email"><a href="mailto:marnel@grandhosters.com">marnel@grandhosters.com</a></small><button type="button" class="toggle-row"><span class="screen-reader-text">Afficher plus de détails</span></button><div class="row-actions"><span class="edit"><a href="http://localhost/newWord/wp-admin/post.php?post=47&amp;action=edit" aria-label="Modifier «&nbsp;Order – octobre 18, 2017 @ 05:01&nbsp;»">Modifier</a> | </span><span class="trash"><a href="http://localhost/newWord/wp-admin/post.php?post=47&amp;action=trash&amp;_wpnonce=0de210bbf1" class="submitdelete" aria-label="Déplacer “Order – octobre 18, 2017 @ 05:01” dans la corbeille">Corbeille</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Afficher plus de détails</span></button></td><td class="billing_address column-billing_address hidden" data-colname="Facturation">Marnel Gnacadja, GrandHosters, 2254, Cotonou, Bénin, 229<small class="meta">Téléphone&nbsp;: 97403496</small></td><td class="shipping_address column-shipping_address" data-colname="Livrée à"><a target="_blank" href="https://maps.google.com/maps?&amp;q=2254%2C+%2C+Cotonou%2C+B%C3%A9nin%2C+229%2C+BJ&amp;z=16">Marnel Gnacadja, GrandHosters, 2254, Cotonou, Bénin, 229</a><small class="meta">Par Forfait</small></td><td class="customer_message column-customer_message" data-colname="Message client"><span class="na">–</span></td><td class="order_notes column-order_notes" data-colname="Notes de commande"><span class="note-on tips">Oui</span></td><td class="order_date column-order_date" data-colname="Date"><time datetime="2017-10-18T17:01:58+00:00" title="18 octobre 2017 17 h 01 min">18 octobre 2017</time></td><td class="order_total column-order_total" data-colname="Total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">CFA</span>1,100.00</span><small class="meta">Par Western Union</small></td><td class="order_actions column-order_actions" data-colname="Actions"><p>
                    <a class="button tips complete" href="http://localhost/newWord/wp-admin/admin-ajax.php?action=woocommerce_mark_order_status&amp;status=completed&amp;order_id=47&amp;_wpnonce=d895e095fa">Terminer</a><a class="button tips view" href="http://localhost/newWord/wp-admin/post.php?post=47&amp;action=edit">Voir</a>				</p></td>		</tr>
        </tbody>

        <tfoot>
        <tr>
            <td class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-2">Tout sélectionner</label><input id="cb-select-all-2" type="checkbox"></td><th scope="col" class="manage-column column-order_status"><span class="status_head tips">État</span></th><th scope="col" class="manage-column column-order_title column-primary sortable desc"><a href="http://localhost/newWord/wp-admin/edit.php?post_type=shop_order&amp;orderby=ID&amp;order=asc"><span>Commande</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-billing_address hidden">Facturation</th><th scope="col" class="manage-column column-shipping_address">Livrée à</th><th scope="col" class="manage-column column-customer_message"><span class="notes_head tips">Message client</span></th><th scope="col" class="manage-column column-order_notes"><span class="order-notes_head tips">Notes de commande</span></th><th scope="col" class="manage-column column-order_date sortable desc"><a href="http://localhost/newWord/wp-admin/edit.php?post_type=shop_order&amp;orderby=date&amp;order=asc"><span>Date</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-order_total sortable desc"><a href="http://localhost/newWord/wp-admin/edit.php?post_type=shop_order&amp;orderby=order_total&amp;order=asc"><span>Total</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-order_actions">Actions</th>	</tr>
        </tfoot>

    </table>
    <div class="tablenav bottom">

        <div class="alignleft actions bulkactions">
            <label for="bulk-action-selector-bottom" class="screen-reader-text">Sélectionnez l’action groupée</label><select name="action2" id="bulk-action-selector-bottom">
                <option value="-1">Actions groupées</option>
                <option value="trash">Déplacer dans la corbeille</option>
                <option value="mark_processing">Marquer en cours</option>
                <option value="mark_on-hold">Marquer en attente</option>
                <option value="mark_completed">Marquer terminée</option>
            </select>
            <input type="submit" id="doaction2" class="button action" value="Appliquer">
        </div>
        <div class="alignleft actions">
        </div>
        <div class="tablenav-pages one-page"><span class="displaying-num">3 éléments</span>
            <span class="pagination-links"><span class="tablenav-pages-navspan" aria-hidden="true">«</span>
<span class="tablenav-pages-navspan" aria-hidden="true">‹</span>
<span class="screen-reader-text">Page actuelle</span><span id="table-paging" class="paging-input"><span class="tablenav-paging-text">1 sur <span class="total-pages">1</span></span></span>
<span class="tablenav-pages-navspan" aria-hidden="true">›</span>
<span class="tablenav-pages-navspan" aria-hidden="true">»</span></span></div>
        <br class="clear">
    </div>

</form>


