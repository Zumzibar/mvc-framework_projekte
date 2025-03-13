<?php
/* Smarty version 5.4.3, created on 2025-03-13 11:28:16
  from 'file:/vagrant/projekte/08_mvc/src/Views/schleifen/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d2b34042f979_74352063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e591405e210326e1b270ca41f10d6925d303a3c9' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/schleifen/index.tpl.html',
      1 => 1741606904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d2b34042f979_74352063 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/schleifen';
?><h1>Schleifen</h1>
<div class="row">
    <div class="col-6">
        <p><?php echo $_SERVER['REQUEST_URI'];?>
</p>
        <ul>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('people'), 'person');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('person')->value) {
$foreach2DoElse = false;
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
