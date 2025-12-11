<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Clients Management</title>
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/clients.css">
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
            
            <!-- Notification -->
            <div id="notification" class="notification"></div>
            
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

            <!-- Inquiries Section -->
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
                                        $query = "SELECT * FROM inquiry_table ORDER BY id DESC"; 
                                        $exec = $con->query($query);
                                        
                                        if($exec && $exec->num_rows > 0) {
                                            while($row = $exec->fetch_object()){
                                                $status_class = '';
                                                switch($row->stat) {
                                                    case 0: $status_class = 'status-pending'; break;
                                                    case 1: $status_class = 'status-accepted'; break;
                                                    case 2: $status_class = 'status-declined'; break;
                                                    case 3: $status_class = 'status-completed'; break;
                                                }
                                    ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row->fname . ' ' . $row->lname) ?></td>
                                            <td><?= htmlspecialchars($row->email) ?></td>
                                            <td><?= htmlspecialchars($row->phone) ?></td>
                                            <td><?= htmlspecialchars($row->inquiry) ?></td>
                                            <td class="message-cell"><?= htmlspecialchars($row->mes) ?></td>
                                            <td>
                                                <select class="status-dropdown <?= $status_class ?>" 
                                                        data-id="<?= $row->id ?>" 
                                                        data-type="inquiry"
                                                        onchange="updateStatus(this)">
                                                    <option value="0" <?= $row->stat == 0 ? 'selected' : '' ?>>Pending</option>
                                                    <option value="1" <?= $row->stat == 1 ? 'selected' : '' ?>>Accepted</option>
                                                    <option value="2" <?= $row->stat == 2 ? 'selected' : '' ?>>Declined</option>
                                                    <option value="3" <?= $row->stat == 3 ? 'selected' : '' ?>>Completed</option>
                                                </select>
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

            <!-- Bookings Section -->
            <div class="table-section">
                <div class="section-header collapsed" onclick="toggleSection('bookings')">
                    <div class="section-header-title">
                        <span>📅 Appointment Bookings</span>
                        <span class="section-badge"><?= $booking_count ?></span>
                    </div>
                    <span class="collapse-icon">▼</span>
                </div>
                <div class="table-content" id="bookings-content">
                    <div class="card">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Property</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Visitors</th>
                                        <th>Notes</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM booking_table ORDER BY date DESC, time DESC"; 
                                        $exec = $con->query($query);
                                        
                                        if($exec && $exec->num_rows > 0) {
                                            while($row = $exec->fetch_object()){
                                                $status_class = '';
                                                switch($row->stat) {
                                                    case 0: $status_class = 'status-pending'; break;
                                                    case 1: $status_class = 'status-accepted'; break;
                                                    case 2: $status_class = 'status-declined'; break;
                                                    case 3: $status_class = 'status-completed'; break;
                                                }
                                    ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row->fname . ' ' . $row->lname) ?></td>
                                            <td><?= htmlspecialchars($row->email) ?></td>
                                            <td><?= htmlspecialchars($row->phone) ?></td>
                                            <td><?= htmlspecialchars($row->property) ?></td>
                                            <td><?= htmlspecialchars($row->date) ?></td>
                                            <td><?= htmlspecialchars($row->time) ?></td>
                                            <td><?= htmlspecialchars($row->visitors) ?></td>
                                            <td class="message-cell"><?= htmlspecialchars($row->notes) ?></td>
                                            <td>
                                                <select class="status-dropdown <?= $status_class ?>" 
                                                        data-id="<?= $row->id ?>" 
                                                        data-type="booking"
                                                        onchange="updateStatus(this)">
                                                    <option value="0" <?= $row->stat == 0 ? 'selected' : '' ?>>Pending</option>
                                                    <option value="1" <?= $row->stat == 1 ? 'selected' : '' ?>>Accepted</option>
                                                    <option value="2" <?= $row->stat == 2 ? 'selected' : '' ?>>Declined</option>
                                                    <option value="3" <?= $row->stat == 3 ? 'selected' : '' ?>>Completed</option>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php
                                            }
                                        } else {
                                    ?>
                                        <tr>
                                            <td colspan="10" class="empty-state">
                                                <div class="empty-state-icon">📭</div>
                                                <div>No bookings found</div>
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
        </main>
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
        
        function updateStatus(selectElement) {
            const id = selectElement.getAttribute('data-id');
            const type = selectElement.getAttribute('data-type');
            const status = selectElement.value;
            
            console.log('Updating status:', { id, type, status }); // Debug log
            
            // Update dropdown color immediately for better UX
            selectElement.className = 'status-dropdown';
            switch(parseInt(status)) {
                case 0: selectElement.classList.add('status-pending'); break;
                case 1: selectElement.classList.add('status-accepted'); break;
                case 2: selectElement.classList.add('status-declined'); break;
                case 3: selectElement.classList.add('status-completed'); break;
            }
            
            // Send AJAX request to update status
            const formData = new FormData();
            formData.append('id', id);
            formData.append('status', status);
            formData.append('type', type);
            
            fetch('update_status.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                console.log('Response status:', response.status); // Debug log
                if (!response.ok) {
                    throw new Error('Network response was not ok: ' + response.status);
                }
                return response.text(); // Get as text first to see what we're getting
            })
            .then(text => {
                console.log('Response text:', text); // Debug log
                try {
                    const data = JSON.parse(text);
                    if (data.success) {
                        showNotification('Status updated successfully!', 'success');
                    } else {
                        showNotification('Failed: ' + data.message, 'error');
                    }
                } catch (e) {
                    console.error('JSON parse error:', e);
                    showNotification('Server response error: ' + text.substring(0, 100), 'error');
                }
            })
            .catch(error => {
                console.error('Fetch error:', error);
                showNotification('Network error: ' + error.message, 'error');
            });
        }
        
        function showNotification(message, type) {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.className = 'notification ' + type;
            notification.style.display = 'block';
            
            // Hide after 3 seconds
            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
        }
    </script>
</body>
</html>