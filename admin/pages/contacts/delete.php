<?php include_once('../authen.php') ?>
<?php
    
    $id = $_GET['id'];
    if (isset($id)) {
        $sql = "DELETE FROM `contacts` WHERE `contacts`.`id` = '".$id."'";
        $result = $conn->query($sql);

        if ($conn->affected_rows) {
            echo '<script> alert("Finished delete!") </script>';
            header('Refresh:0; url=index.php');
        }
        else{
            echo '<script> alert("No data to delete!") </script>';
            header('Refresh:0; url=index.php');
        }
    }
    else{
        header('Location:index.php');
    }

?>