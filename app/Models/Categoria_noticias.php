<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Categoria_noticias
 *
 * @property int $categoria_id
 * @property string $nombre
 * @property string|null $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_noticias newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_noticias newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_noticias query()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_noticias whereCategoriaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_noticias whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_noticias whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_noticias whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_noticias whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Categoria_noticias extends Model
{
    //use HasFactory;

    protected $table = 'categoria_noticias';
    protected $primaryKey = 'categoria_id';

}
