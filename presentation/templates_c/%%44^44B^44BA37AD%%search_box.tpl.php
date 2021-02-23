<?php /* Smarty version 2.6.25-dev, created on 2021-02-09 06:19:14
         compiled from search_box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'search_box.tpl', 3, false),)), $this); ?>

<?php echo smarty_function_load_presentation_object(array('filename' => 'search_box','assign' => 'obj'), $this);?>

<div class="box">
  <p class="box-title">Search the Catalog</p>
  <form class="search_form" method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToSearch; ?>
">
    <p>
      <input maxlength="100" id="search_string" name="search_string"
       value="<?php echo $this->_tpl_vars['obj']->mSearchString; ?>
" size="19" />
      <input type="submit" value="Go!" /><br />
    </p>
    <p>
      <input type="checkbox" id="all_words" name="all_words"
       <?php if ($this->_tpl_vars['obj']->mAllWords == 'on'): ?> checked="checked" <?php endif; ?>/>
      Search for all words
    </p>
  </form>
</div>