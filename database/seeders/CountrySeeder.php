<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path      = base_path('app/Api/country.json');
        $countries = File::json($path);

        foreach ($countries as $country) {
            $obj = new Country();

            $obj->id                = $country['id'];
            $obj->name              = $country['name'];
            $obj->iso3              = $country['iso3'];
            $obj->iso2              = $country['iso2'];
            $obj->numeric_code      = $country['numeric_code'];
            $obj->phone_code        = $country['phone_code'];
            $obj->capital           = $country['capital'];
            $obj->currency          = $country['currency'];
            $obj->currency_name     = $country['currency_name'];
            $obj->currency_symbol   = $country['currency_symbol'];
            $obj->tld               = $country['tld'];
            $obj->native            = $country['native'];
            $obj->region            = $country['region'];
            $obj->subregion         = $country['subregion'];
            $obj->latitude          = $country['latitude'];
            $obj->longitude         = $country['longitude'];
            $obj->emoji             = $country['emoji'];
            $obj->emojiU            = $country['emojiU'];
            $obj->timezones         = $country['timezones'];
            $obj->translations      = $country['translations'];
            $obj->save();

            // DB::table('countries')->insert([
                
            // ]);
        }
    }
}
