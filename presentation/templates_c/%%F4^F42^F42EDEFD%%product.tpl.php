<?php /* Smarty version 2.6.25-dev, created on 2021-02-23 02:55:38
         compiled from product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'product.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'product','assign' => 'obj'), $this);?>

<h1 class="title"><?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
</h1>
<?php if ($this->_tpl_vars['obj']->mProduct['image']): ?>
 <img class="product-image" src="<?php echo $this->_tpl_vars['obj']->mProduct['image']; ?>
" alt="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 image" />
<?php endif; ?>
<?php if ($this->_tpl_vars['obj']->mProduct['image_2']): ?>
    <img class="product-image" src="<?php echo $this->_tpl_vars['obj']->mProduct['image_2']; ?>
" alt="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 image 2" />
<?php endif; ?>
 <p class="description"><?php echo $this->_tpl_vars['obj']->mProduct['description']; ?>
</p>
 <p class="section">
 Price:
    <?php if ($this->_tpl_vars['obj']->mProduct['discounted_price'] != 0): ?>
        <span class="old-price"><?php echo $this->_tpl_vars['obj']->mProduct['price']; ?>
</span>
        <span class="price"><?php echo $this->_tpl_vars['obj']->mProduct['discounted_price']; ?>
</span>
    <?php else: ?>
        <span class="price"><?php echo $this->_tpl_vars['obj']->mProduct['price']; ?>
</span>
    <?php endif; ?>
</p>

<form class="add-product-form" target="_self" method="post" action="<?php echo $this->_tpl_vars['obj']->mProduct['link_to_add_product']; ?>
">

   <p class="attributes">
      <?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mProduct['attributes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
          <?php if ($this->_sections['k']['first'] || $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name'] !== $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index_prev']]['attribute_name']): ?>
       <?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name']; ?>
:
     <select name="attr_<?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name']; ?>
">
     <?php endif; ?>
              <option value="<?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_value']; ?>
">
         <?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_value']; ?>

       </option>
          <?php if ($this->_sections['k']['last'] || $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name'] !== $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index_next']]['attribute_name']): ?>
     </select>
<?php endif; ?>
<?php endfor; endif; ?>
</p>

<p>
    <input type="submit" name="submit" value="Add to Cart" />
</p>
</form>


<?php if ($this->_tpl_vars['obj']->mLinkToContinueShopping): ?>
    <a href="<?php echo $this->_tpl_vars['obj']->mLinkToContinueShopping; ?>
">Countinue Shopping</a>
<?php endif; ?>
<h2> Find similar products in ours catalog:</h2>
<ol>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mLocations) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <li class="navigation">
            <?php echo '<a href="'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['link_to_department']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['department_name']; ?><?php echo '</a>'; ?>

            &raquo;
            <?php echo '<a href="'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['link_to_category']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['category_name']; ?><?php echo '</a>'; ?>

        </li>
    <?php endfor; endif; ?>
</ol>

