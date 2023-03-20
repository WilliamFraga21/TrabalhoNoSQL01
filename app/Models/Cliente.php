<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;

    public function carrinhos(): HasMany
    {
        return $this->hasMany(Carrinho::class, 'clientes_id');
    }

    public function genero(): BelongsTo
    {
        return $this->belongsTo(Genero::class, 'generos_id');
    }

}
