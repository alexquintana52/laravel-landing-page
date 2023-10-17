<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Noticia
 *
 * @property int $id
 * @property string $titulo
 * @property string $noticia
 * @property string|null $funcionalidades
 * @property int $categoria_id
 * @property string|null $img
 * @property string|null $descripcion_img
 * @property string $fecha
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia query()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereDescripcionImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereFuncionalidades($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereNoticia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereUpdatedAt($value)
 * @property-read \App\Models\Categoria_noticias $categoria_noticias
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereCategoriaId($value)
 * @mixin \Eloquent
 */
class Noticia extends Model
{
    //use HasFactory;

    protected  $table = 'noticias';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'noticia',
        'funcionalidades',
        'categoria_id',
        'img',
        'descripcion_img',
        'fecha'
    ];

    /**
     * Reglas de validacion para el formulario de creacion de noticias
     */
    public static $reglas = [
        'titulo' => 'required|min : 5|max : 50',
        'noticia' => 'required | min : 5 | max : 2560',
        'funcionalidades' => 'required | min : 5 | max : 2560',
        'categoria_id' => 'required ',
        'descripcion_img' => 'required | min : 5 | max : 50',
        'fecha' => 'required '
    ];

    /**
     * Mensajes de error para el formulario de creacion de noticias
     */
    public static $mensajesdeError = [
        'titulo.required' => 'El campo titulo es obligatorio',
        'titulo.min' => 'El campo titulo debe tener al menos 5 caracteres',
        'titulo.max' => 'El campo titulo debe tener como maximo 50 caracteres',
        'noticia.required' => 'El campo noticia es obligatorio',
        'noticia.min' => 'El campo noticia debe tener al menos 5 caracteres',
        'noticia.max' => 'El campo noticia debe tener como maximo 2560 caracteres',
        'funcionalidades.required' => 'El campo funcionalidades es obligatorio',
        'funcionalidades.min' => 'El campo funcionalidades debe tener al menos 5 caracteres',
        'funcionalidades.max' => 'El campo funcionalidades debe tener como maximo 2560 caracteres',
        'categoria_id.required' => 'El campo categoria es obligatorio',
        'descripcion_img.required' => 'El campo descripcion_img es obligatorio',
        'descripcion_img.min' => 'El campo descripcion_img debe tener al menos 5 caracteres',
        'descripcion_img.max' => 'El campo descripcion_img debe tener como maximo 50 caracteres',
        'fecha.required' => 'El campo fecha es obligatorio'
    ];

    public function categoria_noticias():BelongsTo
    {
        return $this->belongsTo(Categoria_noticias::class, 'categoria_id', 'categoria_id');
    }
}
