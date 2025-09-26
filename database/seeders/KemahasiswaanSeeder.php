<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kemahasiswaan;


class KemahasiswaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kemahasisswaan = [
            [
                'keyword'               => 'Beasiswa Fakultas Bahasa Asing UNIBA Madura',
                'image_header'          => 'default.JPG',
                'category_kemahasiswaan_id'   => '1',
            ],
            [
                'keyword'               => 'Prestasi Mahasiswa Fakultas Bahasa Asing UNIBA Madura',
                'image_header'          => 'default.JPG',
                'category_kemahasiswaan_id'   => '2',
            ],
            [
                'keyword'               => 'Ormawa Fakultas Bahasa Asing UNIBA Madura',
                'image_header'          => 'default.JPG',
                'category_kemahasiswaan_id'   => '3',
            ],
            [
                'keyword'               => 'Pendaftaran UNIBA Madura',
                'image_header'          => 'default.JPG',
                'category_kemahasiswaan_id'   => '4',
            ],
        ];

        foreach ($kemahasisswaan as $row) {
            Kemahasiswaan::create($row);
        }
    }
}
