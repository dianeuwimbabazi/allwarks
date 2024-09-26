<?php
$conn=mysqli_connect("localhost","root","","diane");
if($conn==true){
    echo"connected";
}
else{
    echo"not connected";
}



?>