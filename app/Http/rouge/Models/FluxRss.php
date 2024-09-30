<?php

namespace App\Http\rouge\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\FluxController;
use Illuminate\Database\Eloquent\SoftDeletes;

class FluxRss extends Model
{
    use SoftDeletes;
    public $table = 'flux_rss';
    protected $fillable = ['nom_flux','url_flux'];
    use HasFactory;
}