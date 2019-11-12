<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tourDestinos;
class Tour extends Model
{
    protected $table = 'tours';
    protected $fillable = ['name', 'description', 'image', 'duracion','locale', 'destinos'];

    /*public function destinos()
    {
    	return $this->hasMany(tourDestinos::class, 'tour_id');
    }*/

}
