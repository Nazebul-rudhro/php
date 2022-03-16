<?php

if(isset($_POST['btn_submit'])){
    $name = filter_input(INPUT_POST,'btn_name',FILTER_SANITIZE_STRING);
    $name= filter_input(INPUT_POST,'btn_emil',FILTER_SANITIZE_STRING);
    $comment = filter_input(INPUT_POST,'btn_comment',FILTER_SANITIZE_STRING);
echo $name." " .$name ." " . $comment;
//  echo $value;
}


?>