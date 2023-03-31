<?php 

if (isset($_GET['id'])) {
        include "connect.php";

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id = validate($_GET['id']);

	$sql = "SELECT * FROM contents WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: ./read.php");
    }



}else if(isset($_POST['update'])){
    include "../connect.php";   
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name= validate($_POST['name']);
    $email= validate($_POST['email']);
    $id = validate($_POST['id']);

    if(empty($name)){
        header("Location: ../update.php?id=$id&error=Name is required");
    }else if (empty($email)){
        header("Location: ../update.php?id=$id&error=Enmail is required");
    } else {

        $sql = "UPDATE contents
        SET name= `$name`, email=`$email`
        WHERE id= '$id'";
        $result = mysqli_query($connection, $sql);
    if ($result){
        header("Location: ../read.php?success=successfully updated");
    }else {
        header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
     }
}


   // $id = validate($_GET['id']); $sql = "INSERT INTO contents(name, email) VALUE ('$name', '$email')"; $result = mysqli_query($connection, $sql);//

}else {
    header ("Location: ./read.php");
}
