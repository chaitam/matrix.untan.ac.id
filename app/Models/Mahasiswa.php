<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    public $table = "table_mahasiswa";

    protected $fillable = ['nim', 'nama', 'foto_normal', 'foto_nonformal', 'hobi', 'ttl', 'quotes'];

    
}
