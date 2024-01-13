<?php 

if(isset($data)){
    extract($data);
}
// echo APPROOT . "/views/resumes/$page.php";
if(file_exists(APPROOT . "/views/resumes/$page.php")){
    require_once(APPROOT . "/views/resumes/$page.php");
}else{
    // echo "Not exists";
}