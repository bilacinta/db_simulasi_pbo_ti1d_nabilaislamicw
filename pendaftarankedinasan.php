<?php
require_once 'pendaftaran.php';

class PendaftaranKedinasan extends Pendaftaran
{
    private $skIkatanDinas;
    private $instansiSponsor;

    public function __construct(
        $id,
        $nama,
        $asal,
        $nilai,
        $biaya,
        $sk,
        $instansi
    ){
        parent::__construct($id, $nama, $asal, $nilai, $biaya);

        $this->skIkatanDinas = $sk;
        $this->instansiSponsor = $instansi;
    }

    // Polimorfisme (Overriding)
    public function hitungTotalBiaya()
    {
        return $this->biayaPendaftaranDasar * 1.25;
    }

    public function tampilkanInfoJalur()
    {
        return "SK : ".$this->skIkatanDinas.
               " | Sponsor : ".$this->instansiSponsor;
    }

    public function getDaftarKedinasan($db)
    {
        $query = "SELECT * FROM tabel_pendaftaran
                  WHERE jalur_pendaftaran='Kedinasan'";

        return $db->query($query);
    }
}
?>