<?php
/* Smarty version 5.4.3, created on 2025-03-27 15:45:34
  from 'file:/vagrant/projekte/08_mvc/src/Views/test/index.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e5648e45d6d0_73840586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec866a622d0bc9f5cc00b20665b3371cb403c1b' => 
    array (
      0 => '/vagrant/projekte/08_mvc/src/Views/test/index.tpl.html',
      1 => 1743086425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e5648e45d6d0_73840586 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/vagrant/projekte/08_mvc/src/Views/test';
?><div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="offset-1 col-10">
                    <form class="kontaktformular">
                        <fieldset>
                            <legend>Kontaktformular</legend>

                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('Field'), 'item', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('key') == "anrede") {?>
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="radio" name="anrede" id="Herr" value="Herr" checked>
                                <label class="form-check-label" for="Herr">Herr</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="anrede" id="Frau" value="Frau">
                                <label class="form-check-label" for="Frau">Frau</label>
                            </div>
                            <?php } elseif ($_smarty_tpl->getValue('key') == "verein" || $_smarty_tpl->getValue('key') == "laender") {?>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('key'));?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('key'));?>
</label>
                                <select class="form-select" name="<?php echo $_smarty_tpl->getValue('key');?>
" id="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('key'));?>
">
                                    <option value=''>---Bitte auswählen---</option>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ExtraArrays')[$_smarty_tpl->getValue('key')], 'optValue', false, 'optKey');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('optKey')->value => $_smarty_tpl->getVariable('optValue')->value) {
$foreach1DoElse = false;
?>
                                    <option value="<?php echo $_smarty_tpl->getValue('optKey');?>
"><?php echo $_smarty_tpl->getValue('optValue');?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <?php } elseif ($_smarty_tpl->getValue('key') == "feedback") {?>
                            <div class="form-group mt-3">
                                <label for="Feedback">Feedback</label>
                                <textarea class="form-control" id="Feedback" name="feedback" rows="3"></textarea>
                            </div>
                            <?php } elseif ($_smarty_tpl->getValue('key') == "sportart") {?>
                           <div class="col-14">
                            <label class="input-group-text" for="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('key'));?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('key'));?>
</label>
                           </div>





                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ExtraArrays')['sportart'], 'optValue', false, 'optKey');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('optKey')->value => $_smarty_tpl->getVariable('optValue')->value) {
$foreach2DoElse = false;
?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="sportart[]" id="<?php echo $_smarty_tpl->getValue('optKey');?>
" value="<?php echo $_smarty_tpl->getValue('optKey');?>
">
                                <label class="form-check-label" for="<?php echo $_smarty_tpl->getValue('optKey');?>
"><?php echo $_smarty_tpl->getValue('optValue');?>
</label>
                            </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>







                            <?php } elseif ($_smarty_tpl->getValue('key') == "pusp") {?>

                            <?php } else { ?>
                            <div class="input-group mb-3 mt-3">
                                <label class="input-group-text" for="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('key'));?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('key'));?>
</label>
                                <input type="text" class="form-control" id="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('item'));?>
" name="<?php echo $_smarty_tpl->getValue('key');?>
" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('key'));?>
" value="">
                            </div>
                            <?php }?>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                            <button type="submit" class="btn btn-primary mt-3" formaction="" formmethod="post" name="senden">Submit</button>
                            <button type="submit" class="btn btn-primary mt-3" formaction="" name="auslesen" formmethod="post">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
