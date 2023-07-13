<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table ='jurusan';
    protected $primaryKey ='id';
    protected $fillable = [
        'jurusan',
    ];
    public function kandidat()
    {
        return $this->hasMany(Kandidat::class);
    }
}
 