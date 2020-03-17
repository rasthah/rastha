<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendComplaint extends Model
{

    protected $table = "send_complaints";

    protected $fillable = [
        'customer_id', 'petugas_id', 'tanggal', 'keterangan', 'bagian_id', 'departemen_id'
    ];
}
