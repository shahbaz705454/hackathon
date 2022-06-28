<?php


if (isset($_POST['submit'])) {
    
 $name=$_POST['nm'];
$email=$_POST['em'];
$text=$_POST['textarea'];


$send=mail($name,$email,$text);
if ($send){

    $ret= "message sended";

}
else{

    $ret="message not sended";

}
     
}
?>