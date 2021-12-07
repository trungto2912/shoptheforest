<?php
session_start();
$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) {
    case 'home':
        require_once('Controllers/HomeControl.php');
        $controller_obj = new HomeControl();
        $controller_obj->list();
       
        break;
    case 'shop':
        require_once('Controllers/ShopControl.php');
        $controller_obj = new ShopControl();
        if (isset($_GET['xuly'])) {
            $controller_obj->sort();
            break;
        }
        $controller_obj->list();
        break;

    case 'detail':
        $xuly = isset($_GET['xuly']) ? $_GET['xuly'] : "list";
        require_once('Controllers/DetailControl.php');
        $controller_obj = new DetailControl();
        switch ($xuly) {
            case 'list':
                $controller_obj->list();
                break;
            case 'binhluan':
                $controller_obj->binhluan();
                break;
            case 'loadbl':
                $controller_obj->load_binhluan();
                break;
            default:
                $controller_obj->list();
                break;
            }
        break;
    case 'introduce':
        require_once('Controllers/IntroControl.php');
        break;
    case 'contact':
        require_once('Controllers/ContactControl.php');
        break;
    case 'account':
        $xuly = isset($_GET['xuly']) ? $_GET['xuly'] : "login";
        require_once('Controllers/LoginControl.php');
        $controller_obj = new LoginControl();
                switch ($xuly) {
                    case 'login':
                        $controller_obj->login();
                        break;
                    case 'signup':
                        $controller_obj->signup();
                        break;
                    case 'dangnhap':
                        $controller_obj->login_action();
                        break;
                    case 'dangky':
                        $controller_obj->dangky();
                        break;
                    case 'dangxuat':
                        $controller_obj->dangxuat();
                        break;
                    case 'tk':
                        $controller_obj->account();
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    default:
                        $controller_obj->login();
                        break;
                }
                break;
    case 'cart':
        $xuly = isset($_GET['xuly']) ? $_GET['xuly'] : "show";
        require_once('Controllers/CartControl.php');
        $controller_obj = new CartControl();

                switch ($xuly) {
                    case 'show':
                        $controller_obj->list_cart();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    case 'add':
                        $controller_obj->add_cart();
                        break;
                    case 'delete':
                        $controller_obj->delete_cart();
                        break;
                    case 'update':
                        $controller_obj->update_cart();
                        break;
                    case 'deleteall':
                        $controller_obj->deleteall_cart();
                        break;
                    case 'checkout':
                        $controller_obj->checkout();
                        break;
                    case 'save':
                        $controller_obj->save_order();
                        break;
                        
                   
                   
                    default:
                        $controller_obj->list_cart();
                        break;
                }
                break;

                
            
        
    default:
        require_once('Controllers/HomeControl.php');
        $controller_obj = new Homecontrol();
        $controller_obj->list();
        break;
}

?>