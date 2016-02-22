<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobModel extends Model
{

    /**
    *Fillable field for a job
    *
    *@var array
    */
	protected $table='requirements';
    protected $fillable = [
    		'name' ,
            'email' ,
            'age' ,
            'job_type' ,
            'programming_lang[]' ,
            'day',
            'phone' ,      
    ];

}
