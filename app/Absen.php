<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = 'absen';

    protected $fillable = [
        'user_id', 'tanggal', 'time_in', 'time_out', 'note', 'keterangan'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
