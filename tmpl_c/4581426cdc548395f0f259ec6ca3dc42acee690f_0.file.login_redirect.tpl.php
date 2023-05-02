<?php /* Smarty version 3.1.27, created on 2023-05-01 01:32:33
         compiled from "/home/reconsxo/zenith-earners.com/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:820702359644f4ef171d292_45046490%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4581426cdc548395f0f259ec6ca3dc42acee690f' => 
    array (
      0 => '/home/reconsxo/zenith-earners.com/tmpl/login_redirect.tpl',
      1 => 1682901500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '820702359644f4ef171d292_45046490',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_644f4ef1738ca4_98802815',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_644f4ef1738ca4_98802815')) {
function content_644f4ef1738ca4_98802815 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/reconsxo/zenith-earners.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '820702359644f4ef171d292_45046490';
?>
<html>
<head>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
">
</head>
<body>
<center>
Hello <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
. You are redirecting to your 
<a href=?a=account>account</a> now.
<body>
</html><?php }
}
?>