<?php  
include('config.php');
if(isset($_POST['email'])&& $_POST['email']!=null){

    $email=$_POST['email'];
    $name=$_POST['name'];
    $message=$_POST['message'];
    $sql = "INSERT INTO quote VALUES ('$name','$email','$message')";
    $res=mysqli_query($conn, $sql);
    if(isset($res)){
        echo "<script>alert('Submitted successfully');window.location.href='index.html';</script>";

    } else{
        echo "<script>alert('Failed');window.location.href='index.html';</script>;";

    }

}
else{
    echo "<script>window.location.href='index.html';</script>;";
}
?>