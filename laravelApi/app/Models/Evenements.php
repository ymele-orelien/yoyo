<?php

namespace App\Models;

use App\Models\parteners;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenements extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'id',
        'user_id',
        'started',
        'theme',
        'detail',
        'picture',

    ];
    public function parteners():MorphOne{
        return $this->morphone(parteners::class,'partenersable');

    }
}
