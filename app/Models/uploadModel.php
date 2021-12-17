<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class uploadModel extends Model
{
    use HasFactory;
    protected $table = "uploads";


    /// data a mostrar
    protected $fillable = [

        'nombreArchivo',
		'url',
		'imagen',
		'category',
		'descripcion',
		'creadoPor',
      
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */

    //  data a ocultar
    protected $hidden = [
        'id ',
	   'created_at',
		'updated_at	',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

///devolvemos todos los archivos
    public function obtenerDocumentos()
    {
        return uploadModel::all();
    }

    //
    public function obteneruploadPorId($id)
    {
        return uploadModel::find($id);
    }
}
