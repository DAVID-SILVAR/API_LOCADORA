<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = ['marca_id', 'nome', 'imagem', 'numero_portas', 'lugares', 'air_bag', 'abs'];

    public function rules()
    {
        return [
            'marca_id' => 'exists:marcas,id',
            'nome' => 'required|unique:marcas,nome,'. $this->id.'|min:3', 
            'imagem' => 'required',
            'numero_portas' => 'required|integer|digits_between1,5',
            'lugares' => 'required|integer|digits_between1,20',
            'air_bag' => 'required|boolean',
            'abs' => 'required|bolean'
        ];
    }

    public function marca() 
    {
        return $this->belongsTo("App/Models/Marca");
    }

}
