<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourismplace extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'location',
        'imageAsset',
        'listImage1',
        'listImage2',
        'listImage3',
        'listImage4',
        'deskripsi',
        'jamBuka',
        'tiket',
        'waktu'
    ];
    public function listimage()
    {
        return $this->hasMany(Listimage::class);
    }
}
