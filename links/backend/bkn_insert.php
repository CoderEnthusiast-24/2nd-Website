<?php
    require('database.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $property = $_POST['property'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $visitors = $_POST['visitors'];
    $notes = $_POST['notes'];

    $query = "INSERT INTO booking_table VALUES( 
    NULL,
    '$fname',
    '$lname',
    '$email',
    '$phone',
    '$property',
    '$date',
    '$time',
    '$visitors',
    '$notes',
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