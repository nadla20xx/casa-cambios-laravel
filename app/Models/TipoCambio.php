<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCambio extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tipos_cambios';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_tipo_cambio';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
