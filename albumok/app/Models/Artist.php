<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "artists";
    protected $fillable =[
        "name",
    ];
    public function artist()
    {
        return $this->hasOne(Album::class, "artist_id", "id");
    }
}
