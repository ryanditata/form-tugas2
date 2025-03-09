<?php
class Mahasiswa {
    protected $NIM, $nama;

    function setData($NIM, $nama){
        $this->NIM = $NIM;
        $this->nama = $nama;
    }

    function getData(){
        return [
            'NIM' => $this->NIM,
            'Nama' => $this->nama
        ];
    }

    function printData($data = null){
        if (!is_null($data)) {
            foreach ($data as $key => $value) {
                echo "<strong>$key:</strong> $value<br>";
            }
        } else {
            echo "Data kosong.";
        }
    }
}

// Ambil data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'] ?? '';
    $nama = $_POST['nama'] ?? '';

    // Buat objek Mahasiswa
    $mhs = new Mahasiswa();
    $mhs->setData($nim, $nama);

    // Tampilkan data
    echo "<h2>Data Mahasiswa</h2>";
    $mhs->printData($mhs->getData());
} else {
    echo "Form tidak dikirim.";
}
?>