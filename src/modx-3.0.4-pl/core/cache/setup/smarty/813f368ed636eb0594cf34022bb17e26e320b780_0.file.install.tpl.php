<?php
/* Smarty version 4.3.4, created on 2023-12-18 15:36:35
  from '/var/www/html/modx-3.0.4-pl/setup/templates/install.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65806703107fb8_92563750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '813f368ed636eb0594cf34022bb17e26e320b780' => 
    array (
      0 => '/var/www/html/modx-3.0.4-pl/setup/templates/install.tpl',
      1 => 1702857863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65806703107fb8_92563750 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="install" action="?action=install" method="post">
    <div class="setup_body">
        <h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['install_summary'];?>
</h2>
        <p><?php if ($_smarty_tpl->tpl_vars['failed']->value) {
echo $_smarty_tpl->tpl_vars['_lang']->value['errors_occurred'];
} else {
echo $_smarty_tpl->tpl_vars['_lang']->value['install_success'];
}?></p>
        <ul class="checklist">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
            <li class="<?php echo $_smarty_tpl->tpl_vars['result']->value['class'];?>
 finalsuccess"> <?php echo $_smarty_tpl->tpl_vars['result']->value['msg'];?>
 </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <div class="setup_navbar">
        <?php if ($_smarty_tpl->tpl_vars['failed']->value) {?>
            <input type="button" onclick="MODx.go('install');" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['retry'];?>
 &#xf021;" id="modx-next" class="button">
            <input type="button" onclick="MODx.go('summary');" value="&#xf053; <?php echo $_smarty_tpl->tpl_vars['_lang']->value['back'];?>
" id="modx-back" class="button">
        <?php } else { ?>
            <input type="submit" id="modx-next" class="button" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['next'];?>
 &#xf054;" autofocus="autofocus">
        <?php }?>
    </div>
</form>
<?php }
}
