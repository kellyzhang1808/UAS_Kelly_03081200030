<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class query extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pegawai';

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
    protected $fillable = ['Transaksi_ID', 'Namapegawai', 'Usia', 'Jeniskelamin'];

    
}