<?php
include_once('dbconnect.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = validation($_POST['btn_fullname']);
    $btn_did = validation($_POST['btn_did']);
    $btn_carnumber = validation($_POST['btn_carnumber']);
    $btn_address = validation($_POST['btn_address']);
    $btn_phone = validation($_POST['btn_phone']);
    $btn_opption = validation($_POST['btn_opption']);
    $btn_zip = validation($_POST['btn_zip']);
    // echo $name . " ". $btn_did . " ". $btn_carnumber . " ". $btn_address . " ". $btn_phone . " ". $btn_opption. " ". $btn_zip;
    if(isset($name) && isset($btn_did) && isset($btn_carnumber) && isset($btn_address) && isset($btn_phone) && isset($btn_opption) && isset($btn_zip)){
        $insert = "INSERT INTO `car_information`(`name`, `d_id_number`, `car_number`, `address`, `phone`, `state`, `zip`) VALUES ('$name','$btn_did','$btn_carnumber','$btn_address','$btn_phone','$btn_opption','$btn_zip')";
        $result =mysqli_query($conn, $insert);
        echo' <h4 style="color:green; text-align:center">  
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong> Data Insert </strong> Successfully ...
        </div>
        </h4>; ';
         header("Refresh:3; url=index.php");

    }else{
        echo "You are not successfully insert data";
        header("Refresh:0; url=informationadd.php");
    }
    
    
}

function validation($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}





?>