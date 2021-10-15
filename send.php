<?php 
$name= isset($_POST['name'])?$_POST['name']:'';
$mail= isset($_POST['mail'])?$_POST['mail']:'';
$phonenumber= isset($_POST['phonenumber'])?$_POST['phonenumber']:'';
$lastname= isset($_POST['lastname'])?$_POST['lastname']:'';
$mesiji= isset($_POST['mesiji'])?$_POST['mesiji']:'';
if(empty($name&&$mail&&$phonenumber&&$lastname&&$mesiji)){
    header("Location:index.php");
      
    
}
else{
    header("Location:succsess.php");
    
}
?>
