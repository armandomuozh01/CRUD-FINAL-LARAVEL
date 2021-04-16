<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    //devolver pedidos de cliente

    public function pedido()
    {
        return $this->hasOne("App\Models\Pedido");
    }

    public function verpedidos() {
        return $this-> hasMany("App\Models\Pedido");
    }

   Protected $fillable = ['nombre', 'apellido_paterno','apellido_materno'];
    use HasFactory;
}
