<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Uso de la clase 'Attribute', necesaria para la creación de los mutadores.
use Illuminate\Database\Eloquent\Casts\Attribute;

class Element extends Model
{
    use HasFactory;


    // Los mutadores y los accesores en Laravel funcionan como los métodos 'set()' y 'get()', repectivamente.
    // Los mutadores cambian el valor de la propiedad antes de almacenarse en la base de datos.
    // Los accesores, por su parte, cambian este valor, cuando se desea acceder a la misma.
    // Definición de mutador que cambia la especificación de ingreso de datos del usuario a caracteres en minúscula.

    // Ejemplo de Accesor

    // protected function name(){
    //     return new Attribute(
    //         get: function($value){
    //             return strtolower($value);
    //         },
    //         set: function($value){
    //             return ucwords($value);
    //         }
    //     );

    // }

    protected function name(){
        return new Attribute(
            set: fn($value) => strtolower($value),
            get: fn($value) => ucwords($value)
        );
    }
}
