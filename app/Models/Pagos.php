<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Servicios;


class Pagos extends Model
{
    //use HasFactory;
    protected $table = 'pagos';

    protected $fillable = [
        'user_id',
        'collection_id',
        'collection_status',
        'merchant_order_id',
        'site_id',
        'preference_id',
        'servicio_id', // Agrega este campo
        'payment_type',
    ];


    public static $reglas = [
        'user_id' => 'required',
        'collection_id' => 'required',
        'collection_status' => 'required',
        'merchant_order_id' => 'required',
        'site_id' => 'required',
        'preference_id' => 'required',
        'servicio_id' => 'required', // Agrega esta regla
        'payment_type' => 'required',
    ];

    public static $mensajesdeError = [
        'user_id.required' => 'El campo user_id es obligatorio',
        'collection_id.required' => 'El campo collection_id es obligatorio',
        'collection_status.required' => 'El campo collection_status es obligatorio',
        'merchant_order_id.required' => 'El campo merchant_order_id es obligatorio',
        'site_id.required' => 'El campo site_id es obligatorio',
        'preference_id.required' => 'El campo preference_id es obligatorio',
        'servicio_id.required' => 'El campo servicio_id es obligatorio', // Agrega este mensaje
        'payment_type.required' => 'El campo payment_type es obligatorio',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function servicio():BelongsTo
    {
        return $this->belongsTo(Servicios::class, 'servicio_id', 'servicio_id');
    }


}
