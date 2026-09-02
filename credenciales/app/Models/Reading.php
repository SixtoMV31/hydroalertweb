<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    #$fillable es una medida de seguridad que protege contra 
    #la asignación masiva de atributos no deseados. 
    #Al definir los campos que se pueden llenar, se evita que un usuario 
    #malintencionado intente enviar datos no autorizados a través de formularios o solicitudes HTTP. 
    protected $fillable = [
        'device_id',
        'nivel',
    ];
}
