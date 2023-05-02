<?php /* Smarty version 3.1.27, created on 2023-05-01 10:05:01
         compiled from "/home/reconsxo/zenith-earners.com/tmpl/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:980818843644fc70dde27d6_18967078%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6ae255c76e6ee7b310b939f1b57d624db1a82e9' => 
    array (
      0 => '/home/reconsxo/zenith-earners.com/tmpl/login.tpl',
      1 => 1682901500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '980818843644fc70dde27d6_18967078',
  'variables' => 
  array (
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_644fc70de0adc6_21888484',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_644fc70de0adc6_21888484')) {
function content_644fc70de0adc6_21888484 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/reconsxo/zenith-earners.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '980818843644fc70dde27d6_18967078';
echo $_smarty_tpl->getSubTemplate ("main_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img2">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Login Account
            </h1>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->


    <?php echo '<script'; ?>
 language=javascript>
        function checkform() {
            if (document.mainform.username.value == '') {
                alert("Please type your username!");
                document.mainform.username.focus();
                return false;
            }
            if (document.mainform.password.value == '') {
                alert("Please type your password!");
                document.mainform.password.focus();
                return false;
            }
            return true;
        }
    <?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'invalid_login') {?>
    <h3>Login error:</h3><br><br>

    Your login or password or turing image code is wrong. Please check this information.
<?php }?>

<form method=post name=mainform onsubmit="return checkform()">
    <input type=hidden name=a value='do_login'>
    <input type=hidden name=follow value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow']);?>
'>
    <input type=hidden name=follow_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow_id']);?>
'>

    <!-- My Account Section Start -->
    <div class="rs-my-account pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 md-mb-50">
                    <h2 class="title pb-30 md-pb-15">Login</h2>
                    <br>

                    <br>
                    <div class="rs-login">
                        <div class="form-group mb-30">
                            <label>Username<span>*</span></label>
                            <input id="username" name="username" value='<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
'
                                class="form-control-mod" type="text" required="" autofocus="autofocus">

                            <label>Password <span>*</span></label>
                            <input id="password" name="password" value='' class="form-control-mod" type="password"
                                required="">
                        </div>
                        <button class="add-btn" type="submit" value="Login" id="submit">Log In</button>
                        <label>
                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme"
                                type="checkbox" id="rememberme" value="forever">
                            <span>Remember me</span>
                        </label>
                        <div class="last-password pt-30">
                            <a href="<?php echo smarty_modifier_myescape(encurl("?a=forgot_password"));?>
">Lost your password?</a>
                        </div>
                    </div>
                </div>

</form>
        <?php echo $_smarty_tpl->getSubTemplate ("main_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>