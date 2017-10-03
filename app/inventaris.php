<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventaris extends Model
{
	/**
	 * [$table description]
	 * @var string
	 */
    protected $table = 'inventaris_ajk';
    
    /**
     * [$filltable description]
	 * @var [type]
     */
    protected $filltable = [
      'id', 'barang', 'jumlah_total', 'jumlah_dipinjam'
    ];
}
