<?php

/* be sure to require `hashids` in your `composer.json` file first */
require_once(__DIR__.'/vendor/autoload.php');





$hashids = new Hashids\Hashids('9hrs2etx', 8);

$isOwner = false;
$isDark = false;
$isLight = false;

 $encoded = $_GET["id"];

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


$input = $hashids->decode( $encoded);
$input= $input[0];






$owner="non-owner";

   if($input == '') {
      $owner="TESTER UNIT - NON OWNER";
   }


   else if($input < 1000) {
   $owner="Neandertal dark&trade; 2020 Owner ID ";
   $isDark = true;
   $isOwner = true;
   }
   else if($input > 1000){
   $owner="Neandertal light&trade; 2020 Owner ID ";
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
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<meta name="description" content="The two unisex fragrances are the speculative embodiment of the now extinct human; Neandertal. Beings that live on within our DNA. Neandertal dark and Neandertal light offer a sophisticated and complex mixture of scents with materials natural to their environments. The perfume contains fresher tones blended with innovative aromatic materials, distillates and natural isolates compounding into a mixture of olfactory palettes wearable by today’s modern humans.">
<meta name="keywords" content="Nendertal, Neanderthal, Perfume, Parfum, Kentaro Yamada, Euan McCall, Prehistoric, stone tool, fragrance, art, ace hotel, niche scent, scent, Perfume, niche perfume, luxury, rare, London Perfume, British perfume, Unisex, mens perfume, rock">
<link rel="shortcut icon" type="image/x-icon" href="https://neandertal.co.uk/wp-content/uploads/2018/07/favicon-96x96.png">
<link rel="apple-touch-icon" href="https://neandertal.co.uk/wp-content/uploads/2018/07/favicon-96x96.png" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="https://neandertal.co.uk/xmlrpc.php" />

<title>Home - Neandertal®</title>



<link rel='stylesheet' id='bdt-uikit-css' href='https://neandertal.co.uk/wp-content/plugins/bdthemes-element-pack-lite/assets/css/bdt-uikit.css?ver=3.2' type='text/css' media='all' />
<link rel='stylesheet' id='element-pack-site-css' href='https://neandertal.co.uk/wp-content/plugins/bdthemes-element-pack-lite/assets/css/element-pack-site.css?ver=2.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css' href='https://neandertal.co.uk/wp-includes/css/dist/block-library/style.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-vendors-style-css' href='https://neandertal.co.uk/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style.css?ver=3.1.0' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css' href='https://neandertal.co.uk/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=3.1.0' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css' href='https://neandertal.co.uk/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.2.19' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='cookie-consent-style-css' href='https://neandertal.co.uk/wp-content/plugins/uk-cookie-consent/assets/css/style.css?ver=5.4.2' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='mc4wp-form-basic-css' href='https://neandertal.co.uk/wp-content/plugins/mailchimp-for-wp/assets/css/form-basic.min.css?ver=4.7.7' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css' href='https://neandertal.co.uk/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.13-9993131' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css' href='https://neandertal.co.uk/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-default-style-css' href='https://neandertal.co.uk/wp-content/themes/bridge/style.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-qode-font_awesome-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/font-awesome/css/font-awesome.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-stylesheet-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/stylesheet.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-woocommerce-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/woocommerce.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-woocommerce-responsive-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/woocommerce_responsive.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-print-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/print.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-style-dynamic-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/style_dynamic.css?ver=1599148417' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-responsive-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/responsive.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-style-dynamic-responsive-css' href='https://neandertal.co.uk/wp-content/themes/bridge/css/style_dynamic_responsive.css?ver=1599148417' type='text/css' media='all' />



<link rel='stylesheet' id='js_composer_front-css' href='https://neandertal.co.uk/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-style-handle-google-fonts-css' href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic%7CCrimson+Text%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C300italic%2C400italic%2C700italic&#038;subset=latin%2Clatin-ext&#038;ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='bridge-core-dashboard-style-css' href='https://neandertal.co.uk/wp-content/plugins/bridge-core/modules/core-dashboard/assets/css/core-dashboard.min.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='https://neandertal.co.uk/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css' href='https://neandertal.co.uk/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.0.5' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css' href='https://neandertal.co.uk/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.0.5' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://neandertal.co.uk/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.0.5' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-21799-css' href='https://neandertal.co.uk/wp-content/uploads/elementor/css/post-21799.css?ver=1599151114' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='https://neandertal.co.uk/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-21838-css' href='https://neandertal.co.uk/wp-content/uploads/elementor/css/post-21838.css?ver=1599174188' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CCrimson+Text%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.4.2' type='text/css' media='all' />
<script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var LS_Meta = {"v":"6.11.1","fixGSAP":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.utils.js?ver=6.11.1'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.kreaturamedia.jquery.js?ver=6.11.1'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.transitions.js?ver=6.11.1'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.2.19'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.2.19'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/stop-user-enumeration/frontend/js/frontend.js?ver=1.3.25'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/neandertal.co.uk\/shop\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.4.1'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.2.0'></script>
<meta name="generator" content="Powered by LayerSlider 6.11.1 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />

<link rel='https://api.w.org/' href='https://neandertal.co.uk/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://neandertal.co.uk/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://neandertal.co.uk/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.4.2" />
<meta name="generator" content="WooCommerce 4.4.1" />
<link rel='shortlink' href='https://neandertal.co.uk/' />
<link rel="alternate" type="application/json+oembed" href="https://neandertal.co.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fneandertal.co.uk%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://neandertal.co.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fneandertal.co.uk%2F&#038;format=xml" />
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
            }</style>
<script type="text/javascript">
   var _swaMa=["774077993"];"undefined"==typeof sw&&!function(e,s,a){function t(){for(;o[0]&&"loaded"==o[0][d];)i=o.shift(),i[w]=!c.parentNode.insertBefore(i,c)}for(var r,n,i,o=[],c=e.scripts[0],w="onreadystatechange",d="readyState";r=a.shift();)n=e.createElement(s),"async"in c?(n.async=!1,e.head.appendChild(n)):c[d]?(o.push(n),n[w]=t):e.write("<"+s+' src="'+r+'" defer></'+s+">"),n.src=r}(document,"script",["//analytics.sitewit.com/v3/"+_swaMa[0]+"/sw.js"]);
</script>
<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2752832-13"></script>
<script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag("js", new Date());
                  gtag("config", "UA-2752832-13",{ "cookie_domain":"auto"});
                </script>
<script>(window.gaDevIds=window.gaDevIds||[]).push('5CDcaG');</script> <script type="text/javascript">
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
               n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
               n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
               t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
               document,'script','https://connect.facebook.net/en_US/fbevents.js');
         </script>

