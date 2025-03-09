<?php
class mahasiswa {
    protected $NIM, $nama;

    function setData($NIM, $nama) {
        $this->NIM = $NIM;
        $this->nama = $nama;
    }

    function getData() {
        return [
            'NIM' => $this->NIM,
            'nama' => $this->nama
        ];
    }

    function printData($data) {
        echo "NIM: " . $data['NIM'] . "<br>";
        echo "Nama: " . $data['nama'] . "<br><br>";
    }
}
?>