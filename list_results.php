<?php
header('Content-Type: application/json');

$resultsDir = '/var/www/html/results/';
$files = [];

if (is_dir($resultsDir)) {
    if ($dh = opendir($resultsDir)) {
        while (($file = readdir($dh)) !== false) {
            if (is_file($resultsDir . $file) && $file != "." && $file != "..") {
                if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
                    $files[] = $file;
                }
            }
        }
        closedir($dh);
    }
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Results directory not found.']);
    exit;
}

echo json_encode($files);
?> 