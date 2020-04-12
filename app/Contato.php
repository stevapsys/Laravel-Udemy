<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista()
    {
        return(object) [
            'nome'=>'Stephanie',
            'tel'=>'995489588'
        ]; 
    }
}
