<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $primaryKey = "idProduto";
    protected $fillable = [
        "idProduto",
        "codigoProduto",
        "descricao",
        "grupo",
        "qtdeDisponivel",
        "qtdeAlugada",
        "nomeImagem"
    ];
    protected $table = "produtos";
    public $timestamps = false;
}
