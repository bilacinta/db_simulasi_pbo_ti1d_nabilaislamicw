<?php
require_once 'pendaftaran.php';

class PendaftaranReguler extends Pendaftaran
{
    private $pilihanProdi;
    private $lokasiKampus;

    public function __construct(
        $id,
        $nama,
        $asal,
        $nilai,
        $biaya,
        $pilihanProdi,
        $lokasiKampus
    ){
        parent::__construct($id, $nama, $asal, $nilai, $biaya);

        $this->pilihanProdi = $pilihanProdi;
        $this->lokasiKampus = $lokasiKampus;
    }

    public function hitungTotalBiaya()
    {
        return $this->biayaPendaftaranDasar;
    }

    public function tampilkanInfoJalur()
    {
        return "Prodi : ".$this->pilihanProdi.
               " | Lokasi Kampus : ".$this->lokasiKampus;
    }

    public function getDaftarReguler($db)
    {
        $query = "SELECT * FROM tabel_pendaftaran
                  WHERE jalur_pendaftaran='Reguler'";

        return $db->query($query);
    }
}
?>