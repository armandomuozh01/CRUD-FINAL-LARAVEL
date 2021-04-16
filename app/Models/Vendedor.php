<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    //devolver pedidos de cliente

    public function pedido()
    {
        return $this->hasOne("App\Models\Pedido");
    }

    public function verpedidos() {
        return $this-> hasMany("App\Models\Pedido");
    }

    public function productos()
     {
      return $this->belongsToMany("App\Models\Pedidos_Productos");
    }
    Protected $fillable = ['nombre', 'apellido_paterno','apellido_materno'];
    use HasFactory;
}
