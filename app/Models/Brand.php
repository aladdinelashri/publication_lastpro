<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name','note',
    ];

    protected $dates = ['deleted_at'];

       protected $guarded = array(
        'name','note',
    );


}
