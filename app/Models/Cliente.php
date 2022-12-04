<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['nombre', 'domicilio', 'telefono', 'email', 'password'];

    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }
}
