<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //devolver clientes

    public function cliente()
    {
        return $this->belongsTo("App\Models\Cliente");
    }

    public function vendedor()
    {
        return $this->belongsTo("App\Models\Vendedor");
    }

    //Muchos a muchos
    
    public function Productos()
    {
        return $this->belongsToMany("App\Models\Productos");
    }

    public function Pedido_Producto()
    {
        return $this-> hasMany("App\Models\Pedido_Producto");
    }

    Protected $fillable = ['fechapedido', 'estadopedido','fechaenvio', 'cliente_id', 'vendedor_id', 'cantidad', 'codigo_producto'];
    use HasFactory;
}
