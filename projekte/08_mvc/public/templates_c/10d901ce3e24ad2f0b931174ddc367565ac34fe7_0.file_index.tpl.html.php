<?php
/* Smarty version 5.4.3, created on 2025-03-13 11:28:18
  from 'file:/vagrant/projekte/08_mvc/src/Views/session/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d2b3423f5c99_41887704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d901ce3e24ad2f0b931174ddc367565ac34fe7' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/session/index.tpl.html',
      1 => 1741604989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d2b3423f5c99_41887704 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/session';
?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user'), 'value', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
<li><?php echo $_smarty_tpl->getValue('key');?>
: <?php echo $_smarty_tpl->getValue('value');?>
</li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<h1>Session</h1>
<div class="row">
    <div class="col-6">
    </div>
</div><?php }
}
