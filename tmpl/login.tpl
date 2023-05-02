{include file="main_header.tpl"}
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

{literal}
    <script language=javascript>
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
    </script>
{/literal}

{if $frm.say eq 'invalid_login'}
    <h3>Login error:</h3><br><br>

    Your login or password or turing image code is wrong. Please check this information.
{/if}

<form method=post name=mainform onsubmit="return checkform()">
    <input type=hidden name=a value='do_login'>
    <input type=hidden name=follow value='{$frm.follow}'>
    <input type=hidden name=follow_id value='{$frm.follow_id}'>

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
                            <input id="username" name="username" value='{$frm.username|escape:"html"}'
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
                            <a href="{"?a=forgot_password"|encurl}">Lost your password?</a>
                        </div>
                    </div>
                </div>

</form>
        {include file="main_footer.tpl"}