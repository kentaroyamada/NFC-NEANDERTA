<?php

/* be sure to require `hashids` in your `composer.json` file first */
require_once(__DIR__.'/vendor/autoload.php');


$username   = "root";
$password   = "9hrs2etx";
$dbname     = "NFC";
$servername = "localhost";


$hashids = new Hashids\Hashids('9hrs2etx', 8);

$link =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($link == false)
{
    die("Connection failed: " . $link->connect_error);
        echo "connection rerror";
}


$isOwner = false;
$isDark = false;
$isLight = false;

if ( !$_GET["id"]){
   $encoded = '1';
   echo 'id not detected';
}
else{
 $encoded = $_GET["id"];
}


$owner_name='';
$sold_date='';


$sql = "SELECT t.*, o.owner_name, p.type, p.name AS product_name, p.is_refillable";
$sql .= ", s.name AS shop_name FROM tags t";
$sql .=" INNER JOIN products p ON (t.product_id = p.id)";
$sql .=" LEFT JOIN owners o ON (t.owner_id = o.id)";
$sql .=" LEFT JOIN shops s ON (t.sold_at = s.id)";
$sql .= " WHERE encoded='". $encoded . "';";

if ($result = mysqli_query($link, $sql) ) {

    while ($row = mysqli_fetch_assoc($result)) {
      //$row = mysqli_fetch_assoc($result);

      $id = $row['id'];
      $our_id = $row['our_id'];
      $owner_id = $row['owner_id'];
      $is_refillable = $row['is_refillable'];
      $product_type = $row['type'];
      $product_name = $row['product_name'];
      $owner_name =  $row['owner_name'];
      $shop_name =  $row['shop_name'];
      $sold_date =  $row['sold_date'];
      $sold_date = substr($sold_date, 0, strpos($sold_date, ' '));
      $last_refill_date =  $row['last_refill_date'];
      $last_refill_date = substr($last_refill_date, 0, strpos($last_refill_date, ' '));
      $registered_date =  $row['last_refill_date'];
      $registered_date = substr($registered_date, 0, strpos($registered_date, ' '));
    }

}

else {
    echo "Error: " . $sql . " " . $link->error;
}

$form_errors = array();
$action = isset($_POST["action"]) ? $_POST["action"] : '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $id && $our_id) {
  if ($action == 'update') {
    // TODO: Validation of agreement (and maybe add agreement?)
    if (empty($owner_name = $_POST["name"])) {
      $form_errors["name"] = "Name is required";
    }
    if (empty($owner_email = $_POST['email'])) {
      $form_errors["email"] = "Email is required";
    }
    if (empty($owner_phone = $_POST['phone'])) {
      $form_errors["phone"] = "Phone is required";
    }
    if (empty($owner_street1 = $_POST['street1'])) {
      $form_errors["street1"] = "Street 1 is required";
    }
    if (empty($owner_city = $_POST['city'])) {
      $form_errors["city"] = "City is required";
    }
    if (empty($owner_country = $_POST['country'])) {
      $form_errors["country"] = "Country is required";
    }
    if (empty($owner_postcode = $_POST['postcode'])) {
      $form_errors["postcode"] = "Post code is required";
    }
    $owner_street2 = $_POST['street2'];

    if (!count($form_errors)) {
      try {
        $sql = "INSERT INTO owners (owner_name, owner_email, owner_address";
        $sql .= ", owner_phone, owner_postcode) VALUES (?, ?, ?, ?, ?)";
        $stmt = $link->prepare($sql. " ON DUPLICATE KEY UPDATE id = LAST_INSERT_ID(id)");
        $stmt->bind_param("sssss", $owner_name, $owner_email, $owner_address, $owner_phone, $owner_postcode);

        $owner_address = $owner_street1;
        if ($owner_street2) $owner_address .= ', ' . $owner_street2;
        $owner_address .= ', ' . $owner_city;
        $owner_address .= ', ' . $owner_postcode;
        $owner_address .= ', ' . $owner_country;

        $stmt->execute();
        if (!$stmt->error) {
          $owner_id = $stmt->insert_id;
          $stmt->close();

          $sql = 'UPDATE tags SET owner_id = ?, registered_date = ifnull(registered_date, now()) WHERE id = ?';
          $stmt = $link->prepare($sql);
          $stmt->bind_param("ii", $owner_id, $id);
          $stmt->execute();

          if (!$stmt->error) {
            $registered = true;
          } else {
            $error = $stmt->error;
          }
          $stmt->close();
        } else {
          $error = $stmt->error;
          $stmt->close();
        }
      } catch (Throwable $e) {
        $error = $e->getMessage();
      }
    }
  }
}

