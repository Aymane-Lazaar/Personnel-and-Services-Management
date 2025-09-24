<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $primaryKey = 'NumPersonnel';
    protected $fillable = ['Nom', 'Salaire', 'DateEmbauche', 'Fonction', 'NumService'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'NumService');
    }
}