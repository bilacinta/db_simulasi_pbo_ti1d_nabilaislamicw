<?php

class Koneksi
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_simulasi_pbo_ti1d_nabilaislamicw";

    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if ($this->conn->connect_error) {
            die("Koneksi gagal : " . $this->conn->connect_error);
        }

        echo "Koneksi berhasil<br>";
    }

    public function getKoneksi()
    {
        return $this->conn;
    }
}

// Membuat objek koneksi
$tesKoneksi = new Koneksi();

?>