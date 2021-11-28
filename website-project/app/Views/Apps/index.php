<?= $this->extend('/Apps/header-footer');?>
<?= $this->section('content')?>
    <main class="l-main">
        <!--Home-->
        <section class="home">
            <div class="home__container bd-grid">
                <div class="content">
                    <h2 class="title">Self-development bukan hanya pengetahuan, tetapi kebutuhan.</h2>
                    <p class="desc" id="header">Yuk, bergabung bersama pemuda lainnya untuk temukan potensimu, belajar fokus pada kelebihanmu, dan menjadi unik versi dirimu. Bersama kami, mari belajar menjadi pribadi yang cemerlang!</p>
                    <a href="#about" class="button-link kepoin">Kepoin Yuk <i class='bx bx-arrow-back bx-rotate-270' ></i></a>
                </div>
                <div class="home__img">
                    <img class="front" src="/assets/images/FAQ.svg" alt="">
                </div>
            </div>
        </section>


        <!--Siapa Kita-->
        <section class="about section " id="about">
            <h2 class="section-title" id="siapa-kita">Siapa Kita ?</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="/assets/images/Siapakita.svg" alt="">
                </div>
                
                <div>
                    <p class="about__text" id="siapa">Peer Group ID merupakan platform paling tepat bagi para pemuda yang ingin mengembangkan diri lewat potensi yang dimiliki dengan berbagai kegiatan menarik berbasis pembinaan, pendampingan, dan konseling. Bersama kami, kamu bisa temukan, kembangkan, dan menjadi hebat dengan potensimu.</p>     
                        <a href="about" class="button-link siapa">Kepoin Yuk <i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>     
                </div>                                   
            </div>
        </section>
            <!--Artikel-->
            <section class="artikel section" id="artikel">
            <h2 class="section-title" id="artikel-title">Artikel</h2>
            <div class= "artikel-container">
                <!--Get data from new artikel-->
                <?php
                    // Self Development
                    if($selfdev){
                        foreach($selfdev->getResult() as $self) {
                            $sslug =$self->slug;
                            $stitle = $self->judul;
                            $scover = $self->cover;
                            $sdeskripsi = $self->deskripsi;
                        }
                        if ($scover) {
                            echo "<div class='kategori'>
                                        <h3 class='text-artikel'>Self Development</h3>
                                    <div class='artikel-content'>
                                        <img src='/assets/images/artikel/$scover' alt=''>
                                        <p class='home-artikel-judul'>$stitle</p>
                                        <p class='text-isi-artikel'>$sdeskripsi</p>
                                    </div id='self'>
                                        <a href='/detail-artikel/$sslug' class='selengkapnya-artikel'>Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                    </div>";
                        }else{
                            echo "<div class='kategori'>
                                        <h3 class='text-artikel'>Self Development</h3>
                                    <div class='artikel-content'>
                                        <img src='/assets/images/artikel/default.svg' alt=''>
                                        <p class='home-artikel-judul'>$stitle</p>
                                        <p class='text-isi-artikel'>$sdeskripsi</p>
                                    </div id='self'>
                                        <a href='/detail-artikel/$sslug' class='selengkapnya-artikel' >Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                    </div>";
                        }
                    }
                    // Karir
                    if ($karir) {
                        foreach($karir->getResult() as $k) {
                            $kslug =$k->slug;
                            $ktitle = $k->judul;
                            $kcover = $k->cover;
                            $kdeskripsi = $k->deskripsi;
                        }
                        if ($kcover) {
                            echo "<div class='kategori'>
                                    <h3 class='text-artikel' id='karir'>Karir</h3>
                                <div class='artikel-content'>
                                    <img src='/assets/images/artikel/$kcover' alt=''>
                                    <p class='home-artikel-judul'>$ktitle</p>
                                    <p class='text-isi-artikel'>$kdeskripsi</p>
                                </div>
                                    <a href='/detail-artikel/$kslug' class='selengkapnya-artikel'>Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                </div>";
                        } else {
                            echo "<div class='kategori'>
                                    <h3 class='text-artikel' id='karir'>Karir</h3>
                                <div class='artikel-content'>
                                    <img src='/assets/images/artikel/default.svg' alt=''>
                                    <p class='home-artikel-judul'>$ktitle</p>
                                    <p class='text-isi-artikel'>$kdeskripsi</p>
                                </div>
                                    <a href='/detail-artikel/$kslug' class='selengkapnya-artikel'>Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                </div>";
                        }
                        
                    }
                    // Jurusan
                    if ($jurusan) {
                        foreach($jurusan->getResult() as $j) {
                            $jslug =$j->slug;
                            $jtitle = $j->judul;
                            $jcover = $j->cover;
                            $jdeskripsi = $j->deskripsi;
                        }
                        if ($jcover) {
                            echo "<div class='kategori'>
                                        <h3 class='text-artikel' id='jurusan'>Jurusan</h3>
                                    <div class='artikel-content'>
                                        <img src='/assets/images/artikel/$jcover' alt=''>
                                        <p class='home-artikel-judul'>$jtitle</p>
                                        <p class='text-isi-artikel'>$jdeskripsi</p>
                                    </div>
                                        <a href='/detail-artikel/$jslug' class='selengkapnya-artikel'>Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                    </div>";  
                        }else {
                            echo "<div class='kategori'>
                                        <h3 class='text-artikel' id='jurusan'>Jurusan</h3>
                                    <div class='artikel-content'>
                                        <img src='/assets/images/artikel/default.svg' alt=''>
                                        <p class='home-artikel-judul'>$jtitle</p>
                                        <p class='text-isi-artikel'>$jdeskripsi</p>
                                    </div>
                                        <a href='/detail-artikel/$jslug' class='selengkapnya-artikel'>Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                    </div>"; 
                        } 
                    }
                    
                ?>
            </div>
        </section>

        <!-- KEGIATAN KAMI--> 
        <section class="kegiatan-kami section" id="kegiatan-kami">
        <h2 class="section-title">Kegiatan Kami</h2>
        <div class="activity-container">
            <div class="activity">
            <img src="/assets/images/gambar1.png" class="img-activity" alt="">
                <div class="activity-description">
                    <a href="#"><h5 class="title-activity">LOREM IPSUM</h5></a>
                    <p class="text-activity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam</p>
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
        </section>

        <!-- KONTAK -->
        <section class="kontak section" id="kontak">
            <h2 class="section-title">Kontak Kami</h2>
            <div class="kontak-container">
                <div class="kontak-description">
                    <img src="/assets/images/Temukankami.svg" class="img-kontak" alt="">
                </div>
                <div class="kontak-descrption">
                <div class="sosial-media">
                    <img src="/assets/images/ig.svg" class="img-kontak-media" alt="">
                    <a href="https://www.instagram.com/peergroup.id/" target="_blank" rel="noopener noreferrer">Peergroup.id</a> 
                </div>
                <div class="sosial-media">
                    <img src="/assets/images/mail.svg" class="img-kontak-media" alt="">
                    <a href="mailto:peergroup.id@gmail.com">peergroup.id@gmail.com</a>
                </div>
                <div class="sosial-media">
                    <img src="/assets/images/linkedin.svg" class="img-kontak-media" alt="">
                    <a href="https://www.linkedin.com/company/peer-group-id/" target="_blank" rel="noopener noreferrer">Peer Group ID</a>
                </div>
                </div>
            </div>
        </section>
    </main>
    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--GASP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<?= $this->endsection();?>
    