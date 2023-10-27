<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory,SoftDeletes;
   protected  $fillable=[
        'id',
        'user_id',
        'text',
        'picture',
        'video'
   ];
   public function user()
            {
                return $this->belongsTo(User::class);
            }
}
