<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    Public const IS_USER=1;
    Public const IS_ADMIN=2;
    Public const IS_MANAGER=3;

    protected $fillable = [
        'name','note',
    ];

    protected $dates = ['deleted_at'];

       protected $guarded = array(
        'name','note',
    );

public function users()
{
    return $this->hasMany(User::class);
}
}
