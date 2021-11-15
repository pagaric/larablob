<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blob extends Model
{
    use HasFactory;

    protected $table = 'images';

    public function insertBlob($nom, $blob)
    {
        DB::insert("INSERT INTO images (img_nom, img_blob) VALUES(?, ?)", [$nom, $blob]);
    }

    public function getAllBlob()
    {
        return DB::select("SELECT * FROM images");
    }
}
