<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Blog extends Model
{
    protected $fillable = [
        'title','alamat','no_hp','email','tanggal', 'description','file_pendukung','keterangan','petugas_id','tanggal_kirim','bagian_id','departemen_id', 'tanggal_respon', 'tipe_keluhan', 'respon', 'waktu_penanganan', 'petugas_respon', 'penaggung_jawab', 'mengerjakan_keluhan', 'atasan_id', 'status'
      ];
}