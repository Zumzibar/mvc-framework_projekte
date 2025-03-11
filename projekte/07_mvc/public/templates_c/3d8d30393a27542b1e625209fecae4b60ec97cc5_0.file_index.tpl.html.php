<?php
/* Smarty version 5.4.3, created on 2025-03-10 12:41:45
  from 'file:/vagrant/projekte/07_mvc/src/Views/schleifen/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cecff93adbf5_14156702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d8d30393a27542b1e625209fecae4b60ec97cc5' => 
    array (
      0 => '/vagrant/projekte/07_mvc/src/Views/schleifen/index.tpl.html',
      1 => 1741606904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cecff93adbf5_14156702 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/07_mvc/src/Views/schleifen';
?><h1>Schleifen</h1>
<div class="row">
    <div class="col-6">
        <p><?php echo $_SERVER['REQUEST_URI'];?>
</p>
        <ul>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('people'), 'person');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('person')->value) {
$foreach0DoElse = false;
?>
            <li>
                Name: <?php echo $_smarty_tpl->getValue('person')['name'];?>
<br>
                Email: <?php echo $_smarty_tpl->getValue('person')['email'];?>
<br>
                Age: <?php echo $_smarty_tpl->getValue('person')['age'];?>
<br>
                Country: <?php echo $_smarty_tpl->getValue('person')['country'];?>

            </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>

    </div>
</div><?php }
}
