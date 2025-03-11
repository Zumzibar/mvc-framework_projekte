<?php
/* Smarty version 5.4.3, created on 2025-03-10 12:11:56
  from 'file:/vagrant/projekte/07_mvc/src/Views/session/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cec8fc00d5f5_35019979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be13b74476a0972ff4e31661b4543eef34d72c05' => 
    array (
      0 => '/vagrant/projekte/07_mvc/src/Views/session/index.tpl.html',
      1 => 1741604989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cec8fc00d5f5_35019979 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/07_mvc/src/Views/session';
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
