<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
   /**
	 * [$table description]
	 * @var string
	 */
    protected $table = 'video_link';
    
    /**
     * [$filltable description]
	 * @var [type]
     */
    protected $filltable = [
    	'id','link','videoid','judul','durasi'
    ];
}