$products = array();
if ($id && $our_id && $owner_id) {
  $sql = "SELECT * FROM tags t INNER JOIN products p ON (t.product_id = p.id)";
  $sql .= " WHERE t.URL IS NOT NULL AND t.owner_id = " . $owner_id;
  $sql .= " AND t.our_id != " . $our_id;
  if ($result = mysqli_query($link, $sql) ) {
    while ($row = mysqli_fetch_assoc($result)) {
      $products[] = $row;
    }
  }
}

$link->close();



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


$input = $our_id;





$owner="non-owner";

   if($input == '') {
      $owner="TESTER UNIT - NON OWNER";
   }


   else if($product_type == 'dark') {
   $isDark = true;
   $isOwner = true;
   }
   else if($product_type == 'light'){
   $isOwner = true;
   $isLight = true;
   }
   else {
   $owner="You are not an owner ";
   }

}

function if_isset($value) {
  return isset($value) ? $value : '';
}

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



<style media="screen">
  p, label {
    color:black;
  }
  form {
    margin-bottom: 1em;
  }
  span.error, small.error {
    color: red;
    display: block;
  }
  button.button {
    background-color: black !important;
    color: white !important;
    font-family: crimson text,sans-serif;
    line-height: 35px;
    border-color: #000;
    font-weight: 500;
    border-radius: 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    letter-spacing: 1px;
    border-width: 0;
  }
  form#register {
    max-width: 300px;
    text-align: left;
    margin: auto;
  }
  form#register input[type="text"] {
    width: 100%;
    border-color: #000;
    border-radius: 0;
    border-width: 1px;
  }
</style>












</head>
<body style="padding-left: 3%; padding-right: 3%;">
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
      </span></li>
