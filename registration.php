<?php
session_start();

require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/neandertal/NFC.php');
require_once(__DIR__ . '/neandertal/NFCDao.php');
require_once(__DIR__ . '/neandertal/NFCViewModel.php');
require_once(__DIR__ . '/neandertal/NFCController.php');

use Neandertal\NFCDao;
use Neandertal\NFCController;
use Dotenv\Dotenv;

// loads the environment variables from .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dao = new NFCDao($_ENV);
$controller = new NFCController($dao, $_ENV, $_GET, $_POST);
$data = $controller->viewModel;

$isOwner = $data->isOwner;
$isDark = $data->isDark;
$isLight = $data->isLight;
$ownerTitle = $data->ownerTitle;
$imageSrc = $data->imageSrc;

?>


<!DOCTYPE html>
<html lang="en-US">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

   <title>Home - Neandertal®</title>

   <link rel='stylesheet' id='bridge-default-style-css' href='https://neandertal.co.uk/wp-content/themes/bridge/style.css?ver=5.4.2' type='text/css' media='all' />
   <link rel='stylesheet' id='bridge-qode-font_awesome-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/font-awesome/css/font-awesome.min.css?ver=5.4.2' type='text/css' media='all' />
   <link rel='stylesheet' id='bridge-stylesheet-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/stylesheet.min.css?ver=5.4.2' type='text/css' media='all' />
   <link rel='stylesheet' id='bridge-print-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/print.css?ver=5.4.2' type='text/css' media='all' />
   <link rel='stylesheet' id='bridge-style-dynamic-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/style_dynamic.css?ver=1599148417' type='text/css' media='all' />
   <link rel='stylesheet' id='bridge-responsive-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/responsive.min.css?ver=5.4.2' type='text/css' media='all' />
   <link rel='stylesheet' id='bridge-style-dynamic-responsive-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/style_dynamic_responsive.css?ver=1599148417' type='text/css' media='all' />
   <link rel='stylesheet' id='js_composer_front-css' href='https://neandertal.co.uk/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.2.0' type='text/css' media='all' />
   <link rel='stylesheet' id='bridge-style-handle-google-fonts-css' href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic%7CCrimson+Text%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic&#038;subset=latin%2Clatin-ext&#038;ver=1.0.0' type='text/css' media='all' />

   <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
   <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>

   <style>
      .registration-form {
         margin: 0px auto;
      }

      .registration-form fieldset {
         padding: 5px;
      }

      .registration-form label {
         color: #666;
         padding: 5px 10px;
         display: block;
      }

      .registration-form input {
         padding: 10px 20px;
         border: 1px solid #ddd;
         display: inline-block;
         width: 200px;
         text-align: center;
      }

      .registration-form button {
         background: #ddd;
         border: 1px solid #ccc;
         padding: 10px 30px;
         margin-top: 20px;
         cursor: pointer;
      }
   </style>
</head>

