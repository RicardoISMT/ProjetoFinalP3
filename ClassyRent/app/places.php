<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    protected $table = 'places';

    protected $primaryKey = 'id';
    //id de cada alojamento onde estará associado a cada um dos arrays

    protected $fillable = array('alojamento', 'cidade', 'uni', 'distancia', 'preco', 'mail', 'descricao', 'foto');

    public $timestamps = true;

    public function users(){
        return $this->hasMany('App\users');
    }
}
