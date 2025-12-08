<?php
    require('database.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $inquiry = $_POST['inquiry_type'];
    $message = $_POST['message'];

    $query = "INSERT INTO inquiry_table VALUES( 
    NULL,
    '$name',
    '$email',
    '$phone',
    '$inquiry',
    '$message'
    )";

    $exec = $con->query($query);

    if($exec){
        ?>
            <script> 
                alert("Successfully added record."); 
                window.location = "index.php"; 
            </script>
        <?php
    }
    else{
        ?>
            <script> 
                alert("Failed to add record."); 
                window.location = "index.php"; 
            </script>
        <?php
    }



?>