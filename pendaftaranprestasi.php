<?php
require_once 'pendaftaran.php';

class PendaftaranPrestasi extends Pendaftaran
{
    private $jenisPrestasi;
    private $tingkatPrestasi;

    public function __construct(
        $id,
        $nama,
        $asal,
        $nilai,
        $biaya,
        $jenisPrestasi,
        $tingkatPrestasi
    ){
        parent::__construct($id, $nama, $asal, $nilai, $biaya);

        $this->jenisPrestasi = $jenisPrestasi;
        $this->tingkatPrestasi = $tingkatPrestasi;
    }

    // Polimorfisme (Overriding)
    public function hitungTotalBiaya()
    {
        return $this->biayaPendaftaranDasar - 50000;
    }

    public function tampilkanInfoJalur()
    {
        return "Prestasi : ".$this->jenisPrestasi.
               " | Tingkat : ".$this->tingkatPrestasi;
    }

    public function getDaftarPrestasi($db)
    {
        $query = "SELECT * FROM tabel_pendaftaran
                  WHERE jalur_pendaftaran='Prestasi'";

        return $db->query($query);
    }
}
?>