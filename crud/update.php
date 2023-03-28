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

        $sql = "SELECT * FROM contents WHERE id = $id";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result)>0) {
            $row = mysqli_fetch_assoc($result);
        } else {
            header ("Location: read.php");
        }
}
else {
    header ("Location: read.php");
}

