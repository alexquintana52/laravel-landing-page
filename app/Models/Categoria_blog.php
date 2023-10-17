<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Categoria_blog
 *
 * @property int $categoria_id
 * @property string $nombre
 * @property string|null $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_blog whereCategoriaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_blog whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_blog whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria_blog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Categoria_blog extends Model
{
    //use HasFactory;

    protected $table = 'categoria_blog';
    protected $primaryKey = 'categoria_id';
}
