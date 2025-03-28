<?php
/* Smarty version 5.4.3, created on 2025-03-28 10:07:41
  from 'file:/vagrant/projekte/08_mvc/src/Views/test2/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e666dd1065f9_46558605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3da833480564aefa31e2846c841ac7c2dbd6354' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/test2/index.tpl.html',
      1 => 1743152862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e666dd1065f9_46558605 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/test2';
?><div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="offset-1 col-10">
                    <form class="kontaktformular">
                        <fieldset>
                            <legend>Kontaktformular</legend>
                            
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="radio" name="anrede" id="Herr" value="Herr" checked>
                                <label class="form-check-label" for="Herr">Herr</label>
                            </div>


                            <button type="submit" class="btn btn-primary mt-3" formaction="" formmethod="post" name="senden">Submit</button>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
