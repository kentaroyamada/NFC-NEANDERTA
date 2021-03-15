<?php

/* be sure to require `hashids` in your `composer.json` file first */
require_once(__DIR__.'/vendor/autoload.php');





$hashids = new Hashids\Hashids('9hrs2etx', 8);

$isOwner = false;
$isDark = false;
$isLight = false;
$encoded = 0;


if ( substr( $_GET["id"], 0, 4 ) === "TEST" ){

 
   $owner="TESTER UNIT <BR> NOT FOR RESALE";
   if ( substr( $_GET["id"], 7, 2) == "ND" ){
      $isDark = true;

   }
   else if(substr( $_GET["id"], 7, 2) == "NL") {

      $isLight = true;
   }
}

else{

$encoded = $_GET["id"]
$input = $hashids->decode($encoded);
$input= $input[0];


echo($encoded);



$owner="non-owner";

   if($input == '') {

   }


   else if($input < 1000) {
   $owner="Neandertal dark&trade; 2018 Owner ID ";
   $isDark = true;
   $isOwner = true;
   }
   else if($input > 1000){
   $owner="Neandertal light&trade; 2018 Owner ID ";
   $input=$input-1000;
   $isOwner = true;
   $isLight = true;
   }
   else {
   $owner="You are not an owner ";
   }

}

?>

<!DOCTYPE html>
<html lang="en-US">

<script type="text/rocketscript" data-rocketsrc="https://neandertal.co.uk/wp-includes/js/jquery/jquery.js"></script>
<script type="text/rocketscript" data-rocketsrc="https://neandertal.co.uk/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
<script type="text/rocketscript" data-rocketsrc="https://neandertal.co.uk/wp-content/plugins/mailchimp//js/scrollTo.js?ver=1.5.7"></script>
<script type="text/rocketscript" data-rocketsrc="https://neandertal.co.uk/wp-includes/js/jquery/jquery.form.min.js?ver=4.2.1"></script>

   <head>
      <meta charset="UTF-8" />
      <title>Neandertal™ Owners</title>
      <meta name="description" content="The Neandertal project was inspired by the history of Neandertal, who mysteriously disappeared from earth around 30,000 years ago. They are often thought to be wild and animal-like beings, but recent discoveries have proven their highly intelligent life and sophistication. Neandertals painted geometric shapes as cave paintings before humans, used musical instruments and very likely spoke their own language.
         Neandertal perfume is designed for the contemporary Neandertal. It reflects their life in the past as well as the sophisticated future they never had the chance to see. 
         The two unisex fragrances were created by Scottish perfumer Euan McCall, inspired by an invention of what a Neandertal’s essence might have been today, should they have evolved alongside us. Ingredients such as musk and amber, natural to their environments, are combined with fresher tones compounding into a mixture of sophisticated olfactory palettes wearable by today’s humans.">
      <meta name="keywords" content="Nendertal, Neanderthal, Perfum, Parfum, Kentaro Yamada, Euan McCall, Prehistoric, stone tool, Fragrance, art, ace hotel Perfume,">
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

      <link rel="profile" href="https://gmpg.org/xfn/11" />
      <link rel="pingback" href="https://neandertal.co.uk/xmlrpc.php" />
      <link rel="shortcut icon" type="image/x-icon" href="https://neandertal.co.uk/wp-content/uploads/2015/09/favicon.png">
      <link rel="apple-touch-icon" href="https://neandertal.co.uk/wp-content/uploads/2015/09/favicon.png" />


      <style type="text/css">
         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }


         .indridients {
            padding: 5%;
            margin-top: 50px;
         }



      </style>
      <link rel='stylesheet' id='mailchimpSF_main_css-css' href='https://neandertal.co.uk/?mcsf_action=main_css&#038;ver=4.9.4' type='text/css' media='all' />
      <!--[if IE]>
      <link rel='stylesheet' id='mailchimpSF_ie_css-css'  href='https://neandertal.co.uk/wp-content/plugins/mailchimp/css/ie.css?ver=4.9.4' type='text/css' media='all' />
      <![endif]-->
      <link rel='stylesheet' id='layerslider-css' href='https://neandertal.co.uk/wp-content/plugins/LayerSlider/static/css/layerslider.css?ver=5.4.0' type='text/css' media='all' />
      <link rel='stylesheet' id='ls-google-fonts-css' href='https://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
      <link rel='stylesheet' id='rs-plugin-settings-css' href='https://neandertal.co.uk/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.6.6' type='text/css' media='all' />

      <link rel='stylesheet' id='cookie-consent-style-css' href='https://neandertal.co.uk/wp-content/plugins/uk-cookie-consent/assets/css/style.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='default_style-css' href='https://neandertal.co.uk/wp-content/themes/bridge/style.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='qode_font_awesome-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='qode_font_elegant-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/elegant-icons/style.min.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='qode_linea_icons-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/linea-icons/style.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='qode_dripicons-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/dripicons/dripicons.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='stylesheet-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/stylesheet.min.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/woocommerce.min.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce_responsive-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/woocommerce_responsive.min.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='qode_print-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/print.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='mac_stylesheet-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/mac_stylesheet.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='webkit-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/webkit_stylesheet.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='style_dynamic-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/style_dynamic.css?ver=1519317805' type='text/css' media='all' />
      <link rel='stylesheet' id='responsive-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/responsive.min.css?ver=4.9.4' type='text/css' media='all' />
      <link rel='stylesheet' id='style_dynamic_responsive-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/style_dynamic_responsive.css?ver=1519317805' type='text/css' media='all' />
      <link rel='stylesheet' id='js_composer_front-css' href='https://neandertal.co.uk/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.4.5' type='text/css' media='all' />
      <link rel='stylesheet' id='custom_css-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/custom_css.css?ver=1519317805' type='text/css' media='all' />

        <link rel="shortcut icon" type="image/x-icon" href="https://neandertal.co.uk/wp-content/uploads/2015/09/favicon.png">
  <link rel="apple-touch-icon" href="https://neandertal.co.uk/wp-content/uploads/2015/09/favicon.png"/>
  <link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900,300italic,400italic|Crimson+Text:100,200,300,400,500,600,700,800,900,300italic,400italic|Montserrat:100,200,300,400,500,600,700,800,900,300italic,400italic|Raleway:100,200,300,400,500,600,700,800,900,300italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>





