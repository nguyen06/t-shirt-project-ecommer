<?php /* Smarty version 2.6.25-dev, created on 2021-03-30 18:31:19
         compiled from admin_login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_login.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_login','assign' => 'obj'), $this);?>

<div class="login">
    <p class="login-title">TShirtShop Login</p>
    <form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToAdmin; ?>
">
        <p>   
            Enter login information or go back 
            <a href="<?php echo $this->_tpl_vars['obj']->mLinkToIndex; ?>
">Storefront</a>
        </p>
        <?php if ($this->_tpl_vars['obj']->mLoginMessage != ""): ?>
            <p class="error"><?php echo $this->_tpl_vars['obj']->mLoginMessage; ?>
</p>
        <?php endif; ?>
        <p>
            <label for="username">Username: </label>
            <input type="text" name="username" size="35" value="<?php echo $this->_tpl_vars['obj']->mUsername; ?>
" />
            
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="text" name="password" size="35" value="" />
            
        </p>
        <p>
            <input type="submit" name="submit" value="Login" />
        </p

    </form>
</div>