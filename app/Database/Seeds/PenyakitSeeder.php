<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_penyakit' => 'P01',
                'nama_penyakit' => 'Mild Major Depressive Disorder (Ringan)',
                'deskripsi_penyakit' => 'Mild Major Depressive Disorder mengacu pada tingkat depresi mayor yang memiliki gejala ringan. Pada tingkat ini, gejala depresi biasanya memengaruhi kehidupan sehari-hari, namun individu masih dapat menjalani aktivitas sehari-hari dengan tingkat fungsionalitas yang relatif normal. Dukungan sosial dari keluarga dan teman-teman dapat memainkan peran penting dalam membantu individu mengatasi tantangan yang mereka hadapi.',
                'solusi_penyakit' => 'Solusi penanganan untuk Mild Major Depressive Disorder meliputi terapi kognitif perilaku (CBT), terapi dukungan, dan perubahan gaya hidup sehat. Terapi kognitif membantu mengubah pola pikir negatif menjadi lebih positif. Terapi dukungan, menyediakan wadah untuk berbagi pengalaman dan mendapatkan dukungan emosional dari orang-orang terdekat. Selain itu, menjaga pola tidur, menjaga pola makan sehat, dan berpartisipasi dalam kegiatan fisik juga membantu meningkatkan kesejahteraan mental dan mengurangi gejala depresi.',
            ],
            [
                'kode_penyakit' => 'P02',
                'nama_penyakit' => 'Mild Persistent Depressive Disorder (Dysthymia Ringan)',
                'deskripsi_penyakit' => 'Mild Persistent Depressive Disorder mengacu pada tingkat Dysthymia yang memiliki gejala ringan. Pada tingkat ini, gejala depresi terjadi secara terus-menerus selama setidaknya dua tahun, tetapi intensitas gejalanya cenderung lebih ringan dan dapat dikelola dengan lebih baik oleh individu. Walaupun demikian, individu dengan dysthymia ringan masih bisa mengalami penurunan suasana hati yang berdampak pada kualitas hidup mereka.',
                'solusi_penyakit' => 'Solusi penanganan untuk Mild Persistent Depressive Disorder meliputi terapi kognitif perilaku (CBT), dukungan sosial, dan perubahan gaya hidup sehat. Terapi kognitif membantu mengubah pola pikir negatif menjadi lebih positif. Dukungan sosial dari keluarga, teman, atau kelompok dapat memberikan dukungan emosional dan praktis dalam menghadapi gejala dysthymia. Perubahan gaya hidup sehat, seperti menjaga pola tidur yang teratur, menerapkan kegiatan fisik yang memadai, dan mengelola stres juga penting untuk menangani gejala dysthymia pada tingkat yang ringan.',
            ],
            [
                'kode_penyakit' => 'P03',
                'nama_penyakit' => 'Moderate Major Depressive Disorder (Sedang)',
                'deskripsi_penyakit' => 'Moderate Major Depressive Disorder mengacu pada tingkat depresi mayor yang memiliki gejala sedang. Pada tingkat ini, gejala depresi dapat lebih mengganggu kehidupan sehari-hari individu dan mempengaruhi fungsionalitas dalam menjaga pekerjaan ataupun hubungan. Individu dengan gangguan ini mungkin mengalami kesulitan dalam menjalankan aktivitas sehari-hari, seperti bangun tidur, makan, atau bahkan merawat diri sendiri.',
                'solusi_penyakit' => 'Solusi penanganan untuk Moderate Major Depressive Disorder melibatkan pendekatan terapi kombinasi yang mencakup terapi kognitif perilaku (CBT), terapi interpersonal, dan penggunaan obat antidepresan yang diresepkan oleh dokter. Terapi kognitif membantu mengubah pola pikir negatif menjadi lebih positif. Terapi interpersonal fokus pada perbaikan hubungan dan interaksi sosial. Penggunaan obat antidepresan dapat membantu mengurangi gejala pada tingkat yang sedang.',
            ],
            [
                'kode_penyakit' => 'P04',
                'nama_penyakit' => 'Moderate Persistent Depressive Disorder (Dysthymia Sedang)',
                'deskripsi_penyakit' => 'Moderate Persistent Depressive Disorder mengacu pada tingkat Dysthymia yang memiliki gejala sedang. Pada tingkat ini, gejala depresi dapat lebih mengganggu dan mempengaruhi kehidupan sehari-hari individu secara signifikan dalam jangka waktu setidaknya dua tahun. Dysthymia sedang tidak begitu parah seperti depresi mayor, tetapi gejalanya lebih persisten dan dapat mengganggu fungsional seorang individu.',
                'solusi_penyakit' => 'Solusi penanganan untuk Moderate Persistent Depressive Disorder meliputi terapi kognitif perilaku (CBT), konseling psikoterapi, dan dukungan sosial. Terapi kognitif membantu mengubah pola pikir negatif menjadi lebih positif. Konseling psikoterapi dapat memberikan wadah untuk mengeksplorasi penyebab yang mendasari dysthymia serta mengembangkan strategi penanganan yang efektif. Dukungan sosial dari keluarga, teman, atau kelompok juga penting dalam membantu individu mengatasi gejala dan meningkatkan kesejahteraan mental dalam menangani gejala dysthymia pada tingkat yang sedang.',
            ],
            [
                'kode_penyakit' => 'P05',
                'nama_penyakit' => 'Severe Major Depressive Disorder (Parah)',
                'deskripsi_penyakit' => 'Severe Major Depressive Disorder adalah tingkat depresi mayor yang memiliki gejala yang sangat parah dan mengganggu. Pada tingkat ini, gejala depresi menyebabkan disfungsi yang signifikan individu dalam semua aspek kehidupan. Mereka mungkin mengalami kesulitan dalam menjalankan aktivitas sehari hari, berinteraksi dengan orang lain, atau bahkan memiliki pemikiran atau perilaku yang berpotensi merugikan diri sendiri.',
                'solusi_penyakit' => 'Solusi penanganan untuk Severe Major Depressive Disorder yang parah meliputi kombinasi konseling terapi psikologis, pengobatan dengan obat antidepresan yang diresepkan oleh dokter, dan dukungan sosial yang kuat. Terapi kognitif perilaku dan terapi interpersonal dapat membantu individu mengatasi gejala depresi dan mengembangkan strategi penanganan yang efektif. Penting juga untuk melibatkan keluarga dan teman-teman dalam proses pemulihan dan mengurangi risiko perilaku yang merugikan diri sendiri melalui perawatan yang tepat dan pengawasan yang ketat.',
            ],
            [
                'kode_penyakit' => 'P06',
                'nama_penyakit' => 'Severe Persistent Depressive Disorder (Dysthymia Parah)',
                'deskripsi_penyakit' => 'Severe Persistent Depressive Disorder mengacu pada tingkat Dysthymia yang memiliki gejala sangat parah. Pada tingkat ini, gejala depresi terjadi secara terus-menerus dan berlangsung dalam jangka waktu yang sangat panjang. Gangguan ini sangat mengganggu kehidupan sehari-hari, hubungan, dan pekerjaan. Diperlukan bantuan medis atau ahli dibidangnya untuk perawatan yang intensif dan berkelanjutan.',
                'solusi_penyakit' => 'Solusi penanganan untuk Severe Persistent Depressive Disorder yang parah membutuhkan penanganan yang tepat, seperti konseling psikoterapi, terapi obat, atau terapi gabungan. Dukungan sosial dan pengelolaan stres yang sehat juga penting. Perubahan gaya hidup sehat, seperti tidur yang cukup, pola makan sehat, dan kegiatan fisik yang memadai, juga dapat membantu menangani gejala dysthymia pada tingkat yang parah. Konsultasikan dengan profesional medis atau psikolog untuk mendapatkan penanganan yang sesuai dengan kebutuhan individu.',
            ],
        ];

        $this->db->table('tbl_penyakit')->insertBatch($data);
    }
}
