<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Blog extends Model
{
    protected $fillable = [
        'title','alamat','no_hp','email','tanggal', 'description','file_pendukung',
      ];
}