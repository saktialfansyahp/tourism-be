<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listimage extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
        'tourismplace_id'
    ];
    public function tourismplace()
    {
        return $this->belongsTo(Tourismplace::class);
    }
}
