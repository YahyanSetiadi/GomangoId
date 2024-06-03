<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'function.php';
require 'cek.php';

// Memastikan parameter 'id' tersedia dalam URL
if (isset($_GET['id'])) {
    // Mendapatkan nilai id_order dari parameter URL
    $id_order = $_GET['id'];

    // Memastikan data file ada dalam database
    $query = "SELECT bukti_tf FROM checkout WHERE id_order = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id_order);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $file);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    // Mendapatkan nama file dari hasil query
    if ($file !== null) {
        // Mendefinisikan path ke folder uploads (pastikan sesuai dengan lokasi sebenarnya)
        $uploadDir = '../uploads/';

        // Memastikan file ada
        $targetFilePath = $uploadDir . $file;
        if (file_exists($targetFilePath)) {
            // Mengatur header sebagai file yang akan diunduh
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($targetFilePath));
            readfile($targetFilePath);
            exit;
        } else {
            echo "File tidak ditemukan.";
        }
    } else {
        echo "File tidak ada atau telah dihapus.";
    }
} else {
    echo "Parameter 'id' tidak tersedia.";
}
?>
