<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Clients Management</title>
    <link rel="stylesheet" href="../../css/dashboard.css">
    <style>
   
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="logo"><img src="../../images/logo.png" alt="Logo"></div>
        <nav class="nav-menu">
            <div class="nav-item">
                <a href="dashboard.php">DASHBOARD</a>
            </div>
            <div class="nav-item active">
                <a href="clients.php">CLIENTS</a>
            </div>
            <div class="nav-item">
                <a href="properties.php">PROPERTIES</a>
            </div>
            <div class="nav-item">
                <a href="appointments.php">APPOINTMENTS</a>
            </div>
            <div class="nav-item">
                <a href="accounts.php">ACCOUNTS</a>
            </div>
        </nav>
    </aside>

    <div class="main-container">
        <header class="header">
            <h1 class="header-title"><p><b>Clients</b></p></h1>
            <div class="header-actions">
                <div class="profile-icon"></div>
            </div>
        </header>

        <div class="card" style="margin-top: 20px;">
            <div class="card-title">Client List</div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Client Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Inquiry Type</th>
                            <th>Message</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require('../../database.php');
                            $query = "SELECT * FROM inquiry_table ORDER BY name ASC"; 
                            $exec = $con->query($query);
                            while($row = $exec->fetch_object()){
                            ?>
                            <tr>
                                <td><?= $row->name ?></td>
                                <td><?= $row->email ?></td>
                                <td><?= $row->phone ?></td>
                                <td><?= $row->inquiry ?></td>
                                <td><?= $row->message ?></td>
                                <td><?= $row->status ?></td>
                                <td>
                                    <?php
                                        if($row->stat == 1){
                                            echo "Inactive";
                                        }
                                        else{
                                            echo "Active";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?=  $row->id ?>">edit</a>
                                    <a href="delete.php?id=<?=  $row->id ?>">delete</a>
                                </td>
                            </tr>
                            <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

