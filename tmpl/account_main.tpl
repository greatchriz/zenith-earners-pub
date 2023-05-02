{include file="header.tpl"}
{literal}
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
{/literal}

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
                                        <h4 class="mb-0">{$userinfo.username}</h4>
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
      
                                        <h4 class="mb-0">{$currency_sign}{$ab_formated.total}</h4>
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
                                        <h4 class="mb-0">{$currency_sign}{$ab_formated.earning}</h4>
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
                                        <h4 class="mb-0">{$currency_sign}{$ab_formated.withdrawal}</h4>
                                        <!--<span class="badge badge-primary">+3.5%</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{include file="footer.tpl"}