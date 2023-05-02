{include file="main_header.tpl"}

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img10">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Registration
            </h1>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

{if $deny_registration}
    We are closed for new registrations now.
{elseif $settings.use_referal_program && $settings.force_upline && !$referer && !$settings.get_rand_ref}
    You do not have a upline. Our system require a upline for each user.
{else}
    {literal}

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 {/literal}
 {if $settings.use_user_location == 1}
 {literal}
  if (document.regform.address.value == '') {
    alert("Please enter your address!");
    document.regform.address.focus();
    return false;
  }
  if (document.regform.city.value == '') {
    alert("Please enter your city!");
    document.regform.city.focus();
    return false;
  }
  if (document.regform.state.value == '') {
    alert("Please enter your state!");
    document.regform.state.focus();
    return false;
  }
  if (document.regform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.regform.zip.focus();
    return false;
  }
  if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.regform.country.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 {/literal}
 {if $settings.use_transaction_code}
 {literal}
  if (document.regform.transaction_code.value == '') {
    alert("Please enter your transaction code!");
    document.regform.transaction_code.focus();
    return false;
  }
  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.regform.transaction_code2.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }


  for (i in document.regform.elements) {
    f = document.regform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>
 {/literal}

    {if $errors}
        <ul style="color:red">
            {section name=e loop=$errors}
                {if $errors[e] eq 'full_name'}
                    <li>Please enter your full name!
                    {/if}
                    {if $errors[e] eq 'address'}
                    <li>Please enter your address!
                    {/if}
                    {if $errors[e] eq 'city'}
                    <li>Please enter your city!
                    {/if}
                    {if $errors[e] eq 'state'}
                    <li>Please enter your state!
                    {/if}
                    {if $errors[e] eq 'zip'}
                    <li>Please enter your zip!
                    {/if}
                    {if $errors[e] eq 'country'}
                    <li>Please choose your country!
                    {/if}
                    {if $errors[e] eq 'username'}
                    <li>Please enter valid username! It should contains English letters and digits only.
                    {/if}
                    {if $errors[e] eq 'username_exists'}
                    <li>Sorry, such user already exists! Please try another username.
                    {/if}
                    {if $errors[e] eq 'email_exists'}
                    <li>Sorry, such email already exists! Please try another email.
                    {/if}
                    {if $errors[e] eq 'password'}
                    <li>Please enter a password!
                    {/if}
                    {if $errors[e] eq 'password_confirm'}
                    <li>Please check your password!
                    {/if}
                    {if $errors[e] eq 'password_too_small'}
                    <li>The password you provided is too small, please enter at least {$settings.min_user_password_length} characters!
                    {/if}
                    {if $errors[e] eq 'transaction_code'}
                    <li>Please enter the Transaction Code!
                    {/if}
                    {if $errors[e] eq 'transaction_code_confirm'}
                    <li>Please check your Transaction Code!
                    {/if}
                    {if $errors[e] eq 'transaction_code_too_small'}
                    <li>The Transaction Code you provided is too small, please enter at least {$settings.min_user_password_length}
                        characters!
                    {/if}
                    {if $errors[e] eq 'transaction_code_vs_password'}
                    <li>The Transaction Code should differ from the Password!
                    {/if}
                    {if $errors[e] eq 'email'}
                    <li>Please enter your e-mail!
                    {/if}
                    {if $errors[e] eq 'email2'}
                    <li>Please check your email!
                    {/if}
                    {if $errors[e] eq 'agree'}
                    <li>You have to agree with the Terms and Conditions!
                    {/if}
                    {if $errors[e] eq 'turing_image'}
                    <li>Enter the verification code as it is shown in the corresponding box.
                    {/if}
                    {if $errors[e] eq 'no_upline'}
                    <li>The system requires an upline to register. {if $settings.get_rand_ref}You have to be agreed to random one or
                            found
                        a referral link in the net.{/if}
                    {/if}
                    {if $errors[e] eq 'ip_exists_in_database'}
                    <li>Your IP already exists in our database. Sorry, but registration impossible.
                    {/if}

                    {if $errors[e] eq 'invalid_account_format'}
                        {foreach from=$account_errors item=err}
                        <li>{$err}
                        {/foreach}
                    {/if}

                    <br>
                {/section}
        </ul>
    {/if}
    <!-- Checkout section start -->
    <div id="rs-checkout" class="rs-checkout pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="coupon-toggle">
                <div id="accordion" class="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <div class="card-title">
                                <span><i class="fa fa-window-maximize"></i> Already have an account?</span>
                                <button class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">Login Now</button>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                            <div class="card-body">
                                <p>To login to your account, click below.</p>
                                <div class="coupon-code-input">

                                </div>
                                <a href="?a=login"><button class="add-btn">LOGIN</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="full-grid">
                <form method=post onsubmit="return checkform()" name="regform">
                    <input type=hidden name=a value="signup">
                    <input type=hidden name=action value="signup">
                    <div class="checkout-title">
                        <h3>User details</h3>
                    </div>
                    <div class="form-content-box">
                        <div class="row">

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Fullname *</label>
                                    <input id="name" name=fullname value='{$frm.fullname|escape:"quotes"}'
                                        class="form-control-mod" type="text" required="">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Username *</label>
                                    <input id="username" name="username" value='{$frm.username|escape:"quotes"}'
                                        class="form-control-mod" type="text" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Define Password *</label>
                                    <input id="password" name=password value='{$frm.password|escape:"quotes"}'
                                        class="form-control-mod" type="text" required="">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Retype Paasword *</label>
                                    <input id="password2" name=password2 value='{$frm.password2|escape:"quotes"}'
                                        class="form-control-mod" type="text" required="">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Email Address *</label>
                                    <input id="email" name="email" value='{$frm.email|escape:"quotes"}'
                                        class="form-control-mod" type="email">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Retype Your E-mail *</label>
                                    <input id="email1" name=email1 value='{$frm.email1|escape:"quotes"}'
                                        class="form-control-mod" type="email">
                                </div>
                            </div>

                            {if $settings.use_referal_program}
                                {if $referer}
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Your Upline *</label>
                                            <input id="email1" name=email1 value='{$referer.username|escape:html}'
                                                class="form-control-mod" type="text" disabled>
                                        </div>
                                    </div>

                                {/if}
                            {/if}

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name=agree value=1
                                        {if $frm.agree}checked{/if} value="1" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree with <a href="{"?a=rules"|encurl}">Terms and conditions</a>
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="payment-method mt-40 md-mt-20">

                            <div class="bottom-area">
                                <p class="mt-15"></p>
                                <input class="add-btn" type="submit" value="Register" id="submit">
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
{/if}
<!-- Checkout section end -->
       {include file="main_footer.tpl"}