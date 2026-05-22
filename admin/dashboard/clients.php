<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Clients </title>
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/clients.css">
</head>
<body>
    <aside class="sidebar">
        <div class="logo"><img src="../../images/logo.png" alt="Logo"></div>
        <nav class="nav-menu">
            <div class="nav-item ">
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
        </nav>
    </aside>

    <div class="main-container">
        <header class="header">
            <h1 class="header-title"><b>Clients Management</b></h1>
            <div class="header-actions">
                <div class="profile-icon"></div>
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

            <!-- Inquiries Section -->
            <div class="table-section">
                <div class="section-header collapsed" onclick="toggleSection('inquiries')">
                    <div class="section-header-title">
                        <span>📋 Client List</span>
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
                                        $query = "SELECT * FROM inquiry_table ORDER BY id DESC"; 
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
                                                    } else if($row->stat == 1) {
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
                                    ?>
                                        <tr>
                                            <td colspan="7" class="empty-state">
                                                <div class="empty-state-icon">📭</div>
                                                <div>No inquiries found</div>
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
            </div>


    <script>
        function toggleSection(sectionId) {
            const header = event.currentTarget;
            const content = document.getElementById(sectionId + '-content');
            
            // Toggle collapsed class on header
            header.classList.toggle('collapsed');
            
            // Toggle expanded class on content
            content.classList.toggle('expanded');
        }
        
        // Optional: Expand first section by default on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Uncomment below to auto-expand inquiries section
            // toggleSection('inquiries');
        });
    </script>
</body>
</html>