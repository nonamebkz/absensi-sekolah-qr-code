<?php

namespace App\Models;

use CodeIgniter\I18n\Time;
use CodeIgniter\Model;

enum Kehadiran: int
{
    case Hadir = 1;
    case Sakit = 2;
    case Izin = 3;
    case TanpaKeterangan = 4;
}

enum TipeUser: string
{
    case Siswa = 'id_siswa';
    case Guru = 'id_guru';
}

interface PresensiInterface
{
    public function cek_absen(string|int $id, string|Time $date);
    public function absen_masuk(string $id, $date, $time);
    public function absen_keluar(string $id, $time);
    public function get_presensi($id, $date);
    public function get_presensi_byId($id_presensi);
}

class PresensiBaseModel extends Model
{
    // protected $useTimestamps = true;

    protected $primaryKey = 'id_presensi';
}