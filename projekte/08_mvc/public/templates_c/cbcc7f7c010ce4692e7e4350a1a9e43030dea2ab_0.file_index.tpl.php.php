<?php
/* Smarty version 5.4.3, created on 2025-03-13 10:24:24
  from 'file:/vagrant/projekte/07_mvc/template/Navi/index.tpl.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d2a4482c1e42_39366644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbcc7f7c010ce4692e7e4350a1a9e43030dea2ab' => 
    array (
      0 => '/vagrant/projekte/07_mvc/template/Navi/index.tpl.php',
      1 => 1741857864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d2a4482c1e42_39366644 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/07_mvc/template/Navi';
?><div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <i class="bi bi-android" style="font-size: 40px; color: white; margin-left: 30px;  margin-right: -30px; padding" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar"></i>
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('Menue'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_smarty_tpl->getValue('ActiveItem') === $_smarty_tpl->getValue('item')['controllerName']) {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('item')['href'];?>
"><?php echo $_smarty_tpl->getValue('item')['button'];?>
</a>
                    </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <!-- Your main content goes here -->
    </div>


<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-start" style="background-color: #1a1d20" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasSidebarLabel" style="color:white">Sidebar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Sidebar content goes here -->
        <ul class="navbar-nav">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('Menue'), 'item');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('ActiveItem') === $_smarty_tpl->getValue('item')['controllerName']) {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('item')['href'];?>
" style="color: white">&nbsp;&nbsp;&nbsp<?php echo $_smarty_tpl->getValue('item')['button'];?>
</a>
            </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<div class="container"><?php }
}
