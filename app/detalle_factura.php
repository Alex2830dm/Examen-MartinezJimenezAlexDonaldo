<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_factura extends Model
{
    public $fillable =['folio_factura', 'id_producto', 'cantidad'];    
    public static function validationRules(){
        return [
            'folio_factura' => 'requiried',
            'id_producto' => 'requiried',                        
            'cantidad' => 'requiried',

        ];
    }
}
