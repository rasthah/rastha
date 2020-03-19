<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Blog extends Model
{
    protected $fillable = [
        'title','alamat','no_hp','email','tanggal', 'description','file_pendukung','keterangan','petugas_id','tanggal_kirim','bagian_id','departemen_id', 'penanggung_jawab', 'atasan_id', 'tanggal_respon', 'waktu_penanganan'
      ];
}