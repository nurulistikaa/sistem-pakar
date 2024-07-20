<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        // Referensi Jurnal International DSM-5
        $data = [
            [
                'kode_gejala' => 'G01',
                'nama_gejala' => 'Mengalami suasana hati sedih hampir setiap hari selama dua minggu terakhir',
            ],
            [
                'kode_gejala' => 'G02',
                'nama_gejala' => 'Kehilangan minat dalam semua aktivitas selama dua minggu terakhir',
            ],
            [
                'kode_gejala' => 'G03',
                'nama_gejala' => 'Berat badan berubah signifikan dalam dua minggu terakhir',
            ],
            [
                'kode_gejala' => 'G04',
                'nama_gejala' => 'Mengalami kesulitan tidur atau tidur berlebihan selama dua minggu terakhir',
            ],
            [
                'kode_gejala' => 'G05',
                'nama_gejala' => 'Merasa gelisah akan suatu hal selama dua minggu terakhir',
            ],
            [
                'kode_gejala' => 'G06',
                'nama_gejala' => 'Mudah lelah atau kehilangan energi hampir setiap hari selama dua minggu terakhir',
            ],
            [
                'kode_gejala' => 'G07',
                'nama_gejala' => 'Merasa kurang percaya diri dan bersalah hampir setiap hari selama dua minggu terakhir',
            ],
            [
                'kode_gejala' => 'G08',
                'nama_gejala' => 'Kesulitan berkonsentrasi hampir setiap hari selama dua minggu terakhir',
            ],
            [
                'kode_gejala' => 'G09',
                'nama_gejala' => 'Sering memikirkan untuk mengakhiri hidup dalam dua minggu terakhir',
            ],
            [
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Merasa diri sendiri tidak berharga atau tidak memiliki nilai selama dua minggu terakhir',
            ],
            [
                'kode_gejala' => 'G11',
                'nama_gejala' => 'Kesulitan dalam berinteraksi sosial, pekerjaan, atau kegiatan penting lainnya dengan orang lain',
            ],
            [
                'kode_gejala' => 'G12',
                'nama_gejala' => 'Mengalami perubahan napsu makan yang buruk atau berlebihan selama dua minggu terakhir',
            ],
            [
                'kode_gejala' => 'G13',
                'nama_gejala' => 'Merasa tertekan akan suatu hal selama dua tahun terakhir',
            ],
            [
                'kode_gejala' => 'G14',
                'nama_gejala' => 'Mengalami perubahan napsu makan yang buruk atau berlebihan selama dua tahun terakhir',
            ],
            [
                'kode_gejala' => 'G15',
                'nama_gejala' => 'Mengalami kesulitan tidur atau tidur berlebihan selama dua tahun terakhir',
            ],
            [
                'kode_gejala' => 'G16',
                'nama_gejala' => 'Merasa kelelahan dalam menjalani aktivitas sehari-hari selama dua tahun terakhir',
            ],
            [
                'kode_gejala' => 'G17',
                'nama_gejala' => 'Merasa kurang percaya diri hampir setiap hari selama dua tahun terakhir',
            ],
            [
                'kode_gejala' => 'G18',
                'nama_gejala' => 'Kesulitan berkonsentrasi hampir setiap hari selama dua tahun terakhir',
            ],
            [
                'kode_gejala' => 'G19',
                'nama_gejala' => 'Merasa putus asa terhadap suatu hal yang sedang dikejar selama dua tahun terakhir',
            ],
            [
                'kode_gejala' => 'G20',
                'nama_gejala' => 'Merasa tidak pernah bahagia dalam dua tahun terakhir',
            ],
        ];

        $this->db->table('tbl_gejala')->insertBatch($data);
    }
}
