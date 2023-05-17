<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = ['marca_id', 'nome', 'imagem', 'numero_portas', 'lugares'];

    public function rules()
    {
        return [
            'nome' => 'required|unique:marcas,nome,'. $this->id.'|min:3', 
            'imagem' => 'required'
        ];
    }
}
