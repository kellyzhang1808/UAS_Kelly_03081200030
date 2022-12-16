<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class formpegawai extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'formpegawais';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Namapegawai', 'Usia', 'Jeniskelamin'];

    
}