<body style="padding-left: 3%; padding-right: 3%;">
   <div class="ajax_loader">
      <div class="ajax_loader_1">
         <div class="double_pulse">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
         </div>
      </div>
   </div>
   <div class="wrapper">
      <div class="wrapper_inner">


         <header class=" centered_logo scroll_header_top_area dark fixed transparent header_style_on_scroll page_header">
            <div class="header_inner clearfix">
               <div class="header_top_bottom_holder">
                  <div class="header_bottom clearfix" style=' background-color:rgba(0, 0, 0, 0);'>
                     <div class="container">
                        <div class="container_inner clearfix">
                           <div class="header_inner_left">
                              <div class="mobile_menu_button">
                                 <span>
                                    <i class="qode_icon_font_awesome fa fa-bars "></i> </span>
                              </div>
                              <div class="logo_wrapper">
                                 <div class="q_logo">
                                    <a itemprop="url" href="https://neandertal.co.uk/">
                                       <img itemprop="image" class="normal" src="https://neandertal.co.uk/wp-content/uploads/2020/04/neandertal200b.png" alt="Logo"> <img itemprop="image" class="light" src="https://neandertal.co.uk/wp-content/uploads/2020/04/neandertal200w.svg" alt="Logo" /> <img itemprop="image" class="dark" src="https://neandertal.co.uk/wp-content/uploads/2020/04/neandertal200b.svg" alt="Logo" /> <img itemprop="image" class="sticky" src="https://neandertal.co.uk/wp-content/uploads/2020/04/neandertal200b.svg" alt="Logo" /> <img itemprop="image" class="mobile" src="https://neandertal.co.uk/wp-content/uploads/2020/04/neandertal200b.svg" alt="Logo" /> </a>
                                 </div>
                              </div>
                              <div class="header-widget widget_woocommerce-dropdown-cart header-right-from-logo-widget">
                                 <div class="header-right-from-logo-widget-inner">
                                    <div class="header-right-from-logo-widget-inner2">
                                       <div class="shopping_cart_outer">
                                          <div class="shopping_cart_inner">
                                             <div class="shopping_cart_header">
                                                <a class="header_cart" href="https://neandertal.co.uk/shop/cart/"><span class="header_cart_span">0</span></a>
                                                <div class="shopping_cart_dropdown">
                                                   <div class="shopping_cart_dropdown_inner">
                                                      <ul class="cart_list product_list_widget">
                                                         <li>No products in the cart.</li>
                                                      </ul>
                                                   </div>
                                                   <a itemprop="url" href="https://neandertal.co.uk/shop/cart/" class="qbutton white view-cart">Cart <i class="fa fa-shopping-cart"></i></a>
                                                   <span class="total">Total:<span><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>0.00</bdi></span></span></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="header_inner_right">
                              <div class="side_menu_button_wrapper right">
                                 <div class="side_menu_button">
                                 </div>
                              </div>
                           </div>
                           <nav class="mobile_menu">
                              <ul id="menu-top_menu-1" class="">
                                 <li id="mobile-menu-item-22138" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active">
                                    <a href="/" class=" current ">
                                       <span>Home</span>
                                    </a>
                                    <span class="mobile_arrow">
                                       <i class="fa fa-angle-right"></i>
                                       <i class="fa fa-angle-down"></i>
                                    </span>
                                 </li>
                                 <li id="mobile-menu-item-15639" class="menu-item menu-item-type-custom menu-item-object-custom ">
                                    <a href="https://neandertal.co.uk/story/" class="">
                                       <span>STORY</span></a><span class="mobile_arrow">
                                       <i class="fa fa-angle-right"></i>
                                       <i class="fa fa-angle-down"></i>
                                    </span>
                                 </li>
                                 <li id="mobile-menu-item-22384" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="https://neandertal.co.uk/find/" class=""><span>FIND</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
                                 <li id="mobile-menu-item-15737" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="https://neandertal.co.uk/shop/" class=""><span>SHOP</span></a>
                                    <span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
                                 </li>
                                 <li id="mobile-menu-item-16761" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://neandertal.co.uk/shop/cart/" class=""><span>Cart</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>


         <div class="wrapper">
            <div class="wrapper_inner">



               <div class="content" style="min-height:100%; width:100%; position:relative; display:block;">
                  <div class="wpb_text_column wpb_content_element" style="text-align:center;">

                     <?php if ($controller->message) { ?>
                        <h4><?= $controller->message ?></h4>
                     <?php } ?>

                     <h3><br /> <?= $ownerTitle . $data->nfc->decoded . '.' ?> </h3>
                     <h3><?= 'Sold to: ' . $data->nfc->ownerName . '.' ?> </h3>
                     <h3><?= 'Shipped on: ' . $data->soldDisplayDate . '.' ?> </h3>


                     <div id="photos" style="padding-top: 30px;">
                        <img src="<?= $data->imageSrc ?>" />
                     </div>
                     <div class="indridients">
                        <?php
                        if ($isDark) {

                           echo ("<h3>Neandertal dark&trade; contains olfactory elements: <br />
Top note – Foliage, Ginger, Pink pepper, Grapefruit &amp; Pine.<br />
Heart note – Incense, Geranium, Caraway &amp; Seaweed.<br />
Base note – Vetiver, Patchouli, Oud, Amber, Musk, Leather, Sandalwood, Tobacco &amp; Labdanum absolute.</h3>");
                        } elseif ($isLight) {
                           echo ("<h3>Neandertal light&trade; contains olfactory elements: <br />
Top notes – Hinoki, Coriander, Galbanum &amp; Violet Leaf.<br />
Heart notes – Orris &amp; Metallic accord.<br />
Base notes – Ambergris, Patchouli, Leather, Cedar &amp; Musk</h3>");
                        }
                        ?>


                     </div>

                     <div class="separator " style="margin-top: 50px;margin-bottom: 50px;"></div>


                     <!-- product registration form -->
                     <?php if ($data->nfc->decoded != null) { ?>
                        <form method="POST" class="registration-form">
                           <h3 style="text-decoration: underline;">Product registration</h3>

                           <h3>Benefits...</h3>

                           <fieldset>
                              <label>Your name</label>
                              <input name="ownerName" value="<?= $data->nfc->ownerName ?>" />
                           </fieldset>
                           <fieldset>
                              <label>Your email</label>
                              <input name="ownerEmail" value="<?= $data->nfc->ownerEmail ?>" />
                           </fieldset>
                           <fieldset>
                              <label>Your address</label>
                              <input name="ownerAddress" value="<?= $data->nfc->ownerAddress ?>" />
                           </fieldset>
                           <fieldset>
                              <label>Purchased from</label>
                              <input name="soldAt" value="<?= $data->nfc->soldAt ?>" />
                           </fieldset>
                           <fieldset>
                              <button type="submit">Save details</button>
                           </fieldset>
                        </form>
                        <div class="separator " style="margin-top: 50px;margin-bottom: 50px;"></div>
                     <?php } ?>


                     <?php
                     if ($isOwner) {
                        echo ("<div class=\"indridients\"><h3 style=\"text-decoration: underline;\">Special offers for owners. </h3>
                           <h3>Please redeem special discount by entering the code \"modernhuman\" at our <a href=\"https://neandertal.co.uk/shop/\">online store</a> to get special discounts. <br /> If you would like your friend to experience Neandertal, please <a href=\"mailto:contact@neandertal.co.uk?subject=Free sample request from app code:" . $encoded . " \">click here and email us</a> with his/her details. We will send Neandertal light and dark samples for free.</h3>
                           <h3>Feel free to <a href=\"mailto:contact@neandertal.co.uk?subject=Email from App\">email us</a> for any further feedback on our products.</h3>
                           </div> ");
                     } else {
                        echo ("<h3>Please visit <a href=\"https://www.instagram.com/neandertalperfume\">Neandertal Instagram</a> for special offers</h3>");
                     }
                     ?>


                     <div class="separator " style="margin-top: 50px;margin-bottom: 50px;"></div>


                  </div>
               </div>
               <!-- <footer>
               <div class="footer_inner clearfix" >
                  <div class="footer_top_holder">

                  </div>
                  <div class="footer_bottom_holder">
                     <div class="container">
                        <div class="container_inner">
                           <div class="footer_bottom">
                              <div class="textwidget">
                                 <div class="separator  transparent center  " style="margin-top: 10px;margin-bottom: 0px;"></div>
                                 &copy; Neandertal&trade; 2018, All Rights Reserved
                                 <div class="separator  transparent center  " style="margin-top: 10px;margin-bottom: 0px;"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </footer> -->
            </div>
         </div>









         <script type="text/javascript">
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
         </script>







         <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect.min.js?ver=1.11.4'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/doubletaptogo.js?ver=5.4.2'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/modernizr.min.js?ver=5.4.2'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.appear.js?ver=5.4.2'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/hoverIntent.min.js?ver=1.8.1'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/counter.js?ver=5.4.2'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/easypiechart.js?ver=5.4.2'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/mixitup.js?ver=5.4.2'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.prettyPhoto.js?ver=5.4.2'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.fitvids.js?ver=5.4.2'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.flexslider-min.js?ver=5.4.2'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.13-9993131'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=5.4.2'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/default_dynamic.js?ver=1599148417'></script>
         <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/default.min.js?ver=5.4.2'></script>

</body>

</html>