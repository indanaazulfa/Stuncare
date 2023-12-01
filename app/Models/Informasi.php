<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    protected $fillable =['tanggal', 'judul', 'isi', 'gambar', 'slug'];
    protected $table ='informasis'; 
    public $timestamps = true;
}
