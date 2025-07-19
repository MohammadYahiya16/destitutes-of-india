<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// For Vercel deployment, return sample data
// In production, you'd fetch from a database
$samplePosts = [
    [
        'imageUrl' => 'https://via.placeholder.com/400x300/FF9933/FFFFFF?text=Sample+Image+1',
        'latitude' => '28.6139',
        'longitude' => '77.2090',
        'address' => 'New Delhi, India',
        'timestamp' => '2024-01-15 10:30:00'
    ],
    [
        'imageUrl' => 'https://via.placeholder.com/400x300/138808/FFFFFF?text=Sample+Image+2',
        'latitude' => '19.0760',
        'longitude' => '72.8777',
        'address' => 'Mumbai, India',
        'timestamp' => '2024-01-14 15:45:00'
    ],
    [
        'imageUrl' => 'https://via.placeholder.com/400x300/FF6B6B/FFFFFF?text=Sample+Image+3',
        'latitude' => '12.9716',
        'longitude' => '77.5946',
        'address' => 'Bangalore, India',
        'timestamp' => '2024-01-13 09:20:00'
    ]
];

echo json_encode($samplePosts); 