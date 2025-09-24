<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'NumService';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['NumService', 'NomS', 'NumBloc'];

    public function personnels()
    {
        return $this->hasMany(Personnel::class, 'NumService');
    }
}
