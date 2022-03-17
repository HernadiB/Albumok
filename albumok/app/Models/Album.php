<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = "albums";
    protected $fillable =[
        "title",
        "released",
        "genre",
        "tcc",
        "sales",
        "cover"
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class, "artist_id", "id");
    }

}
