<?= $this->extend('layout/homepage') ?>

<?= $this->section('contentHome') ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h5 class="logo me-auto" style="font-size: 20px;">
            <img src="public/img/sipadem.png" class="mb-1" style="height: 28px; width: 28px;" alt="">
            <a href="#home">SIPADEM </a>
        </h5>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#tentang">Tentang</a></li>
                <li><a class="nav-link scrollto" href="#informasi">Informasi</a></li>
                <li><a class="nav-link scrollto" href="#faq">Faq</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                <li class="dropdown"><a href="#"><span>Daftar</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="<?= base_url('register') ?>">Daftar Akun</a></li>
                      <li><a href="<?= base_url('forgot-password') ?>">Lupa Password</a></li>
                  </ul>
              </li>
              <li><a class="getstarted scrollto" href="<?= base_url('login-mahasiswa') ?>">Sign-In</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

  </div>
</header>
<!-- End Header -->

<!-- ======= Home Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up" data-aos-delay="200">
            <h1>SIPADEM</h1>
            <h2 class="mb-4">Sistem Pakar <strong style="color: #30cfda;">Diagnosa Depresi</strong>
                Mahasiswa Semester Akhir</h2>
            <p>Bergabunglah bersama kami dan dapatkan diagnosa yang akurat dalam menangani depresi Anda</p>
            <div class="d-flex justify-content-center justify-content-lg-start mt-3">
                <a href="<?= base_url ('login-mahasiswa') ?>" class="btn-get-started scrollto">Cek Tingkat Depresimu
                Sekarang</a>
                <a class="btn-watch-video" id="liveToastBtn"><i class="fas fa-heartbeat"></i><span></span></a>
            </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="public/img/sipadem.png" class="img-fluid animated"
            style="height: 240px; width: 240px; margin-bottom: 50px; margin-top: 10px;">
        </div>
        </div>
    </div>
</section>
<!-- End Home -->

<main id="main">

    <!-- ======= Tentang Section ======= -->
    <section id="tentang" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tentang</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6 text-start">
                    <p>
                    SIPADEM adalah sistem pakar diagnosa depresi pada mahasiswa semester akhir. 
                    Website ini merupakan solusi inovatif untuk membantu mahasiswa dalam mendiagnosa 
                    secara dini depresi yang sedang dialami. Dengan menggunakan basis pengetahuan 
                    yang dikembangkan oleh pakar di bidang psikologi, website ini diharapkan dapat 
                    memberikan hasil diagnosa yang akurat dan penanganan yang tepat kepada mahasiswa 
                    yang membutuhkan saran terkait depresi yang diderita.
                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <ul>
                        <li><i class="ri-check-double-line"></i> Website ini didasarkan pada basis pengetahuan 
                        yang didapatkan dari  pakar ahli di bidang psikologi.</li>
                        <li><i class="ri-check-double-line"></i> Website ini dapat mendiagnosa tingkat depresi 
                        mahasiswa semester akhir berdasarkan gejala-gejala yang sudah ditentukan.</li>
                        <li><i class="ri-check-double-line"></i> Website ini menggunakan metode Certainty Factor (CF) 
                        untuk menghitung tingkat kepastian terhadap diagnosa yang diberikan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Informasi Section ======= -->
    <section id="informasi" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Informasi</h2>
                <p> Dalam Ilmu kesehatan mental khususnya penyakit depresi memiliki beberapa tingkatan. 
                    Masing-masing tingkatan tersebut mempunyai level keparahan yang berbeda-beda. 
                    Berikut adalah tingkatan depresi yang terdapat pada website ini.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-plus-medical" style="color: #54DA5D;"></i></div>
                    <h4><a href="#informasi">Mild Major Depressive Disorder </a></h4>
                    <p> Tingkat depresi mayor yang memiliki gejala ringan. Pada tingkat ini, 
                        gejala depresi biasanya memengaruhi kehidupan sehari-hari, namun individu 
                        masih dapat menjalani aktivitas sehari-hari dengan tingkat fungsionalitas 
                        yang relatif normal. Dukungan sosial dari keluarga dan teman-teman dapat 
                        memainkan peran penting dalam membantu individu mengatasi tantangan yang mereka hadapi.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
                <div class="icon"><i class="bx bx bx-plus-medical" style="color: #E6E44C;"></i></div>
                <h4><a href="#informasi">Moderate Major Depressive Disorder</a></h4>
                <p> Tingkat depresi mayor yang memiliki gejala sedang. Pada tingkat ini, 
                    gejala depresi dapat lebih mengganggu kehidupan sehari-hari individu 
                    dan mempengaruhi fungsionalitas dalam menjaga pekerjaan ataupun hubungan.
                    Individu dengan gangguan ini mungkin mengalami kesulitan dalam menjalankan 
                    aktivitas sehari-hari, seperti bangun tidur, makan, atau bahkan merawat diri sendiri. 
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
        data-aos-delay="400">
        <div class="icon-box">
            <div class="icon"><i class="bx bx-plus-medical" style="color: #DD3A3A;"></i></div>
            <h4><a href="#informasi">Severe Major Depressive Disorder</a></h4>
            <p> Tingkat depresi mayor yang memiliki gejala yang sangat parah dan mengganggu. 
                Pada tingkat ini, gejala depresi menyebabkan disfungsi yang signifikan individu 
                dalam semua aspek kehidupan. Mereka mungkin mengalami kesulitan dalam menjalankan 
                aktivitas sehari hari, berinteraksi dengan orang lain, atau bahkan memiliki pemikiran 
                atau perilaku yang berpotensi merugikan diri sendiri.
            </p>
        </div>
    </div>