<script type="text/rocketscript">

      <style id="ctcc-css" type="text/css" media="screen">
         #catapult-cookie-bar {
         box-sizing: border-box;
         max-height: 0;
         opacity: 0;
         z-index: 99999;
         overflow: hidden;
         color: #000000;
         position: fixed;
         left: 0;
         bottom: 0;
         width: 100%;
         background-color: #ffffff;
         }
         #catapult-cookie-bar a {
         color: #b7b7b7;
         }
         #catapult-cookie-bar .x_close span {
         background-color: ;
         }
         button#catapultCookie {
         background:;
         color: ;
         border: 0; padding: 6px 9px; border-radius: 3px;
         }
         #catapult-cookie-bar h3 {
         color: #000000;
         }
         .has-cookie-bar #catapult-cookie-bar {
         opacity: 1;
         max-height: 999px;
         min-height: 30px;
         }



      </style>
      <noscript>
         <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
      </noscript>
      <!--[if lte IE 9]>
      <link rel="stylesheet" type="text/css" href="https://neandertal.co.uk/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen">
      <![endif]-->
      <meta name="generator" content="Powered by Slider Revolution 5.4.6.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
      <script type="text/javascript">function setREVStartSize(e){
         document.addEventListener("DOMContentLoaded", function() {
          try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
            if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})          
          }catch(d){console.log("Failure at Presize of Slider:"+d)}
         });
         };
      </script>




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2752832-14"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-2752832-14');
</script>

      
      <noscript>
         <style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style>
      </noscript>



   </head>
   <body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page ajax_fade page_not_loaded   vertical_menu_transparency vertical_menu_transparency_on qode-title-hidden columns-3 qode-theme-ver-13.5 qode-theme-bridge disabled_footer_top wpb-js-composer js-comp-ver-5.4.5 vc_responsive" itemscope itemtype="http://schema.org/WebPage">
      <div class="ajax_loader">
         <div class="ajax_loader_1">
            <div class="two_rotating_circles">
               <div class="dot1"></div>
               <div class="dot2"></div>
            </div>
         </div>
      </div>
      <div class="wrapper">
         <div class="wrapper_inner">

            <header class=" centered_logo scroll_header_top_area dark fixed transparent header_style_on_scroll page_header">
               <div class="header_inner clearfix">
                  <div class="header_top_bottom_holder">
                     <div class="header_bottom clearfix" style=' background-color:rgba(255, 255, 255, 0);'>
                        <div class="container" style=" height:100%;">
                           <div class="container_inner clearfix">
                              <div class="header_inner_left">

                                 <div class="logo_wrapper">
                                    <div class="q_logo">
                                       <a itemprop="url" href="https://neandertal.co.uk/" style="visibility: visible;">
                                       <img itemprop="image" class="normal" src="https://neandertal.co.uk/wp-content/uploads/2018/01/logob2.png" alt="Logo" /> <img itemprop="image" class="light" src="https://neandertal.co.uk/wp-content/uploads/2018/01/logow2.png" alt="Logo" /> <img itemprop="image" class="dark" src="https://neandertal.co.uk/wp-content/uploads/2018/01/logob2.png" alt="Logo" /> <img itemprop="image" class="sticky" src="https://neandertal.co.uk/wp-content/uploads/2018/01/logob2.png" alt="Logo" /> <img itemprop="image" class="mobile" src="https://neandertal.co.uk/wp-content/uploads/2018/02/logob2-2.png@2-2.png" alt="Logo" /> </a>
                                    </div>
                                 </div>

                              </div>

                              <div class="header_inner_right">
                                 <div class="side_menu_button_wrapper right">
                                    <div class="side_menu_button"></div>
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </header>

            <div class="content" style="min-height:100%; width:100%; position:relative; display:block;">
               <div class="wpb_text_column wpb_content_element" style="text-align:center;  padding-top:5%;">

                     <h3><br /> <?php echo $owner . $input . '.'; ?> </h3>

                     <div id="photos">
                        <?php if($isDark) {
                           echo ( " <img src=\"images/ND-3.jpg\"> ");
                        }
                        elseif ($isLight) {
                           echo ( "<img src=\"images/NL.jpg\"> ");
                        }
                        else{
                           echo ( "<img src=\"images/ND-3.jpg\"> ");
                        }
                        ?>
                     </div>
                     <div class="indridients" >
                        <?php
                              if($isDark) {

                                 echo ("<h3>Neandertal dark&trade; contains olfactory elements: <br />
Top note – Foliage, Ginger, Pink pepper, Grapefruit &amp; Pine.<br />
Heart note – Incense, Geranium, Caraway &amp; Seaweed.<br />
Base note – Vetiver, Patchouli, Oud, Amber, Musk, Leather, Sandalwood, Tobacco &amp; Labdanum absolute.</h3>"
);
                              }
                              elseif ($isLight) {
                                 echo ("<h3>Neandertal light&trade; contains olfactory elements: <br />
Top notes – Hinoki, Coriander, Galbanum &amp; Violet Leaf.<br />
Heart notes – Orris &amp; Metallic accord.<br />
Base notes – Ambergris, Patchouli, Leather, Cedar &amp; Musk</h3>");
                              }
                              else {}
                        ?>

                        
                     </div>
                     <div class="separator " style="margin-top: 50px;margin-bottom: 50px;"></div>

                     <?php 
                        if ($isOwner == true) {
                          echo( "<div class=\"indridients\"><h3 style=\"text-decoration: underline;\">Special offers for owners. </h3>
                           <h3>Enter the coupon code \"modernhuman\" at our <a href=\"http://neandertal.co.uk/shop/\">online store</a> to get 10% off and free shipping. <br />If you would like your friend to experience Neandertal, please <a href=\"mailto:contact@neandertal.co.uk?subject=Sample request by " .$encoded . "\">email us</a>  us with his/her details. We will send Neandertal ligh and dark samples for free.</h3>
                           <h3>Feel free to<a href=\"mailto:contact@neandertal.co.uk\">email us</a>for feedback and special requests.</h3>
                           </div> ");


                        }
                        else {
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

<script type="text/rocketscript" data-rocketsrc="https://neandertal.co.uk/wp-includes/js/jquery/jquery.js"></script>
<script type="text/rocketscript" data-rocketsrc="https://neandertal.co.uk/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
<script type="text/rocketscript" data-rocketsrc="https://neandertal.co.uk/wp-content/plugins/mailchimp//js/scrollTo.js?ver=1.5.7"></script>
<script type="text/rocketscript" data-rocketsrc="https://neandertal.co.uk/wp-includes/js/jquery/jquery.form.min.js?ver=4.2.1"></script>


      <script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@graph":[{"@type":"Product","@id":"https:\/\/neandertal.co.uk\/shop\/neandertal-perfume-dark-001\/","name":"Neandertal\u2122 dark","url":"https:\/\/neandertal.co.uk\/shop\/neandertal-perfume-dark-001\/"},{"@type":"Product","@id":"https:\/\/neandertal.co.uk\/shop\/neandertal-perfume-light-001\/","name":"Neandertal light\u2122","url":"https:\/\/neandertal.co.uk\/shop\/neandertal-perfume-light-001\/"},{"@type":"Product","@id":"https:\/\/neandertal.co.uk\/shop\/dark-sample\/","name":"Neandertal dark\u2122 Sample","url":"https:\/\/neandertal.co.uk\/shop\/dark-sample\/"},{"@type":"Product","@id":"https:\/\/neandertal.co.uk\/shop\/neandertal-light-sample\/","name":"Neandertal light\u2122 Sample","url":"https:\/\/neandertal.co.uk\/shop\/neandertal-light-sample\/"}]}</script><script type='text/javascript'>
         /* <![CDATA[ */
         var ctcc_vars = {"expiry":"30","method":"","version":"3"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/uk-cookie-consent/assets/js/uk-cookie-consent-js.js?ver=2.3.0'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"https:\/\/neandertal.co.uk\/?wc-ajax=%%endpoint%%"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.3.3'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"https:\/\/neandertal.co.uk\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_6a72007b2ab3a38e17d4b582347f0cb8","fragment_name":"wc_fragments_6a72007b2ab3a38e17d4b582347f0cb8"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.3.3'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var qodeLike = {"ajaxurl":"https:\/\/neandertal.co.uk\/wp-admin\/admin-ajax.php"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/qode-like.min.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/accordion.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/menu.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/wp-a11y.min.js?ver=4.9.4'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
         /* ]]> */
      </script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
      <script type='text/javascript'>
         jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
      </script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/resizable.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/draggable.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/dialog.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/droppable.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/progressbar.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/selectable.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/sortable.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/spinner.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/tooltip.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/tabs.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-blind.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-bounce.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-clip.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-drop.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-explode.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-fade.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-fold.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-highlight.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-pulsate.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-size.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-scale.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-shake.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-slide.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/effect-transfer.min.js?ver=1.11.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.carouFredSel-6.2.1.min.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/lemmon-slider.min.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.fullPage.min.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.mousewheel.min.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.touchSwipe.min.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js?ver=5.4.5'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/packery-mode.pkgd.min.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.stretch.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/imagesloaded.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDGV0xCzA9fVeMmpAHLBPDFDm184dwSRuc&#038;ver=4.9.4'></script>

      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/default_dynamic.js?ver=1519317805'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var QodeAdminAjax = {"ajaxurl":"https:\/\/neandertal.co.uk\/wp-admin\/admin-ajax.php"};
         var qodeGlobalVars = {"vars":{"qodeAddingToCartLabel":"Adding to Cart..."}};
         /* ]]> */
      </script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/default.min.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/custom_js.js?ver=1519317805'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/ajax.min.js?ver=4.9.4'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.4.5'></script>
      <script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/woocommerce.min.js?ver=4.9.4'></script>

      <script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/wp-embed.min.js?ver=4.9.4'></script>

      <div id="catapult-cookie-bar" class=" use_x_close float-accept">
         <div class="ctcc-inner ">
            <span class="ctcc-left-side">This site uses cookies: <a class="ctcc-more-info-link" tabindex=0 target="_blank" href="https://neandertal.co.uk/cookie-policy/">Find out more.</a></span><span class="ctcc-right-side"></span>
            <div class="x_close"><span></span><span></span></div>
         </div>
      </div>
   </body>
</html>