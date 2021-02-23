<?php /* Smarty version 2.6.25-dev, created on 2021-02-23 07:39:08
         compiled from store_front.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'store_front.tpl', 2, false),array('function', 'load_presentation_object', 'store_front.tpl', 3, false),)), $this); ?>
    <?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

   <?php echo smarty_function_load_presentation_object(array('filename' => 'store_front','assign' => 'obj'), $this);?>

   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html>
     <head>
       <title><?php echo $this->_tpl_vars['obj']->mPageTitle; ?>
</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
       <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
styles/tshirtshop.css" />
     </head>
     <body>
       <div id="doc" class="yui-t2">
         <div id="bd">
           <div id="yui-main">
             <div class="yui-b">
               <div id="header" class="yui-g">
                 <a href="index.php">
                   <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/tshirtshop.png" alt="tshirtshop logo" />
                 </a>
               </div>
               <div id="contents" class="yui-g">
               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mContentsCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
               </div>
             </div>
           </div>
           <div class="yui-b">
             <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search_box.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
             <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "departments_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
             <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mCategoriesCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
             <div class="view-cart">
              <form target="_self" method="post" action="<?php echo @PAYPAL_URL; ?>
">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="business" value="<?php echo @PAYPAL_EMAIL; ?>
" />
                <input type="hidden" name="display" value="1" />
                <input type="hidden" name="shopping_url" value="<?php echo $this->_tpl_vars['obj']->mPayPalContinueShoppingLink; ?>
" />
                <input type="hidden" name="return" value="<?php echo @PAYPAL_RETURN_URL; ?>
" />
                <input type="submit" name="view_cart" value="View Cart" />
                </form>
             </div>
           </div>
           
         </div>
       </div>
     </body>
</html>