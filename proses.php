<?php
include 'mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];

    $mahasiswa = new Mahasiswa();
    $mahasiswa->setData($nim, $nama);

    $dataMahasiswa = $mahasiswa->getData();

    echo "<h2>Data Mahasiswa:</h2>";
    $mahasiswa->printData($dataMahasiswa);
}
?>