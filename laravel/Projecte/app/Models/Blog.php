<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'blog';

    protected $fillable = [
        'idclient',
        'idmoderator',
        'idcomment',
        'title',
        'category',
        'content',
        'wikipedia',
        'idimage',
        'latitude',
        'longitude',
        'idreservation',
    ];
}
