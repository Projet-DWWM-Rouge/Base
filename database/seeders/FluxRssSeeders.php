<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FluxRss;

class FluxRssSeeders extends Seeder
{

    public function run(): void
    {

            FluxRss::create([

                'nom_flux' => "flux_pricipal",
                'url_flux' => "aaa",
    
            ]);
            
        }
    }

