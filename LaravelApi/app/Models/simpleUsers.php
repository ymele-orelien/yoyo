<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class simpleUsers extends Model
{
    use HasFactory,softDeletes;
    protected $fillable=[
        'id',
        'gender',
        'bloodGroup',
        'dateBirth',
    ];
    public function users():MorphOne
    {
        return $this->morphone(User::class,'usersable');
    }
}
