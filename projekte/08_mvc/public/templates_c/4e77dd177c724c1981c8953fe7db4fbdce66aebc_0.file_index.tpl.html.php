<?php
/* Smarty version 5.4.3, created on 2025-03-11 11:16:51
  from 'file:/vagrant/projekte/07_mvc/src/Views/if/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d00d93863b82_55461271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e77dd177c724c1981c8953fe7db4fbdce66aebc' => 
    array (
      0 => '/vagrant/projekte/07_mvc/src/Views/if/index.tpl.html',
      1 => 1741688211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d00d93863b82_55461271 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/07_mvc/src/Views/if';
?><h1>If Else</h1>
<p>{$smarty.server.REQUEST_URI}: <?php echo $_SERVER['REQUEST_URI'];?>
</p>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/images/fotos/clown2.png" class="img-fluid" alt="Clowns">
        </div>
        <div class="col-md-6">
            <table class="table">
                <caption>List of users</caption>
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php }
}
