<?php



if(isset($_POST['btn_submit'])){
    // $img = $_POST["btn_img"];
    //print_r($_FILES['btn_img']);
    $img_name = $_FILES['btn_img']['name'];
    $tmp_name = $_FILES['btn_img']['tmp_name'];
    move_uploaded_file($tmp_name, "upload/". $img_name);      
}

?>