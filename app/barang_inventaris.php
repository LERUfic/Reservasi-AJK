<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang_inventaris extends Model
{
    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
