<?php

$file_path = 'temp2.mp3';

try {
    // Increase memory limit if needed
    ini_set('memory_limit', '256M');

    // Check if the file exists and is readable
    if (!file_exists($file_path) || !is_readable($file_path)) {
        throw new Exception('File does not exist or is not readable.');
    }

    // Open the file for reading
    if (!($handle = fopen($file_path, 'rb'))) {
        throw new Exception('Failed to open file for reading.');
    }

    // Initialize variables
    $base64_encoded = '';
    $chunk_size = 1024 * 1024; // 1 MB chunks (adjust as necessary)

    // Read file in chunks and encode each chunk
    while (!feof($handle)) {
        $chunk = fread($handle, $chunk_size);
        $base64_encoded .= base64_encode($chunk);
    }

    // Close the file handle
    fclose($handle);

    // URL encode the base64 string
    $base64_uri_encoded = urlencode($base64_encoded);

    // Output the data URI
    echo '<textarea rows="10" cols="50">data:audio/mp3;base64,'.$base64_uri_encoded.'</textarea>';

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

?>