<li id="mobile-menu-item-22384" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="https://neandertal.co.uk/find/" class=""><span>FIND</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
<li id="mobile-menu-item-15737" class="menu-item menu-item-type-post_type menu-item-object-page ">
   <a href="https://neandertal.co.uk/shop/" class=""><span>SHOP</span></a>
   <span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
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
               <div class="wpb_text_column wpb_content_element" style="text-align:center;">

                     <h3><br /> <?php echo htmlentities($product_name) . ' Owner ID ' . $input . '.'; ?> </h3>
                     <h3><?php echo 'Sold to: ' . ($owner_id ? $owner_name : '&lt;Not Registered&gt;') . '.'; ?> </h3>
                     <h3><?php echo 'Shipped on: ' . $sold_date . '.'; ?> </h3>

                     <?php if ($error) { ?>
                       <span class="error">Error: <?php echo $error; ?></span>
                     <?php } ?>

                     <div id="adminarea">
                     <?php if ($our_id && (!$owner_id || $action == 'edit' || count($form_errors))) { ?>
                       <h1>Register</h1>
                       <form id="register" method="post" action="">
                         <label>Name *</label><br>
                         <input type="text" name="name" value="<?php echo $_POST['name'] ?>" placeholder="Your Name"><br>
                         <?php echo isset($form_errors['name']) ? "<small class='error'>$form_errors[name]</small>" : "" ?>
                         <label>Email *</label><br>
                         <input type="email" name="email" value="<?php echo $_POST['email'] ?>" placeholder="Your Email Address"><br>
                         <?php echo isset($form_errors['email']) ? "<small class='error'>$form_errors[email]</small>" : "" ?>
                         <label>Address *</label><br>
                         <input type="text" name="street1" value="<?php echo $_POST['street1'] ?>" placeholder="Street 1"><br>
                         <?php echo isset($form_errors['street1']) ? "<small class='error'>$form_errors[street1]</small>" : "" ?>
                         <input type="text" name="street2" value="<?php echo $_POST['street2'] ?>" placeholder="Street 2"><br>
                         <?php echo isset($form_errors['street2']) ? "<small class='error'>$form_errors[street2]</small>" : "" ?>
                         <input type="text" name="city" value="<?php echo $_POST['city'] ?>" placeholder="City"><br>
                         <?php echo isset($form_errors['city']) ? "<small class='error'>$form_errors[city]</small>" : "" ?>
                         <input type="text" name="postcode" value="<?php echo $_POST['postcode'] ?>" placeholder="Post code"><br>
                         <?php echo isset($form_errors['postcode']) ? "<small class='error'>$form_errors[postcode]</small>" : "" ?>
                         <input type="text" name="country" value="<?php echo $_POST['country'] ?>" placeholder="Country"><br>
                         <?php echo isset($form_errors['country']) ? "<small class='error'>$form_errors[country]</small>" : "" ?>
                         <label>Phone *</label><br>
                         <input type="text" name="phone" value="<?php echo $_POST['phone'] ?>" placeholder="Phone Number"><br>
                         <?php echo isset($form_errors['phone']) ? "<small class='error'>$form_errors[phone]</small>" : "" ?>
                         <input type="checkbox" name="agree"> <label>Agree to xxx</label><br>
                         <?php echo isset($form_errors['agree']) ? "<small class='error'>$form_errors[agree]</small>" : "" ?>
                         <button class="button" type="submit" name="action" value="update">Register</button>
                         <?php if ($owner_id) { ?>
                         <button class="button" type="submit" name="action" value="cancel">Cancel</button>
                         <?php } ?>
                       </form>
                     <?php } elseif ($owner_id && $our_id) { ?>
                       <h1>Welcome <?php echo $owner_name; ?></h1>
                       <h3>Your product ID is <?php echo $our_id; ?></h3>
                       <h3>Your product record</h3>
                       <p style="margin-bottom:2em">
                         <?php if ($shop_name && $sold_date) {
                           echo "You bought from $shop_name on $sold_date<br>";
                         } ?>
                         <?php if ($registered_date) {
                           echo "You registered on $registered_date<br>";
                         } ?>
                         <?php if ($last_refill_date) {
                           echo "You refilled on $last_refill_date<br>";
                         } ?>
                       </p>
                       <?php if (count($products)) { ?>
                         <h3>Your other products</h3>
                         <p>
                           <ul>
                           <?php foreach ($products as $product) { ?>
                              <li><label>
                                <a href="/?id=<?php echo $product['encoded'] ?>">
                                <?php echo htmlentities($product['name']) . ' Owner ID ' . $product['our_id']; ?>
                                </a>
                              </label></li>
                           <?php } ?>
                           </ul>
                         </p>
                       <?php } ?>
                       <form method="get" action="mailto:contact@neandertal.co.uk?subject=Owner+Enquiry">
                         <button type="submit" class="button">Contact customer service</button>
                       </form>
                       <?php if ($is_refillable) { ?>
                       <form method="get" action="<?php echo "https://neandertal.co.uk/shop/$product_type-refill" ?>">
                         <button type="submit" class="button">Order refill</button>
                       </form>
                      <?php } ?>
                       <form method="post" action="">
                         <input type="hidden" name="action" value="edit">
                         <button type="submit" class="button">Change Ownership</button>
                       </form>
                     <?php } ?>
                     </div>


                     <div id="photos" style="padding-top: 30px;">
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
