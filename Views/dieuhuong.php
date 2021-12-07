<?php
$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) {
    case "home":
        require_once("home/home.php");
        break;
    case "shop":
        require_once("shop/shop.php");
        break;
    case "detail":
        require_once("detailShop/detail_product.php");
        break;
    case "introduce":
        require_once("introduce/introduce.php");
        break;
    case "contact":
        require_once("contact/contact.php");
        break;
    case "account":
        $xuly = isset($_GET['xuly']) ? $_GET['xuly'] : "login";
        
                switch ($xuly) {
                    case 'login':
                        require_once("home/home.php");
                        break;
                    case 'tk':
                        require_once("account/account.php");
                        break;
                    default:
                        require_once("home/home.php");
                        break;
                }
              
            break;
    case "cart":
        $xuly = isset($_GET['xuly']) ? $_GET['xuly'] : "show";
        
                switch ($xuly) {
                    case 'show':
                        require_once("cart/cart.php");
                        break;
                    case 'checkout':
                        require_once("cart/checkout.php");
                        break;
                        
                   
                    default:
                        require_once("cart/cart.php");
                        break;
                }
              
            break;
       
    
    default:
        require_once("error.php");
        break;
}
?>