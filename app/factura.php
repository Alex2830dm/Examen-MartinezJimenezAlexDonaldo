<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    public $fillable =['fecha', 'id_cliente'];    
    public static function validationRules(){
        return [
            'fecha' => 'requiried',
            'id_cliente' => 'requiried',                        
        ];
    }
}
