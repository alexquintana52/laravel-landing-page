<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Blog
 *
 * @property int $id
 * @property int|null $autor_id
 * @property string $titulo
 * @property int $categoria_id
 * @property string $noticia
 * @property string|null $img
 * @property string|null $descripcion_img
 * @property string $fecha
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereAutorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDescripcionImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereNoticia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @property-read \App\Models\Categoria_blog $categoria_blog
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCategoriaId($value)
 * @mixin \Eloquent
 */
class Blog extends Model
{
    //use HasFactory;

    protected  $table = 'blog';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'noticia',
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
        'categoria_id.required' => 'El campo categoria es obligatorio',
        'descripcion_img.required' => 'El campo descripcion de la imagen es obligatorio',
        'descripcion_img.min' => 'El campo descripcion de la imagen debe tener al menos 5 caracteres',
        'descripcion_img.max' => 'El campo descripcion de la imagen debe tener como maximo 50 caracteres',
        'fecha.required' => 'El campo fecha es obligatorio'

    ];

    public function categoria_blog():BelongsTo
    {
        return $this->belongsTo(Categoria_blog::class, 'categoria_id', 'categoria_id');
    }


}
