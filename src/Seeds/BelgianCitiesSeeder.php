<?php

use Illuminate\Database\Seeder;
use PolarYouth\Cities\Models\Cities;
use PolarYouth\Cities\Models\Provinces;

/**
 * Class BelgianCitiesSeeder
 */
class BelgianCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Provinces part
        $provinces = [
            ['name' => 'Antwerpen'],
            ['name' => 'Oost-Vlaanderen'],
            ['name' => 'Vlaams-Brabant'],
            ['name' => 'Limburg'],
            ['name' => 'West-Vlaanderen'],
            ['name' => 'Henegouwen'],
            ['name' => 'Luik'],
            ['name' => 'Luxemburg'],
            ['name' => 'Namen'],
            ['name' => 'Waals-Brabant'],
        ];

        foreach ($provinces as $province) {
            Provinces::create($province);
        }

        // Cities part.
        $dataset = fopen('https://raw.githubusercontent.com/spatie/belgian-cities-geocoded/master/belgian-cities-geocoded.csv', 'r');
        $header  = true;

        while ($city = fgetcsv($dataset, 1000, ',')) {

            if ($header) {
                $header = false;
            } else {
                $province = Provinces::where('name', '=', $city[4])->first()->get();

                Cities::create([
                    'province_id' => $province->id,
                    'postal_code' => $city[0],
                    'name'        => $city[1],
                    'lat'         => $city[2],
                    'lng'         => $city[3],
                ]);
            }

        }

        fclose($dataset);
    }
}