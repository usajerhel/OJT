<?php 

if (isset($_GET['id'])){
    include "../connect.php";
    function validate ($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
            return $data;
}
 $id = validate($_GET['id']);

 $sql = "DELETE FROM contents
              WHERE id=$id";
$result = mysqli_query($connection, $sql);
if ($result) {
    header("Location: ../read.php?success=successfuly deleted");
}else{
    header("Location: ../read.php?serror=unknown error&$contents_data");
}
}
else{
    header("Location: ../read.php");
}
