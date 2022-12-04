<?php
require_once './views/includes/header.php';
require_once './autoload.php';
// require_once './controllers/HomeController.php';
$home = new HomeController;
$pages = ['add','home','update','delete'];
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if (in_array($page,$pages)){
        $home->index($page);
}else{
    include('./views/includes/404.php');
}}


require_once './views/includes/footer.php';
?>