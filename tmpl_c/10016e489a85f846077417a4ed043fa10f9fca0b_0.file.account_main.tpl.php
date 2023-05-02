<?php /* Smarty version 3.1.27, created on 2023-05-01 01:32:34
         compiled from "/home/reconsxo/zenith-earners.com/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:226657647644f4ef26bafa2_34573785%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10016e489a85f846077417a4ed043fa10f9fca0b' => 
    array (
      0 => '/home/reconsxo/zenith-earners.com/tmpl/account_main.tpl',
      1 => 1682901500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226657647644f4ef26bafa2_34573785',
  'variables' => 
  array (
    'userinfo' => 0,
    'currency_sign' => 0,
    'ab_formated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_644f4ef26e2f44_44393002',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_644f4ef26e2f44_44393002')) {
function content_644f4ef26e2f44_44393002 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/reconsxo/zenith-earners.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '226657647644f4ef26bafa2_34573785';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<style>
    .widget-stat .media {
    padding: 0px 0;
    align-items: center;
  }

  .widget-stat .media>span {
    height: 85px;
    width: 85px;
    border-radius: 50px;
    padding: 10px 12px;
    font-size: 32px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #464a53;
  }

  @media only screen and (max-width: 1400px) {
    .widget-stat .media>span {
      height: 70px;
      width: 70px;
      min-width: 70px;
    }
  }

  .widget-stat .media .media-body p {
    font-weight: 500;
    font-size: 16px;
    line-height: 1.5;
  }

  @media only screen and (max-width: 1400px) {
    .widget-stat .media .media-body p {
      font-size: 14px;
    }
  }

  [data-theme-version="dark"] .widget-stat .media .media-body p {
    color: #c4c9d5;
  }

  .widget-stat .media .media-body small,
  .widget-stat .media .media-body .small,
  .widget-stat .media .media-body .small {
    font-size: 75%;
  }

  .widget-stat .media .media-body h3,
  .widget-stat .media .media-body .h3 {
    font-size: 30px;
    font-weight: 600;
    margin: 0;
    line-height: 1.2;
  }

  .widget-stat .media .media-body h4,
  .widget-stat .media .media-body .h4 {
    font-size: 24px;
    display: inline-block;
    vertical-align: middle;
  }

  .widget-stat .media .media-body span {
    margin-left: 5px;
  }

  .widget-stat[class*="bg-"] .media>span {
    background-color: rgba(255, 255, 255, 0.25);
    color: #fff;
  }

  .widget-stat[class*="bg-"] .progress {
    background-color: rgba(255, 255, 255, 0.25) !important;
  }

  [direction="rtl"] .widget-stat .media .media-body span {
    margin-left: 0;
    margin-right: 10px;
  }

</style>


<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body p-4">
                                <div class="media ai-icon">
                                    <span class="me-3 bgl-primary text-primary">
                                        <!-- <i class="ti-user"></i> -->
                                        <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                            height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </span>
                                    <div class="media-body">
                                        <p class="mb-1">User:</p>
                                        <h4 class="mb-0"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</h4>
                                        <!--<span class="badge badge-primary">+3.5%</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body p-4">
                                <div class="media ai-icon">
                                    
                                    <span class="me-3 bgl-primary text-primary">
                                        <!-- <i class="ti-user"></i> -->
                                        <i class="fi fi-rr-wallet"></i>
                                        
                                    </span>
                                    <div class="media-body">
                                        <p class="mb-1">Account Balance:</p>
      
                                        <h4 class="mb-0"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</h4>
                                        <!--<span class="badge badge-primary">+3.5%</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body p-4">
                                <div class="media ai-icon">
                                    <span class="me-3 bgl-primary text-primary">
                                        <!-- <i class="ti-user"></i> -->
                                      <i class="fi fi-rr-sack dollar"></i>
                                    </span>
                                    <div class="media-body">
                                        <p class="mb-1">Earned Total:</p>
                                        <h4 class="mb-0"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['earning']);?>
</h4>
                                        <!--<span class="badge badge-primary">+3.5%</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body p-4">
                                <div class="media ai-icon">
                                    <span class="me-3 bgl-primary text-primary">
                                        <!-- <i class="ti-user"></i> -->
                                        <i class="fi fi-rr-credit-card"></i>
                                    </span>
                                    <div class="media-body">
                                        <p class="mb-1">Withdrew Total:</p>
                                        <h4 class="mb-0"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']);?>
</h4>
                                        <!--<span class="badge badge-primary">+3.5%</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>