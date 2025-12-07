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
                                <th>Gmail</th>
                                <th>Join Date</th>
                                <th>Activity</th>
                                <th>Address</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Sarah Anderson
                                    <span class="small-muted">Phone: +63 917 123 4567</span>
                                </td>
                                <td>sarah.anderson@email.com</td>
                                <td>sarah.anderson@gmail.com</td>
                                <td>Oct 15, 2025</td>
                                <td>
                                    Last login: Nov 05, 2025
                                    <span class="small-muted">Viewed property: 221B Elm St</span>
                                </td>
                                <td>Brgy. San Roque, Antipolo, Rizal</td>
                                <td><span class="status-badge status-active">Active</span></td>
                            </tr>
                            <tr>
                                <td>
                                    Michael Chen
                                    <span class="small-muted">Phone: +63 915 987 6543</span>
                                </td>
                                <td>m.chen@email.com</td>
                                <td>michael.chen@gmail.com</td>
                                <td>Oct 10, 2025</td>
                                <td>
                                    Last login: Nov 01, 2025
                                    <span class="small-muted">Booked viewing: Oct 28, 2025</span>
                                </td>
                                <td>Unit 4B, Green Towers, Ortigas Ave, Pasig</td>
                                <td><span class="status-badge status-active">Active</span></td>
                            </tr>
                            <tr>
                                <td>
                                    Emma Rodriguez
                                    <span class="small-muted">Phone: +63 922 555 0011</span>
                                </td>
                                <td>emma.r@email.com</td>
                                <td>emma.rodriguez@gmail.com</td>
                                <td>Sep 28, 2025</td>
                                <td>
                                    Last login: Oct 30, 2025
                                    <span class="small-muted">Saved search: 2-bedroom near school</span>
                                </td>
                                <td>Brgy. Dela Paz, Antipolo, Rizal</td>
                                <td><span class="status-badge status-active">Active</span></td>
                            </tr>
                            <tr>
                                <td>
                                    David Thompson
                                    <span class="small-muted">Phone: +63 916 444 3322</span>
                                </td>
                                <td>d.thompson@email.com</td>
                                <td>david.thompson@gmail.com</td>
                                <td>Sep 15, 2025</td>
                                <td>
                                    Last login: Sep 20, 2025
                                    <span class="small-muted">No recent activity</span>
                                </td>
                                <td>Lot 12, Sunrise Village, Taytay, Rizal</td>
                                <td><span class="status-badge status-inactive">Inactive</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

