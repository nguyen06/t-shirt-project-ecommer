<?php /* Smarty version 2.6.25-dev, created on 2021-03-30 18:28:42
         compiled from admin_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_menu.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_menu','assign' => 'obj'), $this);?>

<h1>TShirtShop</h1>
<p> |
    <a href="<?php echo $this->_tpl_vars['obj']->mLinkToStoreAdmin; ?>
">CATALOG ADMIN</a> |
    <a href="<?php echo $this->_tpl_vars['obj']->mLinkToStoreFront; ?>
">STOREFRONT</a> |
    <a href="<?php echo $this->_tpl_vars['obj']->mLinkToLogout; ?>
">LOGOUT</a> |
</p>