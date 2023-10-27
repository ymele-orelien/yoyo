<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donate extends Model
{
    use HasFactory,softDeletes;
    protected $fillable=[
        'id',
    'user_id',
        'details',
        'montant',
        'bloodGroup',
        'poches'
            ];
            public function user()
            {
                return $this->belongsTo(User::class);
            }
             /////releation polymorhs one to one

            /////relation one to many from Users
            public function donateable():MorhpMany{
                return $this->morphTo();
            }


}
