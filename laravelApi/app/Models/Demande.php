<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demande extends Model
{
    use HasFactory,SoftDeletes;
  protected $fillable=[
        'id',
        'user_id',
        'motif',
        'bloodGroup',
        'poches'
    ];
    public function users():MorphOne{
        return $this->morphone(User::class,'usersable');

    }
}
