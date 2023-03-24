<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'comments');


if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];


    $query = "INSERT INTO contents (`name`, `email`, `comment`) VALUES ('$name', '$email', '$comment')";
    $query_run = mysqli_query($connection, $query);

if ($query_run)
{
    echo '<script> alert ("COMMENTED"); </script>';
    header('Location: index.php');
}
else{echo '<script> alert("ERROR"); </script>';

}
}



?>