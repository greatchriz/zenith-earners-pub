<?php /* Smarty version 3.1.27, created on 2023-04-30 20:36:01
         compiled from "/home/reconsxo/zenith-earners.com/tmpl/index_last_add_funds.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1106466072644f0971d746e8_12194754%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d24dd02d810dfc91cf3d487f2d4eb55cb34bcda' => 
    array (
      0 => '/home/reconsxo/zenith-earners.com/tmpl/index_last_add_funds.tpl',
      1 => 1580258160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106466072644f0971d746e8_12194754',
  'variables' => 
  array (
    'settings' => 0,
    'last_add_funds' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_644f0971d852e9_31568445',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_644f0971d852e9_31568445')) {
function content_644f0971d852e9_31568445 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/reconsxo/zenith-earners.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1106466072644f0971d746e8_12194754';
if ($_smarty_tpl->tpl_vars['settings']->value['index_last_add_funds']) {?>
<?php echo loaddata_smarty(array('name'=>"transactions",'limit'=>$_smarty_tpl->tpl_vars['settings']->value['index_last_add_funds'],'type'=>"add_funds",'var'=>"last_add_funds"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['last_add_funds']->value) {?>
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=4 class=title>Last Add Funds</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['last_add_funds']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
<tr>
 <td class=menutxt><img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['ec']);?>
.gif"></td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['amount']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['date']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
</td>
 </td>
</tr>
<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
</table>
<?php }
}
}
?>