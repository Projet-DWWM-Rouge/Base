<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FluxRss extends Model
{
    public $table = 'flux_rss';
    protected $fillable = ['nom_flux','url_flux'];
    use HasFactory;
}