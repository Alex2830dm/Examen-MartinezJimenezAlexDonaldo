<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public $fillable =['nombre', 'precio', 'stock',];    
    public static function validationRules(){
        return [
            'nombre' => 'requiried| min:5 |max:50',
            'precio' => 'requiried',                        
            'stock' => 'requiried',

        ];
    }
}
