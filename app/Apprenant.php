<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
   Protected $fillable=['nom','prenom','date_de_naissance','sexe','ville','formation','etablissement','contact','email','contact_tuteur' ];
}
