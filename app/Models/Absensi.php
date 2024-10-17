// Pegawai.php
public function absensi()
{
    return $this->hasMany(Absensi::class);
}

// Absensi.php
public function pegawai()
{
    return $this->belongsTo(Pegawai::class);
}
