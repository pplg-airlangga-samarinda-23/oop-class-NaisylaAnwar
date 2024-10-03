<?php

class Siswa
{
    private $nama;
    private $nisn;
    private $alamat;
    private $jurusan;
    private $tanggalhr;
    // deklarasikan atribut-atribut kelas Siswa

    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($nama, $nisn, $alamat, $jurusan, $tanggalhr)
    {
        $this->nama = $nama;
        $this->nisn = $nisn;
        $this->jurusan = $jurusan;
        $this->tanggalhr = $tanggalhr;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function setNisn($nisn)
    {
        $this->nisn = $nisn;
    }
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }
    public function setTanggalhr($tanggalhr)
    {
        $this->tanggalhr = $tanggalhr;
    }

    public function getNama()
    {
        return $this->nama;
    }
    public function getNisn()
    {
        return $this->nisn;
    }
    public function getJurusan()
    {
        return $this->jurusan;
    }
    public function getTanggalhr()
    {
        return $this->tanggalhr;
    }
    // buat metode untuk menghitung umur siswa
    public function hitungUmur() {


        return ;
    }
}

// buat dua buah objek siswa
$siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2006");
$siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2007");

// contoh output:
// Bambang lebih tua dibandingkan Bahrun.