</div>

<div class="row bagian-dua">
    <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
    data-aos-delay="400">
    <div class="icon-box">
        <div class="icon"><i class="bx bx-plus-medical" style="color: #54DA5D;"></i></div>
        <h4><a href="#informasi">Mild Persistent Depressive Disorder (Dysthymia Ringan)</a></h4>
        <p> Tingkat Dysthymia yang memiliki gejala ringan. Pada tingkat ini, gejala depresi terjadi secara 
            terus-menerus selama setidaknya dua tahun, tetapi intensitas gejalanya cenderung 
            lebih ringan dan dapat dikelola dengan lebih baik oleh individu. Walaupun demikian, 
            individu dengan dysthymia ringan masih bisa mengalami penurunan suasana hati yang berdampak 
            pada kualitas hidup mereka.
        </p>
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
data-aos-delay="400">
<div class="icon-box">
    <div class="icon"><i class="bx bx-plus-medical" style="color: #E6E44C;"></i></div>
    <h4><a href="#informasi">Moderate Persistent Depressive Disorder (Dysthymia Sedang) </a></h4>
    <p> Tingkat Dysthymia yang memiliki gejala sedang. Pada tingkat ini, gejala depresi dapat lebih 
        mengganggu dan mempengaruhi kehidupan sehari-hari individu secara signifikan dalam jangka 
        waktu setidaknya dua tahun. Dysthymia sedang tidak begitu parah seperti depresi mayor, 
        tetapi gejalanya lebih persisten dan dapat mengganggu fungsional seorang individu.
    </p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="400">
    <div class="icon-box">
    <div class="icon">
        <i class="bx bx-plus-medical" style="color: #DD3A3A;"></i>
    </div>
    <h4><a href="#informasi">Severe Persistent Depressive Disorder (Dysthymia Parah)</a></h4>
    <p> Tingkat Dysthymia yang memiliki gejala sangat parah. Pada tingkat ini, gejala depresi 
        terjadi secara terus-menerus dan berlangsung dalam jangka waktu yang sangat panjang. 
        Gangguan ini sangat mengganggu kehidupan sehari-hari, hubungan, dan pekerjaan. 
        Diperlukan bantuan medis atau ahli dibidangnya untuk perawatan yang intensif dan berkelanjutan. 
    </p>
