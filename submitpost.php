<?php
require "database/db.php";
if(isset($_FILES['filetoUpload'])){
    $error = array();
    $file_name = $_FILES['filetoUpload']['name'];
    $file_size = $_FILES['filetoUpload']['size'];
    $file_tmp = $_FILES['filetoUpload']['tmp_name'];

    
    if(empty($error)==true){
        move_uploaded_file($file_tmp,"images/.$file_name");
    }
    else{
        print_r($error);
        die();
    }
}

$title = $_POST['title'];
$desc = $_POST['desc'];
$date = date("d M, Y");
$query = "INSERT INTO post (post_title,post_content,post_image) VALUES ('$title','$desc','$file_name')";
$mydb = new database();
$res = $mydb->insertdata($query);

if($res == true){
    header("Location: http://localhost/cms_1/cms.php");
}
else{
    echo "error";
}

?>