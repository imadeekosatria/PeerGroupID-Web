<?= $this->extend('/Apps/header-footer');?>
<?= $this->section('content')?>
    <main class="l-main">
        <!--Home-->
        <section class="home">
            <div class="home__container bd-grid">
                <div class="content">
                    <h2 class="title">Find Your Skill</h2>
                    <p class="desc">Temukan potensimu, fokus pada kelebihanmu, 
                        jadilah unik dan berbeda versi dirimu bersama 
                        Peer Group ID ✨</p>
                    <a href="#about" class="button-link kepoin">Kepoin Yuk <i class='bx bx-arrow-back bx-rotate-270' ></i></a>
                </div>
                <div class="home__img">
                    <img class="front" src="/assets/images/FAQ.svg" alt="">
                </div>
            </div>
        </section>


        <!--Siapa Kita-->
        <section class="about section " id="about">
            <h2 class="section-title">Siapa Kita ?</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="/assets/images/Siapakita.svg" alt="">
                </div>
                
                <div>
                    <p class="about__text">Lorem Ipsum is simply dummy text of the printing 
                        and typesetting industry. Lorem Ipsum has been 
                        the industry's standard dummy text ever since 
                        the 1500s, when an unknown printer took a galley 
                        of type and scrambled it to make a type specimen 
                        book.</p>     
                        <a href="" class="button-link siapa">Kepoin Yuk <i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>     
                </div>                                   
            </div>
        </section>

            <!--Artikel-->
            <section class="artikel section" id="artikel">
            <h2 class="section-title">Artikel</h2>
            <div class= "artikel-container">
                <!--Self Development-->
                <div class=kategori>
                    <h3 class="text-artikel">Self Development</h3>
                <div class="artikel-content">
                    <img src="/assets/images/header artikel.jpg" alt="">
                    <p class="home-artikel-judul">Yuk, Belajar Memulai Karir di Dunia Startup</p>
                    <p class="text-isi-artikel">Halo captainers! buat kamu yang mau kerja di dunia startup, simak tips berkarir di dunia startup biar kamu lebih berpeluang diterima.</p>
                </div>
                    <a href="/" class="selengkapnya-artikel">Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                </div>
                <!--Jurusan-->
                <div class=kategori>
                    <h3 class="text-artikel">Self Development</h3>
                <div class="artikel-content">
                    <img src="/assets/images/header artikel.jpg" alt="">
                    <p class="home-artikel-judul">Yuk, Belajar Memulai Karir di Dunia Startup</p>
                    <p class="text-isi-artikel">Halo captainers! buat kamu yang mau kerja di dunia startup, simak tips berkarir di dunia startup biar kamu lebih berpeluang diterima.</p>
                </div>
                    <a href="/" class="selengkapnya-artikel">Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                </div>
                <!--Karir-->
                <div class=kategori>
                    <h3 class="text-artikel">Self Development</h3>
                <div class="artikel-content">
                    <img src="/assets/images/header artikel.jpg" alt="">
                    <p class="home-artikel-judul">Yuk, Belajar Memulai Karir di Dunia Startup</p>
                    <p class="text-isi-artikel">Halo captainers! buat kamu yang mau kerja di dunia startup, simak tips berkarir di dunia startup biar kamu lebih berpeluang diterima.</p>
                </div>
                    <a href="/" class="selengkapnya-artikel">Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                </div>
            </div>
        </section>

        <!-- KEGIATAN KAMI 
        <section class="kegiatan-kami section" id="kegiatan-kami">
        <h2 class="section-title">Kegiatan Kami</h2>
        <div class="activity-container">
            <div class="activity">
            <img src="/assets/images/gambar1.png" class="img-activity" alt="">
                <div class="activity-description">
                    <h5 class="title-activity">LOREM IPSUM</h5>
                    <p class="text-activity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam</p>
                    <a href="" class="button-activity">Detail <i class='bx bx-arrow-back bx-rotate-180' ></i></a>
                </div>
            </div>
            <div class="activity">
            <img src="/assets/images/gambar2.png" class="img-activity" alt="">
                <div class="activity-description">
                    <h5 class="title-activity">LOREM IPSUM</h5>
                    <p class="text-activity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam</p>
                </div>
            </div>
        </div>
        <div class="activity-container">
            <div class="activity">
            <img src="/assets/images/gambar3.png" class="img-activity" alt="">
                <div class="activity-description">
                    <h5 class="title-activity">LOREM IPSUM</h5>
                    <p class="text-activity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam</p>
                </div>
            </div>
            <div class="activity">
            <img src="/assets/images/gambar4.png" class="img-activity" alt="">
                <div class="activity-description">
                    <h5 class="title-activity">LOREM IPSUM</h5>
                    <p class="text-activity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam</p>
                </div>
            </div>
        </div>
        </section>-->

        <!-- KONTAK -->
        <section class="kontak section" id="kontak">
            <h2 class="section-title">Kontak Kami</h2>
            <div class="kontak-container">
                <div class="kontak-description">
                    <img src="/assets/images/TemukanKami.svg" class="img-kontak" alt="">
                </div>
                <div class="kontak-descrption">
                <div class="sosial-media">
                    <img src="/assets/images/ig.svg" class="img-kontak-media" alt="">
                    <a href="https://www.instagram.com/peergroup.id/" target="_blank">Peergroup.id</a> 
                </div>
                <div class="sosial-media">
                    <img src="/assets/images/mail.svg" class="img-kontak-media" alt="">
                    peergroup.id@gmail.com
                </div>
                <div class="sosial-media">
                    <img src="/assets/images/linkedin.svg" class="img-kontak-media" alt="">
                    Peer Group ID
                </div>
                </div>
            </div>
        </section>
    </main>
    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
<?= $this->endsection();?>
    