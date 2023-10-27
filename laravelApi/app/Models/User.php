<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use App\Models\Donate;
use App\Models\Demande;


use App\Models\Message;
use App\Models\Evenements;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'status',
        'location',
        'pictures',
        'descriptions',
        'phone'
    ];


    /////relation one to one polymorhs



    public function usersable():MorphTo{
return $this->morphTo();
    }


    /////relation one to many form table donates
    public function donates()
    {
        return $this->hasMany(Donate::class);
    }
      /////relation one to many form table Posts
      public function posts()
      {
          return $this->hasMany(Post::class);
      }
        /////relation one to many form table messages
        public function messages()
        {
            return $this->hasMany(Message::class);
        }
            /////relation one to many form table messages
            public function demandes()
            {
                return $this->hasMany(Demande::class);
            }
            public function evenements()
            {
                return $this->hasMany(Evenements::class);
            }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
