<?php /* Smarty version 2.6.25-dev, created on 2021-04-21 05:51:01
         compiled from store_admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'store_admin.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'store_admin','assign' => 'obj'), $this);?>

<!DOCTYPE html public "-//W3C/DTD XHML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <title>Demo Store Admin from Beginning PHP and MySQL E-Commer</title>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <link href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
styles/tshirtshop.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div id="doc" class="yui-t7">
            <div id="bd">
                <div class="yui-g">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mMenuCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div class="yui-g">
                <p><?php echo $this->_tpl_vars['obj']->mContentsCell; ?>
</p>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mContentsCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
            </div>
        </div>
    </body>
</html>