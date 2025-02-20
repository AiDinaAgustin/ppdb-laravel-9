@extends('layouts.main')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>Selamat Datang di Yayasan Al-Muhsinin</h1>
            <h2>Raih masa depan gemilang dan penuh dengan haparan cerah disini</h2>
            <a href="/daftar" class="btn-get-started scrollto">Daftar Sekarang</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('assets/img/kepala-sekolah.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <p>
                            Yayasan Al-Muhsinin didirikan pada tahun 2022 untuk memenuhi kebutuhan akademik yang semakin
                            berkembang di Modernland, yang berada di atas tanah seluas 330 hektar di kawasan metropolitan,
                            Tangerang. Dengan tujuan untuk mendidik murid-murid sebagai harapan bagi bangsa.
                        </p>
                        <p><i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, similique vel? Obcaecati ea velit nisi illo earum harum, est molestias! Laboriosam, sunt. Beatae quo earum tempore dolorem! Iusto omnis non, adipisci, et deserunt eligendi, provident voluptates quaerat explicabo maxime aperiam in esse. Odit dignissimos veniam minima nesciunt ex dolores incidunt, asperiores doloremque? Atque sed consequuntur iste, dolorem quasi delectus minima deleniti accusantium, neque commodi error voluptas facilis nemo eveniet. Eos ad quae excepturi! Quod fuga eveniet sint magnam nesciunt laboriosam quos doloremque ut magni quae non, eum in doloribus necessitatibus dicta totam blanditiis cum voluptates dolorum fugiat? Incidunt, placeat deleniti.
                            </i></p>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique debitis expedita vero ullam nostrum, blanditiis quisquam in suscipit aspernatur officia officiis ex aliquid hic. Maxime cupiditate quo laborum quae asperiores.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1432" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Murid</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="52" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Guru & Staff</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="13" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Jurusan</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="39" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Partnership</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="content">
                            <h3>Kenapa Memilih Sekolah Ini?</h3>

                            <p>
                                Lebih dari 1,750 siswa-siswi dengan beragam latar belakang datang ke Yayasan Al-Muhsinin
                                mencari sebuah lembaga pendidikan formal yang mempunyai pengakuan luar biasa baik secara
                                prestasi akademik, proses belajar mengajar serta suasana belajar yang menyenangkan, tenaga
                                pengajar dan staff yang kompeten, kesempatan untuk meraih beasiswa, dan penerapan kurikulum
                                nasional di Indonesia tetapi juga kompeten secara global.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Lebih Menekankan Kepada Pendidikan Karakter</h4>
                                        <p>Memungkinkan Siswa Lebih Aktif, Inovatif dan Kreatif, Lebih Responsif Terhadap
                                            Fenomena Sosial yang Ada, Proses Penilaian Dilakukan Dari Semua Aspek, Lembaga
                                            Memperoleh Pendampingan dari Pusat.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Ruang Kelas</h4>
                                        <p>Ruang kelas dilengkapi pendingin ruangan (AC) dan didesain agar anak merasa
                                            nyaman dan dapat berinteraksi dengan guru serta teman-temannya dengan leluasa.
                                            Laboratorium Komputer, Laboratorium IPA,Ruang Kesehatan, Kantin Sekolah,
                                            Perpustakaan & Audio visual, Mushola, Lapangan Olahraga.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Prestasi Yang Didapatkan</h4>
                                        <p>Juara 1 Three On Three DSFM Competition 2011 <br>
                                            Juara 1 Kejuaraan Silat Antar Pelajar <br>
                                            Juara 1 Lomba Debat Bahasa Inggris <br>
                                            Juara I Vocal Group Art Competition Tahun 2012 <br>
                                            Juara II Futsal UNPI FUTSAL LEAGUE 2012 <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Fasilitas/ Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Fasilitas</h2>
                            <p>Fasilitas sekolah peranannya sangat penting dalam mendukung kegiatan belajar mengajar
                                (KBM).Fasilitas belajar merupakan sarana dan prasarana pembelajaran. Prasarana adalah alat
                                yang secara tidak langsung membantu untuk mencapai tujuan dalam pendidikan,sementara sarana
                                artinya alat langsung untuk mencapai tujuan pendidikan, Sarana dan Prasarana di SMA Nusa
                                Bangsa sangat lengkat seperti lokasi, gedung sekolah, lapangan olahraga, smart class, papan
                                tulis, buku, laboratorium, perpustakaan dan lain-lain.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4><a href="">Ruang Kelas Ber-AC</a></h4>
                                    <p>Di Yayasan Al-Muhsinin semua kelas sudah ber-AC, nyaman, bersih dan fasilitas lengkap</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="icon"><i class="bx bx-book"></i></div>
                                    <h4><a href="">Perpustakaan</a></h4>
                                    <p>Kami memiliki banyak koleksi buku dari berbagai genre</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="icon"><i class="bx bx-laptop"></i></div>
                                    <h4><a href="">15 Laboratorium</a></h4>
                                    <p>Di SMA Nusa Bangsa Memiliki 15 Laboratorium untuk menunjang pendidikan siswa, mulai
                                        dari 10 Lab Komputer, 2 Lab Bahasa, dan 3 Lab IPA</p>

                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="icon"><i class="bx bx-universal-access"></i></div>
                                    <h4><a href="">Sarana Olahraga</a></h4>
                                    <p>Kami memiliki berbagai peralatan dan lapangan olahraga</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Prestasi/ Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-left">
                    <h2>Prestasi</h2>
                    <p>Bisa meraih prestasi terbaik di bidang akademis maupun non akademis merupakan kebanggan tersendiri
                        bagi setiap siswa. Terdapat macam-macam prestasi akademis maupun non akademis yang dapat diraih
                        siswa sesuai dengan minat dan bakat mereka. Melalui pembinaan yang tepat maka bukan tidak mungkin
                        seorang siswa akan mampu mencapai prestasi terbaiknya.</p>
                    <p>Dibawah ini adalah bukti dokumentasi prestasi yang didapatkan oleh sekolah kami :</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Akademik</li>
                            <li data-filter=".filter-card">Non Akademik</li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Juara 3</h4>
                                <p class="text-center">Juara 3 Olimpiade Matematika Tingkat Provinsi Tahun 2023</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Juara 3 Olimpiade Matematika"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Gold Mendal</h4>
                                <p class="text-center">Mendali Emas Olimpiade Fisika Tingkat Provinsi Tahun 2023</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Mendali Emas Olimpiade Fisika Tingkat Provinsi Tahun 2023"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Juara 2</h4>
                                <p class="text-center">Juara 2 Badminthon Pekan Olahraga Daerah Tingakat Kab. Tahun 2023</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Juara 2 Badminthon Pekan Olahraga Daerah Tingakat Kab. Tahun 2023"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Juara 1</h4>
                                <p>Juara 1 Lomba MTQ FAI Education Fair 2023</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Juara 1 Lomba MTQ FAI Education Fair 2023"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Juara 1</h4>
                                <p>Juara 1 Lomba Voli STHIP CUP 2023</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Juara 1 Lomba Voli STHIP CUP 2023"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Juara 2</h4>
                                <p class="text-center">Juara 2 Basket Pekan Olahraga Daerah Tingakat Kab. Tahun 2023</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Juara 2 Basket Pekan Olahraga Daerah Tingakat Kab. Tahun 2023"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> -->

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Guru/ Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Guru & Staff</h2>
                            <p>Salah satu hal penting untuk bisa meningkatkan kualitas pendidikan sebuah negara adalah
                                kualitas gurunya. Mengapa? Guru adalah fasilitator pendidikan. Guru menjadi garda terdepan
                                dalam meningkatkan kualitas pendidikan. Guru lah yang memberikan pendidikan kepada
                                siswa-siswanya. Oleh karena itu, SMA Nusa Bangsa semaksimal mungkin untuk dapat menghadirkan
                                guru-guru terbaik dalam bidang nya</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Sandhika Susilo</h4>
                                        <span>Guru TIK</span>
                                        <p>"Barang siapa bersungguh-sungguh, maka dia akan mendapatkan kesuksesan."</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Sarah Julianti</h4>
                                        <span>Guru Biologi</span>
                                        <p>"Lakukan yang terbaik di semua kesempatan yang kamu miliki."</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Ariel Nur Rohman</h4>
                                        <span>Guru MTK</span>
                                        <p>"Masa depan adalah milik mereka yang menyiapkan hari ini."</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Amanda Nur Baeti</h4>
                                        <span>Guru AKuntansi</span>
                                        <p>"Kegagalan adalah guru terbaikmu. Belajarlah darinya."</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="section-title">
                            <h2>Kontak</h2>
                            <p>Untuk info lebih lanjut mengenai pendaftaran peserta didik baru, kerjasama atau yang lain nya
                                bisa menghubungi kontak yang tercantum atau bisa langsung ke Yayasan Al-Muhsinin</p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <iframe style="border:0; width: 100%; height: 270px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.24871986927!2d107.02045559999999!3d-6.9799512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6845c56cd2c123%3A0x30a95b63aca6db68!2sPondok%20Pesantren%20Al%20Muhsinin%20Gegerbitung!5e0!3m2!1sid!2sid!4v1740087700089!5m2!1sid!2sid"
                            frameborder="0" allowfullscreen></iframe>
                        <div class="info mt-4">
                            <i class="icofont-google-map"></i>
                            <h4>Lokasi:</h4>
                            <p>Yayasan Al-Muhsinin</p>
                            <p>Kp. Munjul Rt.02/06, Gegerbitung, Kec. Gegerbitung, Kabupaten Sukabumi, Jawa Barat 43197</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-4">
                                <div class="info">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>admin@smanusabangsa.sch.id</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info w-100 mt-4">
                                    <i class="icofont-phone"></i>
                                    <h4>Call:</h4>
                                    <p>0858-4628-8997</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->


    </main><!-- End #main -->
@endsection
