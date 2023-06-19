<?php
$nam=$_POST['Name'];
$uname=$_POST['Uname'];
$pass=$_POST['pass'];

$con_det= mysqli_connect('localhost','root','','project');
if(!$con_det){
    die("Problem in connection details");
}

if(isset($_POST['submit'])){
    $insert_query="INSERT INTO signup(Name,Uname,pass) VALUES ('$nam', '$uname', '$pass')";
    if(mysqli_query($con_det,$insert_query)){
        header("refresh:0,url=index.html");
    }else{
        echo"Unable to store data";
    }
}
?>