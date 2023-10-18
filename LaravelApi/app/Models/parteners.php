<?php

namespace App\Models;
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
  
}