<script type="text/javascript">

            fbq('init', '624379277749604', {}, {
    "agent": "woocommerce-4.4.1-2.0.0"
});

            fbq( 'track', 'PageView', {
    "source": "woocommerce",
    "version": "4.4.1",
    "pluginVersion": "2.0.0"
} );

            document.addEventListener( 'DOMContentLoaded', function() {
               jQuery && jQuery( function( $ ) {
                  // insert placeholder for events injected when a product is added to the cart through AJAX
                  $( document.body ).append( '<div class=\"wc-facebook-pixel-event-placeholder\"></div>' );
               } );
            }, false );

         </script>

<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
<meta name="generator" content="Powered by Slider Revolution 6.2.19 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">function setREVStartSize(e){
         //window.requestAnimationFrame(function() {            
            window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;   
            window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;  
            try {                      
               var pw = document.getElementById(e.c).parentNode.offsetWidth,
                  newh;
               pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
               e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
               e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
               e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
               e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
               e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
               e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
               e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);     
               if(e.layout==="fullscreen" || e.l==="fullscreen")                 
                  newh = Math.max(e.mh,window.RSIH);              
               else{             
                  e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                  for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];             
                  e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                  e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                  for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
                                 
                  var nl = new Array(e.rl.length),
                     ix = 0,                 
                     sl;               
                  e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                  e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                  e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                  e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;               
                  for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
                  sl = nl[0];                         
                  for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}                                             
                  var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);             
                  newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
               }           
               if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));              
               document.getElementById(e.c).height = newh+"px";
               window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";          
            } catch(e){
               console.log("Failure at Presize of Slider:" + e)
            }                 
         //});
        };</script>
