<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionAcademy extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'nom', 'id_region'];
    
    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region');
    }

    public function etablissementsScolaires()
    {
        return $this->hasMany(EtablissementScolaire::class, 'id_ia');
    }
}
