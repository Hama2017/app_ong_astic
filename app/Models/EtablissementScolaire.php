<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtablissementScolaire extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'nom', 'localisation', 'id_ia', 'id_departement'];

    public function inspectionAcademy()
    {
        return $this->belongsTo(InspectionAcademy::class, 'id_ia');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'id_departement');
    }
}
    