<style type="text/css" data-type="vc_custom-css">.gallery_holder ul{
    line-height: 0 !important;
}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
<script type='text/javascript'>
         var gaProperty = 'UA-2752832-13';
         var disableStr = 'ga-disable-' + gaProperty;
         if ( document.cookie.indexOf( disableStr + '=true' ) > -1 ) {
            window[disableStr] = true;
         }
         function gaOptout() {
            document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
            window[disableStr] = true;
         }
      </script>
<script type='text/javascript'>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script', '//www.google-analytics.com/analytics.js','ga');ga( 'create', 'UA-2752832-13', 'auto' );ga( 'require', 'displayfeatures' );ga( 'require', 'linkid' );ga( 'set', 'anonymizeIp', true );
      ga( 'set', 'dimension1', 'no' );
ga( 'require', 'ec' );</script>
</head>
<body class="home page-template page-template-full_width page-template-full_width-php page page-id-21838 theme-bridge bridge-core-2.4.2 woocommerce-no-js ajax_fade page_not_loaded   vertical_menu_transparency vertical_menu_transparency_on qode-title-hidden qode_grid_1400 columns-4 qode-theme-ver-22.7 qode-theme-bridge qode_header_in_grid wpb-js-composer js-comp-ver-6.2.0 vc_responsive elementor-default elementor-kit-21799 elementor-page elementor-page-21838" itemscope itemtype="http://schema.org/WebPage">
<div class="ajax_loader"><div class="ajax_loader_1"><div class="double_pulse"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div></div>
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
</div> <div class="header-widget widget_woocommerce-dropdown-cart header-right-from-logo-widget"><div class="header-right-from-logo-widget-inner"><div class="header-right-from-logo-widget-inner2"> <div class="shopping_cart_outer">
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
</div></div></div> </div>
<nav class="main_menu drop_down center">
<ul id="menu-top_menu" class=""><li id="nav-menu-item-22138" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active narrow"><a href="/" class=" current "><i class="menu_icon blank fa"></i><span>Home</span><span class="plus"></span></a></li>
<li id="nav-menu-item-15639" class="menu-item menu-item-type-custom menu-item-object-custom  narrow"><a href="https://neandertal.co.uk/story/" class=""><i class="menu_icon blank fa"></i><span>STORY</span><span class="plus"></span></a></li>
<li id="nav-menu-item-22384" class="menu-item menu-item-type-custom menu-item-object-custom  narrow"><a href="https://neandertal.co.uk/find/" class=""><i class="menu_icon blank fa"></i><span>FIND</span><span class="plus"></span></a></li>
<li id="nav-menu-item-15737" class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a href="https://neandertal.co.uk/shop/" class=""><i class="menu_icon blank fa"></i><span>SHOP</span><span class="plus"></span></a></li>
<li id="nav-menu-item-16761" class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a href="https://neandertal.co.uk/shop/cart/" class=""><i class="menu_icon blank fa"></i><span>Cart</span><span class="plus"></span></a></li>
</ul> </nav>
<div class="header_inner_right">
<div class="side_menu_button_wrapper right">
<div class="side_menu_button">
</div>
</div>
</div>
<nav class="mobile_menu">
<ul id="menu-top_menu-1" class=""><li id="mobile-menu-item-22138" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active"><a href="/" class=" current "><span>Home</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
<li id="mobile-menu-item-15639" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="https://neandertal.co.uk/story/" class=""><span>STORY</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
<li id="mobile-menu-item-22384" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="https://neandertal.co.uk/find/" class=""><span>FIND</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
<li id="mobile-menu-item-15737" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://neandertal.co.uk/shop/" class=""><span>SHOP</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
<li id="mobile-menu-item-16761" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://neandertal.co.uk/shop/cart/" class=""><span>Cart</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
</ul></nav> </div>
</div>
</div>
</div>
</div>
</header> 


      <div class="wrapper">
         <div class="wrapper_inner">



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
                           <h3>Please redeem special discount by entering the code \"modernhuman\" at our <a href=\"https://neandertal.co.uk/shop/\">online store</a> to get special discounts. <br /> If you would like your friend to experience Neandertal, please <a href=\"mailto:contact@neandertal.co.uk?subject=Free sample request from app code:" . $encoded . " \">click here and email us</a> with his/her details. We will send Neandertal light and dark samples for free.</h3>
                           <h3>Feel free to <a href=\"mailto:contact@neandertal.co.uk?subject=Email from App\">email us</a> for any further feedback on our products.</h3>
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







