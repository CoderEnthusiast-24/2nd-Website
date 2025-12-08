<!DOCTYPE html>
<html lang="en">
<head>

    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/clients.css">
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
            <div class="nav-item">
            </div>
        </nav>
        <div>
            </a>
        </div>
    </aside>

    <div class="main-container">
        <header class="header">
            <h1 class="header-title"><p><b>Dashboard</b></p></h1>
            <div class="header-actions">
                <a href="#"><div class="profile-icon"></div></a>
            </div>
        </header>

        <main class="content">
                <?php
                    require('../../links/backend/database.php');
                    
                    // Count inquiries
                    $inquiry_count_query = "SELECT COUNT(*) as count FROM inquiry_table";
                    $inquiry_count_result = $con->query($inquiry_count_query);
                    $inquiry_count = $inquiry_count_result->fetch_object()->count;
                    
                    // Count bookings
                    $booking_count_query = "SELECT COUNT(*) as count FROM booking_table";
                    $booking_count_result = $con->query($booking_count_query);
                    $booking_count = $booking_count_result->fetch_object()->count;
                    
                    $total_clients = $inquiry_count + $booking_count;
                ?>
                
                <!-- Summary Stats -->
                <div class="summary-stats">
                    <div class="stat-card">
                        <div class="stat-number"><?= $total_clients ?></div>
                        <div class="stat-label">Total Clients</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number"><?= $inquiry_count ?></div>
                        <div class="stat-label">Inquiries</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number"><?= $booking_count ?></div>
                        <div class="stat-label">Appointments</div>
                    </div>
                </div>

            <div class="table-section">
                <div class="section-header collapsed" onclick="toggleSection('inquiries')">
                    <div class="section-header-title">
                        <span>📋 Client Inquiries</span>
                        <span class="section-badge"><?= $inquiry_count ?></span>
                    </div>
                    <span class="collapse-icon">▼</span>
                </div>
                <div class="table-content" id="inquiries-content">
                    <div class="card">
                        <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Inquiry Type</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require('../../links/backend/database.php');
                                    $query = "SELECT * FROM inquiry_table, ORDER BY id DESC"; 
                                    $exec = $con->query($query);
                                    
                                    if($exec && $exec->num_rows > 0) {
                                        while($row = $exec->fetch_object()){
                                ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row->fname . ' ' . $row->lname) ?></td>
                                        <td><?= htmlspecialchars($row->email) ?></td>
                                        <td><?= htmlspecialchars($row->phone) ?></td>
                                        <td><?= htmlspecialchars($row->inquiry) ?></td>
                                        <td class="message-cell"><?= htmlspecialchars($row->mes) ?></td>
                                        <td>
                                            <?php
                                                if($row->stat == 0){
                                                    echo '<span class="status-badge status-pending">Pending</span>';
                                                } else if($row->status == 1) {
                                                    echo '<span class="status-badge status-contacted">Contacted</span>';
                                                } else {
                                                    echo '<span class="status-badge status-completed">Completed</span>';
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                        }
                                    } else {
                                        echo '<tr><td colspan="7" style="text-align:center; padding: 40px;">No inquiries found</td></tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main> 

        
   
    </div>
</body>
</html>
