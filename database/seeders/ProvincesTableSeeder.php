<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('provinces')->delete();
        
        DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Álava',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
                
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Albacete',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Alicante',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Almería',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Ávila',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Badajoz',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Illes Balears',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Barcelona',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Burgos',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Cáceres',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Cádiz',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Castellón',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Ciudad Real',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Córdoba',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'A Coruña',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Cuenca',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Girona',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Granada',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Guadalajara',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Guipúzcoa',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Huelva',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Huesca',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Jaén',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'León',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Lleida',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'La Rioja',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Lugo',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Madrid',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Málaga',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Murcia',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Navarra',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Ourense',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Asturias',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Palencia',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Las Palmas',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Pontevedra',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Salamanca',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Santa Cruz de Tenerife',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Cantabria',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Segovia',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Sevilla',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Soria',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Tarragona',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Teruel',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Toledo',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Valencia',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Valladolid',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Vizcaya',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Zamora',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Zaragoza',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Ceuta',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Melilla',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 1,
            ),

            //Provincias Inglesas (Counties)

            52 => 
            array (
                'id' => 53,
                'name' => 'Bedfordshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Berkshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Bristol',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Buckinghamshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Cambridgeshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Cheshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Cornwall',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Cumbria',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Derbyshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Devon',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Dorset',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Durham',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'East Sussex',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Essex',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Gloucestershire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Greater London',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Greater Manchester',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Hampshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Herefordshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Hertfordshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Isle of Wight',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Kent',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Lancashire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Leicestershire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Lincolnshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'City of London',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Merseyside',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Norfolk',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Northamptonshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Northumberland',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'North Yorkshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Nottinghamshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Oxfordshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Rutland',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Shropshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Somerset',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'South Yorkshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Staffordshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Suffolk',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Surrey',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Tyne and Wear',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Warwickshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'West Midlands',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'West Sussex',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'West Yorkshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Wiltshire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Worcestershire',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Yorkshire, East Riding',
                'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem',
                'country_id' => 2,
            ),
        ));
        
        
    }
}