<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>(function() {function maybePrefixUrlField() {
   if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
      this.value = "http://" + this.value;
   }
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
   for (var j=0; j < urlFields.length; j++) {
      urlFields[j].addEventListener('blur', maybePrefixUrlField);
   }
}
})();</script> 
<noscript>
            <img
               height="1"
               width="1"
               style="display:none"
               alt="fbpx"
               src="https://www.facebook.com/tr?id=624379277749604&ev=PageView&noscript=1"
            />
         </noscript>

<script type="text/html" id="wpb-modifications"></script><link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css">
<script type="text/javascript">
      var c = document.body.className;
      c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
      document.body.className = c;
   </script>
<script type="text/javascript">
      if(typeof revslider_showDoubleJqueryError === "undefined") {
         function revslider_showDoubleJqueryError(sliderID) {
            var err = "<div class='rs_error_message_box'>";
            err += "<div class='rs_error_message_oops'>Oops...</div>";
            err += "<div class='rs_error_message_content'>";
            err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
            err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
            err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
            err += "</div>";
         err += "</div>";
            var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
         }
      }
      </script>
<script type='text/javascript'>
/* <![CDATA[ */
var mPS2id_params = {"instances":{"mPS2id_instance_0":{"selector":"a[href*='#']:not([href='#'])","autoSelectorMenuLinks":"true","excludeSelector":"a[href^='#tab-'], a[href^='#tabs-'], a[data-toggle]:not([data-toggle='tooltip']), a[data-slide], a[data-vc-tabs], a[data-vc-accordion]","scrollSpeed":800,"autoScrollSpeed":"true","scrollEasing":"easeInOutQuint","scrollingEasing":"easeOutQuint","pageEndSmoothScroll":"true","stopScrollOnUserAction":"false","autoCorrectScroll":"false","layout":"vertical","offset":0,"dummyOffset":"false","highlightSelector":"","clickedClass":"mPS2id-clicked","targetClass":"mPS2id-target","highlightClass":"mPS2id-highlight","forceSingleHighlight":"false","keepHighlightUntilNext":"false","highlightByNextTarget":"false","appendHash":"false","scrollToHash":"true","scrollToHashForAll":"true","scrollToHashDelay":0,"scrollToHashUseElementData":"true","scrollToHashRemoveUrlHash":"false","disablePluginBelow":0,"adminDisplayWidgetsId":"true","adminTinyMCEbuttons":"true","unbindUnrelatedClickEvents":"false","normalizeAnchorPointTargets":"false"}},"total_instances":"1","shortcode_class":"_ps2id"};
/* ]]> */
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/page-scroll-to-id/js/page-scroll-to-id.min.js?ver=1.6.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ctcc_vars = {"expiry":"30","method":"1","version":"5"};
/* ]]> */
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/uk-cookie-consent/assets/js/uk-cookie-consent-js.js?ver=2.3.0'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_464d10e1d243c826585fd5e1408731db","fragment_name":"wc_fragments_464d10e1d243c826585fd5e1408731db","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.4.1'></script>
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
<script type='text/javascript'>
var mejsL10n = {"language":"en","strings":{"mejs.download-file":"Download File","mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen":"Fullscreen","mejs.play":"Play","mejs.pause":"Pause","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.live-broadcast":"Live Broadcast","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.13-9993131'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=5.4.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/infinitescroll.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.waitforimages.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/jquery.form.min.js?ver=4.2.1'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/waypoints.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jplayer.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/bootstrap.carousel.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/skrollr.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/Chart.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.easing.1.3.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/abstractBaseClass.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.countdown.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.multiscroll.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.justifiedGallery.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/bigtext.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.sticky-kit.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/owl.carousel.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/typed.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.carouFredSel-6.2.1.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/lemmon-slider.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.fullPage.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.mousewheel.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.touchSwipe.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.isotope.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/packery-mode.pkgd.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.stretch.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/imagesloaded.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/rangeslider.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/jquery.event.move.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/bdthemes-element-pack-lite/assets/vendor/js/jquery.twentytwenty.min.js?ver=0.1.0'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDGV0xCzA9fVeMmpAHLBPDFDm184dwSRuc&#038;ver=5.4.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var no_ajax_obj = {"no_ajax_pages":["https:\/\/neandertal.co.uk\/shop\/","https:\/\/neandertal.co.uk\/shop\/cart\/","https:\/\/neandertal.co.uk\/shop\/checkout\/","https:\/\/neandertal.co.uk\/shop\/my-account\/","https:\/\/neandertal.co.uk\/shop\/neandertal-sample-set\/","https:\/\/neandertal.co.uk\/shop\/neandertal-light-perfume-90ml\/","https:\/\/neandertal.co.uk\/shop\/neandertal-dark-perfume-90ml\/","https:\/\/neandertal.co.uk\/shop\/candle-them\/","https:\/\/neandertal.co.uk\/shop\/neandertal-light-limited-edition\/","https:\/\/neandertal.co.uk\/shop\/neandertal-perfume-dark-002\/","https:\/\/neandertal.co.uk\/product-category\/bags\/","https:\/\/neandertal.co.uk\/product-category\/bags-2\/","https:\/\/neandertal.co.uk\/product-category\/bags-3\/","https:\/\/neandertal.co.uk\/product-tag\/candle\/","https:\/\/neandertal.co.uk\/product-category\/candles\/","https:\/\/neandertal.co.uk\/product-tag\/case\/","https:\/\/neandertal.co.uk\/product-tag\/case-2\/","https:\/\/neandertal.co.uk\/product-category\/cases\/","https:\/\/neandertal.co.uk\/product-category\/cases-2\/","https:\/\/neandertal.co.uk\/product-tag\/cover\/","https:\/\/neandertal.co.uk\/product-category\/covers\/","https:\/\/neandertal.co.uk\/product-category\/covers-2\/","https:\/\/neandertal.co.uk\/product-tag\/glasses\/","https:\/\/neandertal.co.uk\/product-tag\/glasses-2\/","https:\/\/neandertal.co.uk\/product-tag\/glasses-3\/","https:\/\/neandertal.co.uk\/product-tag\/handbag\/","https:\/\/neandertal.co.uk\/product-tag\/handbag-2\/","https:\/\/neandertal.co.uk\/product-tag\/headphones\/","https:\/\/neandertal.co.uk\/product-tag\/headphones-2\/","https:\/\/neandertal.co.uk\/product-tag\/headphones-3\/","https:\/\/neandertal.co.uk\/product-tag\/iphone\/","https:\/\/neandertal.co.uk\/product-tag\/laptop\/","https:\/\/neandertal.co.uk\/product-tag\/leather\/","https:\/\/neandertal.co.uk\/product-tag\/mountain\/","https:\/\/neandertal.co.uk\/product-tag\/mountain-2\/","https:\/\/neandertal.co.uk\/product-tag\/mountain-3\/","https:\/\/neandertal.co.uk\/product-tag\/music\/","https:\/\/neandertal.co.uk\/product-tag\/music-2\/","https:\/\/neandertal.co.uk\/product-category\/notebook\/","https:\/\/neandertal.co.uk\/product-category\/other\/","https:\/\/neandertal.co.uk\/product-category\/other-2\/","https:\/\/neandertal.co.uk\/product-category\/perfume\/","https:\/\/neandertal.co.uk\/product-tag\/perfume\/","https:\/\/neandertal.co.uk\/product-category\/phones\/","https:\/\/neandertal.co.uk\/product-tag\/quad-core\/","https:\/\/neandertal.co.uk\/product-tag\/rooter\/","https:\/\/neandertal.co.uk\/product-tag\/running\/","https:\/\/neandertal.co.uk\/product-tag\/running-2\/","https:\/\/neandertal.co.uk\/product-tag\/sample\/","https:\/\/neandertal.co.uk\/product-category\/samples\/","https:\/\/neandertal.co.uk\/product-tag\/shirt\/","https:\/\/neandertal.co.uk\/product-tag\/shoes\/","https:\/\/neandertal.co.uk\/product-tag\/ski\/","https:\/\/neandertal.co.uk\/product-tag\/ski-2\/","https:\/\/neandertal.co.uk\/product-category\/skiing\/","https:\/\/neandertal.co.uk\/product-tag\/sleeve\/","https:\/\/neandertal.co.uk\/product-category\/sleeves\/","https:\/\/neandertal.co.uk\/product-tag\/smartphone\/","https:\/\/neandertal.co.uk\/product-tag\/sunglasses\/","https:\/\/neandertal.co.uk\/product-tag\/tablet\/","https:\/\/neandertal.co.uk\/product-tag\/travel\/","https:\/\/neandertal.co.uk\/product-tag\/tv\/","https:\/\/neandertal.co.uk\/product-category\/uncategorized\/","https:\/\/neandertal.co.uk\/product-tag\/vanity-case\/","https:\/\/neandertal.co.uk\/product-tag\/vanity-case-2\/","https:\/\/neandertal.co.uk\/product-tag\/vintage\/","https:\/\/neandertal.co.uk\/product-tag\/wallet\/","https:\/\/neandertal.co.uk\/product-category\/wallets\/","https:\/\/neandertal.co.uk\/product-tag\/watch\/","https:\/\/neandertal.co.uk\/product-tag\/wifi\/","https:\/\/neandertal.co.uk\/product-tag\/wifi-2\/","https:\/\/neandertal.co.uk\/product-tag\/workout\/","https:\/\/neandertal.co.uk\/product-tag\/workout-2\/","","https:\/\/neandertal.co.uk\/wp-login.php?action=logout&_wpnonce=f96deb6d7e"]};
/* ]]> */
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/default_dynamic.js?ver=1599148417'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var QodeAdminAjax = {"ajaxurl":"https:\/\/neandertal.co.uk\/wp-admin\/admin-ajax.php"};
var qodeGlobalVars = {"vars":{"qodeAddingToCartLabel":"Adding to Cart...","page_scroll_amount_for_sticky":"800"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/default.min.js?ver=5.4.2'></script>
<script type='text/javascript'>
$j(window).load(function(){

 if ( $j('span.header_cart_span').text()  == '0' ) {
      /*console.log('zero');*/
$j('div.widget_woocommerce-dropdown-cart').css({"visibility":"hidden"});
   }

});    

$j(window).load(function(){

 if ( $j('span.header_cart_span').text()  == '0' ) {
       // console.log('zero');
$j('div.widget_woocommerce-dropdown-cart').css({"visibility":"hidden"});
    }

});    

$j(document).ready(function(){

 if ( $j('span.header_cart_span').text()  == '0' ) {
       // console.log('zero');
$j('div.widget_woocommerce-dropdown-cart').css({"visibility":"hidden"});
    }

});    

</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/comment-reply.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/ajax.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.2.0'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/woocommerce.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var qodeLike = {"ajaxurl":"https:\/\/neandertal.co.uk\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/themes/bridge/js/plugins/qode-like.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/wp-embed.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/mailchimp-for-wp/assets/js/forms.min.js?ver=4.7.7'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var element_pack_ajax_login_config = {"ajaxurl":"https:\/\/neandertal.co.uk\/wp-admin\/admin-ajax.php","loadingmessage":"Sending user info, please wait..."};
var ElementPackConfig = {"ajaxurl":"https:\/\/neandertal.co.uk\/wp-admin\/admin-ajax.php","nonce":"e23048c859","contact_form":{"sending_msg":"Sending message please wait...","captcha_nd":"Invisible captcha not defined!","captcha_nr":"Could not get invisible captcha response!"},"elements_data":{"sections":[],"columns":[],"widgets":[]}};
/* ]]> */
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/bdthemes-element-pack-lite/assets/js/bdt-uikit.min.js?ver=2.2.0'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.0.5'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.0.5'></script>
<script type='text/javascript'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.0.5","is_static":false,"legacyMode":{"elementWrappers":true},"urls":{"assets":"https:\/\/neandertal.co.uk\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":21838,"title":"Home%20-%20Neandertal%C2%AE","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.0.5'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/bdthemes-element-pack-lite/assets/js/element-pack-site.min.js?ver=2.2.0'></script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.0.3'></script>
<script type='text/javascript'>
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/neandertal.co.uk\/wp-admin\/admin-ajax.php","nonce":"cfa1e221d0","i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"delicious":{"title":"Delicious"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"weixin":{"title":"WeChat"},"weibo":{"title":"Weibo"}},
"menu_cart":{"cart_page_url":"https:\/\/neandertal.co.uk\/shop\/cart\/","checkout_page_url":"https:\/\/neandertal.co.uk\/shop\/checkout\/"},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/neandertal.co.uk\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script type='text/javascript' src='https://neandertal.co.uk/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.0.3'></script>

<script type="text/javascript">
jQuery(function($) { 
tvc_lc="GBP";


               $( '.add_to_cart_button:not(.product_type_variable, .product_type_grouped)' ).click( function() {
                  ga( 'ec:addProduct', {'id': ($(this).data('product_sku')) ? ($(this).data('product_sku')) : ('#' + $(this).data('product_id')),'quantity': $(this).data('quantity')} );
                  ga( 'ec:setAction', 'add' );
                  ga( 'send', 'event', 'UX', 'click', 'add to cart' );
               });
            

homepage_json_ATC_link=[];

tvc_fp=[];

tvc_rcp=[];

tvc_rdp=[];

prodpage_json_ATC_link=[];

tvc_pgc=[];

catpage_json_ATC_link=[];


            var items = [];
                //set local currencies
            gtag("set", {"currency": tvc_lc});
        function t_products_impre_clicks(t_json_name,t_action){
                   t_send_threshold=0;
                   t_prod_pos=0;
                    t_json_length=Object.keys(t_json_name).length;
                        
            for(var t_item in t_json_name) {
                t_send_threshold++;
                t_prod_pos++;
                items.push({
                    "id": t_json_name[t_item].tvc_i,
                    "name": t_json_name[t_item].tvc_n,
                    "category": t_json_name[t_item].tvc_c,
                    "price": t_json_name[t_item].tvc_p,
                });    
                        
        if(t_json_length > 6 ){

                        if((t_send_threshold%6)==0){
                            t_json_length=t_json_length-6;
                              gtag("event", "view_item_list", { "event_category":"Enhanced-Ecommerce",
                                     "event_label":"product_impression_"+t_action, "items":items,"non_interaction": true});
                                     items = [];
                                    }
                     }else{
            
                       t_json_length--;
                       if(t_json_length==0){
                               gtag("event", "view_item_list", { "event_category":"Enhanced-Ecommerce",
                                    "event_label":"product_impression_"+t_action, "items":items,"non_interaction": true});
                                    items = [];
                                }
        }   
                }
        }
                
        //function for comparing urls in json object
        function prod_exists_in_JSON(t_url,t_json_name,t_action){
                                    if(t_json_name.hasOwnProperty(t_url)){
                                        t_call_fired=true;
                                        gtag("event", "select_content", {
                                            "event_category":"Enhanced-Ecommerce",
                                            "event_label":"product_click_"+t_action,
                                            "content_type": "product",
                                            "items": [
                                            {
                                                "id":t_json_name[t_url].tvc_i,
                                                "name": t_json_name[t_url].tvc_n,
                                                 "category":t_json_name[t_url].tvc_c,
                                                 "price": t_json_name[t_url].tvc_p,
                                            }
                                            ],
                                            "non_interaction": true
                                        });                    
                                   }else{
                                   t_call_fired=false;
                }
                                return t_call_fired;
            }
                function prod_ATC_link_exists(t_url,t_ATC_json_name,t_prod_data_json,t_qty){
                    t_prod_url_key=t_ATC_json_name[t_url]["ATC-link"];
                    
                        if(t_prod_data_json.hasOwnProperty(t_prod_url_key)){
                                t_call_fired=true;
                            // Enhanced E-commerce Add to cart clicks
                                gtag("event", "add_to_cart", {
                                    "event_category":"Enhanced-Ecommerce",
                                    "event_label":"add_to_cart_click",
                                    "non_interaction": true,
                                    "items": [{
                                        "id" : t_prod_data_json[t_prod_url_key].tvc_i,
                                        "name":t_prod_data_json[t_prod_url_key].tvc_n,
                                        "category" : t_prod_data_json[t_prod_url_key].tvc_c,
                                        "price": t_prod_data_json[t_prod_url_key].tvc_p,
                                        "quantity" :t_qty
                                    }]
                                });
                             
                        }else{
                                   t_call_fired=false;
                        }    
                         return t_call_fired;
                 
                }
                
                
                if(tvc_fp.length !== 0){
                    t_products_impre_clicks(tvc_fp,"fp");       
                }
                if(tvc_rcp.length !== 0){
                    t_products_impre_clicks(tvc_rcp,"rp");    
                }
                jQuery("a:not([href*=add-to-cart],.product_type_variable, .product_type_grouped)").on("click",function(){
            t_url=jQuery(this).attr("href");
                        //home page call for click
                        t_call_fired=prod_exists_in_JSON(t_url,tvc_fp,"fp");
                        if(!t_call_fired){
                            prod_exists_in_JSON(t_url,tvc_rcp,"rp");
                        }    
                });
                //ATC click
                jQuery("a[href*=add-to-cart]").on("click",function(){
            t_url=jQuery(this).attr("href");
                        t_qty=$(this).parent().find("input[name=quantity]").val();
                             //default quantity 1 if quantity box is not there             
                            if(t_qty=="" || t_qty===undefined){
                                t_qty="1";
                            }
                        t_call_fired=prod_ATC_link_exists(t_url,homepage_json_ATC_link,tvc_fp,t_qty);
                        if(!t_call_fired){
                            prod_ATC_link_exists(t_url,homepage_json_ATC_link,tvc_rcp,t_qty);
                        }
                    });   
             
                

tvc_smd={"tvc_wcv":"4.4.1","tvc_wpv":"5.4.2","tvc_eev":"2.3.2","tvc_cnf":{"t_ee":"on","t_df":false,"t_gUser":false,"t_UAen":"on","t_thr":"6","t_IPA":false,"t_OptOut":false,"t_PrivacyPolicy":true}};

ga( 'send', 'pageview' ); 
 });
</script>
<script type="text/javascript">
               jQuery(document).ready(function($){
                                    if(!catapultReadCookie("catAccCookies")){ // If the cookie has not been set then show the bar
                     $("html").addClass("has-cookie-bar");
                     $("html").addClass("cookie-bar-bottom-bar");
                     $("html").addClass("cookie-bar-bar");
                                       }
                                       setTimeout(ctccCloseNotification, 20000);
                                                         ctccFirstPage();
                                 });
            </script>

</body>
</html>