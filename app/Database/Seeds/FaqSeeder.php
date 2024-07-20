<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'pertanyaan' => 'Apa itu depresi?',
                'jawaban' => 'Depresi adalah suatu perasaan sendu atau sedih yang biasanya disertai 
                dengan melambatnya fungsi dan aktivitas tubuh. Kondisi ini tidak hanya mempengaruhi 
                suasana hati seseorang, tetapi juga memengaruhi pikiran, perilaku, dan kesehatan fisik. 
                Gejalanya bisa bervariasi dari ringan hingga berat sesuai dengan apa yang penderita rasakan.',
            ],
            [
                'pertanyaan' => 'Apa penyebab seseorang mengalami depresi?',
                'jawaban' => 'Mengatasi depresi melibatkan kombinasi pengobatan, seperti terapi psikologis dan penggunaan obat-obatan, serta perubahan gaya hidup yang sehat, dukungan sosial, dan kegiatan yang menyenangkan.',
            ],
            [
                'pertanyaan' => 'Bagaimana cara mengetahui seseorang mengalami depresi?',
                'jawaban' => 'Ya, depresi dapat disembuhkan sepenuhnya dengan perawatan yang tepat, seperti terapi psikologis dan pengobatan yang diresepkan oleh profesional kesehatan.',
            ],
            [
                'pertanyaan' => 'Bagaimana cara mengatasi depresi?',
                'jawaban' => 'Depresi berbeda dengan sedih biasa karena gejalanya berlangsung dalam jangka waktu yang lebih lama dan lebih parah, mempengaruhi fungsi sehari-hari, dan tidak bisa hilang hanya dengan berusaha memperbaiki suasana hati.',
            ],
            [
                'pertanyaan' => 'Kapan sebaiknya mencari bantuan professional saat mengalami depresi?',
                'jawaban' => 'Sebaiknya Anda mencari bantuan profesional segera jika mengalami gejala depresi yang mengganggu kehidupan sehari-hari Anda, berlangsung lebih dari beberapa minggu, atau jika ada pemikiran atau rencana bunuh diri.',
            ],
        ];

        // Insert data ke dalam tabel tbl_faq
        $this->db->table('tbl_faq')->insertBatch($data);
    }
}