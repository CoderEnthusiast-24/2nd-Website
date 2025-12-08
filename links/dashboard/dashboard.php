<!DOCTYPE html>
<html lang="en">
<head>

    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../css/dashboard.css">
<style>

    
</style>
</head>
<body>
    <aside class="sidebar">
        <div class="logo"><img src="../../images/logo.png" alt="Logo"></div>
        <nav class="nav-menu">
            <div class="nav-item active">
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
            <div class="card" style="margin-top: 5px;">
                <div class="card-title"> </div>
                <div class="table-container">
                    <table>
                        <tbody>
                            
                            <tr>
                                <td>Saturday, Oct 18, 2025</td>
                                <td>John Doe</td>
                                <td>viewed house 2</td>
                                <td><span class="status-badge status-active">Active</span></td>
                            </tr>
                            
                            <tr>
                                <td>Sunday, Oct 19, 2025</td>
                                <td>Jane Smith</td>
                                <td>viewed house 3</td>
                                <td><span class="status-badge status-active">Completed</span></td>
                            </tr>
                            
                            <tr>
                                <td>Monday, Oct 20, 2025</td>
                                <td>Bob Johnson</td>
                                <td>viewed house 1</td>
                                <td><span class="status-badge status-inactive">Inactive</span></td>
                            </tr>
                            
                            <tr>
                                <td>Tuesday, Oct 21, 2025</td>
                                <td>Alice Williams</td>
                                <td>viewed house 2</td>
                                
                                <td><span class="status-badge status-active">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
