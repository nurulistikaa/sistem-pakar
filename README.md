SIPADEM (Sistem Pakar Diagnosa Depresi Mahasiswa Semester Akhir)

SIPADEM adalah sistem pakar untuk mendiagnosa depresi pada mahasiswa semester akhir dengan menggunakan metode Certainty Factor. 

## Framework dan Library yang Digunakan
- [Codeigniter 4](https://codeigniter.com/)
- [Bootstrap 5](https://getbootstrap.com/)
- [Template Dashboard by SB-Admin](https://startbootstrap.com/theme/sb-admin-2)
- [Template Landing by Arsha](https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/)
- PHPMailer
- Google Client
- DOMPdf
- PHPOffice

## Bahasa Pemrograman yang Digunakan
- PHP
- HTML
- CSS
- Javascript

## Run Project
### Persyaratan
- [Composer](https://getcomposer.org/)
- [XAMPP](https://www.apachefriends.org/download.html) atau sejenisnya dengan versi php 7.4++ dengan mengaktifkan ``intl`` pada ``xampp\config\php.ini`` hapus tanda `` ; ``

### Instalasi Project
- Unduh dan import project ini ke dalam direktori proyek (htdocs).
- konfigurasi file ``env example`` menjadi ``.env`` lalu ubah nama database.
- Ubah url yang terletak pada ``app/config/App.php`` lalu ubah bagian ``public string $baseURL`` sesuai dengan alamat project di file direktori.
- Install dependencies yang diperlukan dengan cara menjalankan perintah berikut di terminal:
```code
composer install
```
- buat database pada phpmyadmin di ``http://localhost:phpmyadmin`` , sesuaikan nama db tersebut dengan nama db yang tertera pada ``.env``
- Jalankan migration database pada terminal:
```code
php spark migrate --all
```
- Gunakan data rujukan diagnosa dari sistem ini, silahkan pakai seeder yang tersedia:
```code
php spark db:seed --all
```
- Masukkan nama seeder satu persatu dengan urutan berikut
```code
Seeder name : AdminSeeder
Seeder name : MahasiswaSeeder
Seeder name : PenyakitSeeder
Seeder name : FaqSeeder
Seeder name : GejalaSeeder
Seeder name : CFSeeder
Seeder name : AturanSeeder
```
- Jika sudah silahkan buka web serve dengan alamat url yang sudah ditentukan sebelumnya.
- Data login admin dapat dilihat di ``app/Database/Seeds/AdminSeeder``
- Data login mahasiswa dapat dilihat di ``app/Database/Seeds/MahasiswaSeeder``