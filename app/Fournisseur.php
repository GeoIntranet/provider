<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    public $fillable=['nom','email','tel','adresse','source'];
}
