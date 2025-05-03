<?php

include("connect.php");
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$Cpassword=$_POST['Cpassword'];
$address=$_POST['address'];
$image =$_FIELS['name']['photo'];
$tap_name=$_FIELS['tap_name']['photo'];
$role = $_POST['role'];

if($password==$Cpassword)
{

}

else{
    echo "
    <script>
    alert('Password and Cpassword is not matched');
    ";
    </script>
}

?>