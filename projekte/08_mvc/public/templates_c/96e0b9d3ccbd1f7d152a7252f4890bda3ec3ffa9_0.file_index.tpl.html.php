<?php
/* Smarty version 5.4.3, created on 2025-03-13 11:28:17
  from 'file:/vagrant/projekte/08_mvc/src/Views/object/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d2b341bd7689_14765381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96e0b9d3ccbd1f7d152a7252f4890bda3ec3ffa9' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/object/index.tpl.html',
      1 => 1741853702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d2b341bd7689_14765381 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/object';
?><h1>Object</h1>
<div class="row">
    <div class="col-6">
        <div class="gallery">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach0DoElse = false;
?>
            <div class="image">
                <img src="<?php echo $_smarty_tpl->getValue('image');?>
" alt="Image">
            </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>





    </div>
</div><?php }
}
