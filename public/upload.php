<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $originalName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        
        // Validate file type
        $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        
        if (!in_array($ext, $allowedExtensions)) {
            $response['status'] = 'error';
            $response['message'] = 'Invalid file type. Only JPG, PNG, and GIF are allowed.';
            echo json_encode($response);
            exit;
        }
        
        // Validate file size (5MB limit)
        if ($fileSize > 5 * 1024 * 1024) {
            $response['status'] = 'error';
            $response['message'] = 'File too large. Maximum size is 5MB.';
            echo json_encode($response);
            exit;
        }
        
        $latitude = isset($_POST['latitude']) ? $_POST['latitude'] : '';
        $longitude = isset($_POST['longitude']) ? $_POST['longitude'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $timestamp = date('Y-m-d H:i:s');

        // For Vercel deployment, we'll simulate success
        // In production, you'd want to use a database or cloud storage
        $response['status'] = 'success';
        $response['message'] = 'Image uploaded successfully (demo mode)';
        $response['imageUrl'] = 'https://via.placeholder.com/400x300/FF9933/FFFFFF?text=Uploaded+Image';
        $response['latitude'] = $latitude;
        $response['longitude'] = $longitude;
        $response['address'] = $address;
        $response['timestamp'] = $timestamp;
        $response['note'] = 'This is a demo deployment. In production, images would be stored in cloud storage.';
        
    } else {
        $response['status'] = 'error';
        $response['message'] = 'No image uploaded or upload error.';
        $response['debug'] = [
            'files_set' => isset($_FILES['image']),
            'upload_error' => isset($_FILES['image']) ? $_FILES['image']['error'] : 'no_file',
            'post_data' => $_POST
        ];
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method.';
}

echo json_encode($response); 