</div>
</div>
</div>
</div>
</section>
<!-- End Informasi Section -->

<!-- ======= FAQ Section ======= -->
<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>FAQ</h2>
            <p>Beberapa pertanyaan yang dapat membantu pengguna terkait depresi yang dialami.</p>
        </div>

        <div class="faq-list">
            <ul>
                <?php foreach ($faq as $row) : ?>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                        data-bs-target="#faq-list-<?= $row->id_faq ?>"> <?= $row->pertanyaan ?> <i
                        class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-<?= $row->id_faq ?>" class="collapse" data-bs-parent=".faq-list">
                            <p style="margin-left: 30px;""><?= $row->jawaban ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</section>
<!-- End FAQ Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Kontak</h2>
      <p>Informasi kontak SIPADEM yang dapat dihubungi. Berikan kritik dan saran anda terhadap Website SIPADEM.</p>
  </div>

  <div class="row">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Lokasi:</h4>
            <p>Jalan Krakatau IV No.15, Karangtampel, Semarang</p>
        </div>

        <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>nurulistika92@gmail.com</p>
        </div>

        <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+6289637382687</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1810234074196!2d110.43571967371209!3d-6.98794646843151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708cbb2d7b62b5%3A0xc95c59b751ae0869!2sJl.%20Krakatau%20IV%20No.15%2C%20Karangtempel%2C%20Kec.%20Semarang%20Tim.%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050232!5e0!3m2!1sid!2sid!4v1720822640386!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>

<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
    <form action="<?= base_url('contact/sendEmail') ?>" method="post" role="form" class="php-email-form">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="namaLengkap">Nama Lengkap</label>
                <input type="text" name="namaLengkap" class="form-control" id="namaLengkap" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
                <p class="email-note text-danger" style="font-size: 12px;">*Anda akan menerima email balasan</p>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="phone">No Handphone</label>
                <input type="number" name="phone" class="form-control" id="phone" required>
            </div>
            <div class="form-group col-md-6">
                <label for="judul">Judul Pesan</label>
                <input type="text" class="form-control" name="judul" id="judul" required>
            </div>
        </div>
        <div class="form-group">
            <label for="isi">Isi Pesan</label>
            <textarea class="form-control" name="isi" rows="10" required></textarea>
        </div>
        <div class="my-3">
            <div class="loading">Loading</div>
            <div class="alert alert-success error-message"></div>
            <div class="alert alert-success sent-message"></div>
        </div>
        <div class="text-center">
            <button type="submit" id="kirimBtn">Kirim Pesan</button>
        </div>
    </form>
</div>
</div>
</div>
</section><!-- End Contact Section -->

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="public/img/sipadem.png" width="17px" height="17px" class="rounded me-2" alt="...">
            <strong class="me-auto">Jumlah Data Rekam Diagnosa</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-center">
            <h3 color="#8b0000" id="dataCount"><?= count($laporan) ?></h3>Diagosasis sudah dilakukan oleh berbagai pengguna
        </div>
    </div>
</div>

<script>
    const toastTrigger = document.getElementById('liveToastBtn');
    const toastLiveExample = document.getElementById('liveToast');
    const dataCountElement = document.getElementById('dataCount');
    const maxDataCount = <?php echo count($laporan); ?>;
    const animationDuration = 5000; // Durasi animasi dalam milidetik (ms)
    const updateInterval = 100; // Interval waktu antara dua perubahan nilai (ms)

    if (toastTrigger) {
        toastTrigger.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample);
            toast.show();
            animateDataCount();
        });
    }

    function animateDataCount() {
        let currentValue = 0;
        const increment = Math.ceil(maxDataCount / (animationDuration / updateInterval));

        const interval = setInterval(() => {
            currentValue += increment;
            if (currentValue >= maxDataCount) {
                currentValue = maxDataCount;
                clearInterval(interval);
            }
            dataCountElement.textContent = currentValue;
        }, updateInterval);
    }
</script>


</main><!-- End #main -->

<?= $this->endSection() ?>