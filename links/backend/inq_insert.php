<?php
    require('database.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $inquiry = $_POST['inquiry'];
    $message = $_POST['message'];

    $query = "INSERT INTO inquiry_table VALUES( 
    NULL,
    '$fname',
    'lname',
    '$email',
    '$phone',
    '$inquiry',
    '$message',
    '0'
    )";

    $exec = $con->query($query);

    if($exec){
        ?>
            <script> 
                alert("Successfully added record."); 
                window.location = "../../landing.php"; 
            </script>
        <?php
    }

?>