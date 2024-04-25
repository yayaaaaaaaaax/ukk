<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likefoto extends Model
{
    use HasFactory;

    protected $table = 'likefotos';
    protected $primaryKey = 'LikeID';

    protected $fillable = ['FotoID', 'UserID', 'TanggalLike'];
}
