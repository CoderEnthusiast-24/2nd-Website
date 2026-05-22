<?php
// Fix the database connection path
require('../../links/backend/database.php');

// Enable error reporting for debugging (remove this in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set header for JSON response
header('Content-Type: application/json');

// Get POST data
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$status = isset($_POST['status']) ? intval($_POST['status']) : 0;
$type = isset($_POST['type']) ? $_POST['type'] : '';

// Validate input
if ($id <= 0 || !in_array($type, ['inquiry', 'booking'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid data - ID: ' . $id . ', Type: ' . $type]);
    exit();
}

// Validate status value (0=Pending, 1=Accepted, 2=Declined, 3=Completed)
if (!in_array($status, [0, 1, 2, 3])) {
    echo json_encode(['success' => false, 'message' => 'Invalid status value: ' . $status]);
    exit();
}

// Check database connection
if (!isset($con) || $con->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed']);
    exit();
}

// Determine table name
$table = ($type === 'inquiry') ? 'inquiry_table' : 'booking_table';

// Update status in database
$stmt = $con->prepare("UPDATE `$table` SET `stat` = ? WHERE `id` = ?");

if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Prepare failed: ' . $con->error]);
    exit();
}

$stmt->bind_param("ii", $status, $id);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        // Get status label
        $status_labels = [
            0 => 'Pending',
            1 => 'Accepted',
            2 => 'Declined',
            3 => 'Completed'
        ];
        
        echo json_encode([
            'success' => true, 
            'message' => 'Status updated successfully',
            'status_label' => $status_labels[$status]
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'No rows updated. Record may not exist.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Execute failed: ' . $stmt->error]);
}

$stmt->close();
$con->close();
?>