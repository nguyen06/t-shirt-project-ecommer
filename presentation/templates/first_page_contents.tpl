{* first_page_contents.tpl *}
{load_presentation_object filename = "first_page_contents" assign="obj"}
<p class="description">
    We hope you have fun developing TShirtShort, the e-commer store from
    Begining PHP and MySql e-commer: from Novice to Professional!
</p>
<p class="description">
    We have the largest collection of t-shirt and popal stamps on Earth!
    Browse out deparment and categories to find your favorite1
</p>
<p> Access the <a href="{obj->mLinkToAdmin}">admin page</a>.</p>
{include file="products_list.tpl"}