<?php
/* Smarty version 5.4.3, created on 2025-03-10 11:49:08
  from 'file:/vagrant/projekte/07_mvc/template/Navi/index.tpl.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cec3a47539a4_35106902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbcc7f7c010ce4692e7e4350a1a9e43030dea2ab' => 
    array (
      0 => '/vagrant/projekte/07_mvc/template/Navi/index.tpl.php',
      1 => 1741599615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cec3a47539a4_35106902 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/07_mvc/template/Navi';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php echo '<?php'; ?>

                foreach (TEMPLATEINFOJSON as $item) {
                    /** @var string $ActiveItem */
                    echo ' <li class="nav-item">
                    <a class="nav-link '.(($ActiveItem===$item['controllerName'])?' active':'') .'" href="' . $item['href'] . '">' . $item['button'] . '</a>
                </li>';
                }
                <?php echo '?>'; ?>

            </ul>
        </div>
    </div>
</nav>


<div class="container">

<?php }
}
