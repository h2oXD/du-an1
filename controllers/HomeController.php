<?php
    function homeIndex(){
        $view = "home";
        debug($_POST);
        if(isset($_POST['login'])){

        }
        require PATH_VIEW.'layouts/master.php';
    }

    function Chitiet(){
        $view = "chitiet_sanpham/detail";
        require PATH_VIEW.'layouts/master.php';
    }

    function viewcart(){
        $view = "cart/view-cart";
        require PATH_VIEW.'layouts/master.php';
    }

    function List_sp(){
        $view = "danhsach_sanpham/list_sp";
        require PATH_VIEW.'layouts/master.php';
    }
