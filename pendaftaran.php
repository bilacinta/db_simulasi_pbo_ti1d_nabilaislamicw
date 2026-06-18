<?php

require_once 'koneksi.php';

// Tahap 3 : Encapsulation + Abstraction

abstract class Pendaftaran
{
    // Properti terenkapulasi (protected)
    protected $id_pendaftaran;
    protected $nama_calon;
    protected $asal_sekolah;
    protected $nilai_ujian;
    protected $biayaPendaftaranDasar;

    // Constructor untuk memetakan data dari tabel database
    public function __construct(
        $id,
        $nama,
        $asal,
        $nilai,
        $biaya
    )
    {
        $this->id_pendaftaran = $id;
        $this->nama_calon = $nama;
        $this->asal_sekolah = $asal;
        $this->nilai_ujian = $nilai;
        $this->biayaPendaftaranDasar = $biaya;
    }

    // Method abstract
    abstract public function hitungTotalBiaya();

    abstract public function tampilkanInfoJalur();

    // Getter
    public function getIdPendaftaran()
    {
        return $this->id_pendaftaran;
    }

    public function getNamaCalon()
    {
        return $this->nama_calon;
    }

    public function getAsalSekolah()
    {
        return $this->asal_sekolah;
    }

    public function getNilaiUjian()
    {
        return $this->nilai_ujian;
    }

    public function getBiayaPendaftaranDasar()
    {
        return $this->biayaPendaftaranDasar;
    }
}

?>