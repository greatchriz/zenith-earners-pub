<?php /* Smarty version 3.1.27, created on 2023-04-30 20:44:21
         compiled from "my:editaccount_2" */ ?>
<?php
/*%%SmartyHeaderCode:2082472058644f0b65a5a1b3_31503184%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3343014239e3e2b8908ea06697548cf733a73735' => 
    array (
      0 => 'my:editaccount_2',
      1 => 1682901861,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '2082472058644f0b65a5a1b3_31503184',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_644f0b65a5ce66_31895245',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_644f0b65a5ce66_31895245')) {
function content_644f0b65a5ce66_31895245 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2082472058644f0b65a5a1b3_31503184';
?>
 <tr> <td>E-mail address:</td> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr><?php }
}
?>