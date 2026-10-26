<?php
/**
 * Praktikum 5 — Percobaan 1: Pengujian Koneksi PDO MySQL
 * File: test_koneksi.php
 */

require_once __DIR__ . '/config/database.php';

try {
    $db = new Database();
    $pdo = $db->getConnection();
    echo "\nKoneksi ke basis data MySQL berhasil!\n";
    
    // Periksa tabel
    $stmt = $pdo->query("SELECT COUNT(*) AS total FROM mahasiswa");
    $row = $stmt->fetch();
    echo "[INFO] Jumlah record mahasiswa saat ini: " . $row['total'] . " record.\n\n";
} catch (PDOException $e) {
    echo "\n[GAGAL] " . $e->getMessage() . "\n\n";
}
