<?php

namespace App\Models;
use App\Models\Evenements;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class parteners extends Model
{
    use HasFactory,softDeletes;
    protected $fillable=[
'id',
'type'
    ];
    /////relation one to many form table messages
    public function users():MorphOne
    {
        return $this->morphone(User::class,'usersable');
    }

}
