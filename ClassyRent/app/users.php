<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';
    //id de cada usuário onde estará associado um nome 'person', um 'email' e uma 'pass'

    protected $fillable = array('email', 'pass', 'person');
    //

    public $timestamps = true;
    //

    public function places(){
        return $this->hasMany('App\places');
        //'hasMany' permite procurar por 'email' e devolver o 'place' relativo à procura efetuada
    }
}
