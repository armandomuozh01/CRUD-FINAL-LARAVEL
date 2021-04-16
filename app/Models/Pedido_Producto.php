<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido_Producto extends Model
{
    public function pedido()
    {
        return $this->hasOne("App\Models\Pedido");
    }

    public function Producto()
    {
        return $this->hasOne("App\Models\Producto");
    }

    Protected $fillable = [' producto_id', 'pedido_id'];
    use HasFactory;
}
