<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'personas';
    public $timestamps = false;
}
