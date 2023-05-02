<?php /* Smarty version 3.1.27, created on 2023-04-30 23:00:48
         compiled from "/home/reconsxo/zenith-earners.com/tmpl/layout-nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1363358110644f2b60e412a8_68824317%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08b5f3619d2cf9964f6f35289b869562f3376e84' => 
    array (
      0 => '/home/reconsxo/zenith-earners.com/tmpl/layout-nav.tpl',
      1 => 1682909911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1363358110644f2b60e412a8_68824317',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_644f2b60e46952_60159001',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_644f2b60e46952_60159001')) {
function content_644f2b60e46952_60159001 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1363358110644f2b60e412a8_68824317';
?>
 <!-- ======= Header ======= -->
    <header
      id="header"
      class="fixed-top d-flex align-items-center header-transparent"
    >
      <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
          <h1 class="text-light"><a href="?a=home"><span>Moderna</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="?a=home"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav
          id="navbar"
          class="navbar"
        >
          <ul>
            <li><a
                class="active "
                href="?a=home"
              >Home</a></li>
            <li><a href="?a=about">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header --><?php }
}
?>