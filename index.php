<?php
 include_once 'db_connection.php';
?>

<!DOCTYPE html>
<html>
<head>
        <title></title>
</head>
<body>

    <?php
       $sql = "SELECT * FROM singers;";
       $result = mysqli_query($conn, $sql);
       $resultCheck = mysqli_num_rows($result);

       if ($resultCheck > 0){
           while($row = mysqli_fetch_assoc($result)) {
                echo $row['name_column'];
           }    
       }
    ?>
      
</body>
</html>