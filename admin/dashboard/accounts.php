<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accounts Management</title>
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
            <div class="nav-item">
                <a href="appointments.php">APPOINTMENTS</a>
            </div>
            <div class="nav-item active">
                <a href="accounts.php">ACCOUNTS</a>
            </div>
        </nav>
    </aside>

    <div class="main-container">
        <header class="header">
            <h1 class="header-title"><p><b>Accounts</b></p></h1>
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
                <div class="card-title">Account Details</div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Account Owner</th>
                                <th>Account Type</th>
                                <th>Created Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>Premium</td>
                                <td>Aug 10, 2025</td>
                                <td><span class="status-badge status-active">Active</span></td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>Premium</td>
                                <td>Jul 22, 2025</td>
                                <td><span class="status-badge status-active">Active</span></td>
                            </tr>
                            <tr>
                                <td>Bob Johnson</td>
                                <td>Free</td>
                                <td>Sep 05, 2025</td>
                                <td><span class="status-badge status-active">Active</span></td>
                            </tr>
                            <tr>
                                <td>Alice Williams</td>
                                <td>Premium</td>
                                <td>Jun 18, 2025</td>
                                <td><span class="status-badge status-inactive">Suspended</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
