<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table        ='buku';
    protected $primaryKey   ='buku_id';
    protected $fillable   =[
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'jumlah'
    ];

}
