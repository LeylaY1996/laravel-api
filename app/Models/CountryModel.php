<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    use HasFactory;

    protected $table = "_z_country";
    public $timestamps = false;

    protected $fillable = [
        'iso','name','dname','iso3','position','numcode','phonecode','created','register_by','modified','modified_by'
    ];
}