<?php
require('php/header.php');
?>
<?php
if (isset($_GET['page'])){
    Switch ($_GET['page']){
        case 'main':
            include('php/main.php');
            break;
        case 'cart':
            include('php/cart.php');
            break;
        case 'shop':
            include ('php/shop.php');
            break;
        case 'registration':
            include ('php/registration.php');
            break; 
        case 'exit':
            include ('php/exit.php');
            break;
        case 'admin':
            include ('php/admin.php');
            break;
        case 'cart1':
            include ('php/cart1.php');
            break;
        case 'cart2':
            include ('php/cart2.php');
            break;
        case 'cart3':
            include ('php/cart3.php');
            break;
        case 'dazzle':
            include ('php/dazzle.php');
            break;
        case 'search':
            include ('php/search.php');
            break; 
        case 'results':
            include ('php/results.php');
            break; 
        case 'on':
            include ('php/on.php');
            break; 
        case 'thx':
            include ('php/thx.php');
            break;   
    }
}else{include('php/main.php');}
?>
<?php
require('php/footer.php');
?>
