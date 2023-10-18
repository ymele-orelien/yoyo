<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donate extends Model
{
    use HasFactory,softDeletes;
    protected $fillable=[
        'id',
        'details'
            ];
            public function users():MorphOne{
                return $this->morphone(User::class,'usersable');
            }
}
