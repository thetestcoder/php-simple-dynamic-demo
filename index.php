<?php 

include("inc/header.php"); 
    if(isset($_GET['page'])){
        $all_files = scandir("pages");
        $file_name = $_GET['page'].".php";
        if(in_array($file_name, $all_files)){
            include("pages/".$file_name);
        }else{
            include("pages/404.php");
        }
    }else{
        include("pages/home.php");
    }
include("inc/footer.php"); 


?>