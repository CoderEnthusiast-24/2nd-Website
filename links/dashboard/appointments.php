<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appointments Management</title>
    <link rel="stylesheet" href="../../css/dashboard.css">
</head>
<body>
    <aside class="sidebar">
        <div class="logo"><img src="../../images/logo.png" alt="Logo"></div>
        <nav class="nav-menu">
            <div class="nav-item">
                <a href="dashboard.php">DASHBOARD</a>
            </div>
            <div class="nav-item">
                <a href="clients.php">CLIENTS</a>
            </div>
            <div class="nav-item">
                <a href="properties.php">PROPERTIES</a>
            </div>
            <div class="nav-item active">
                <a href="appointments.php">APPOINTMENTS</a>
            </div>
            <div class="nav-item">
                <a href="accounts.php">ACCOUNTS</a>
            </div>
        </nav>
    </aside>

    <div class="main-container">
        <header class="header">
            <h1 class="header-title"><p><b>Appointments</b></p></h1>
            <div class="header-actions">
                <div class="profile-icon"></div>
            </div>
        </header>

        <main class="content">
            <div class="dashboard-grid">
                <div class="card">
                    <div class="card-title">Total Accounts</div>
                    <div class="card-value">523</div>
                    <div class="card-subtitle">All user accounts</div>
                </div>
                <div class="card">
                    <div class="card-title">Premium Accounts</div>
                    <div class="card-value">187</div>
                    <div class="card-subtitle">Active subscriptions</div>
                </div>
            </div>

            <div class="card" style="margin-top: 20px;">
                <div class="card-title">Appointment Schedule</div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Client</th>
                                <th>Property</th>
                                <th>Date & Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sarah Anderson</td>
                                <td>Sunset Apartments</td>
                                <td>Oct 25, 2025 - 2:00 PM</td>
                                <td><span class="status-badge status-active">Scheduled</span></td>
                            </tr>
                            <tr>
                                <td>Michael Chen</td>
                                <td>Commerce Plaza</td>
                                <td>Oct 26, 2025 - 10:30 AM</td>
                                <td><span class="status-badge status-active">Scheduled</span></td>
                            </tr>
                            <tr>
                                <td>Emma Rodriguez</td>
                                <td>Green Valley Homes</td>
                                <td>Oct 24, 2025 - 3:15 PM</td>
                                <td><span class="status-badge status-active">Completed</span></td>
                            </tr>
                            <tr>
                                <td>David Thompson</td>
                                <td>Tech Hub Office</td>
                                <td>Oct 23, 2025 - 11:00 AM</td>
                                <td><span class="status-badge status-inactive">Cancelled</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
