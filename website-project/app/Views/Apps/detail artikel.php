<?php
    foreach($artikel->getResult() as $data) {
        $id =$data->id;
        $judul = $data->judul;
        $penulis = $data->penulis;
        $text = $data->text;
        $cover = $data->cover;
        $sumber_cover = $data->sumber_cover;
        $date = $data->created_at;
    }
?>
<?= $this->extend('/Apps/header-footer');?>
<?= $this->section('content')?>
    <main class="l-main">
        <section class="artikel section">
            <div class="artikel__container detail">
                <!--Area artikel-->
                <div class="artikel">
                    <div class="header-artikel">
                        <h1 class="title-artikel"><?=$judul?></h1>
                        <div class="author">
                            <p><span style="font-weight: var(--font-bold);">Penulis</span>  : <span class="author-name"><?php echo $penulis?></span> - <span class="date"><?php echo $date ?></span></p>
                        </div>
                        <div class="share">
                            <span>Share</span> 
                            <img src="/assets/images/facebook.svg" alt="facebook">
                            <img src="/assets/images/twitter.svg" alt="twitter">
                            <img src="/assets/images/whatsapp.svg" alt="whatsapp">
                            <img src="/assets/images/telegram-plane.svg" alt="telegram">
                        </div>
                        <?php
                            if ($cover != NULL) {
                                echo "<div class='arti-image'>
                                            <img src='/assets/images/artikel/$cover' alt=''>
                                    </div>
                                    <div class='sumber'>
                                        <p>Sumber: $sumber_cover</p>
                                    </div>";
                            }
                        ?>
                    </div>
                    <div class="text">
                        <?php echo $text?>
                    </div>
                    <div class="animation">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_kmfssxfk.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
                    </div>
                </div>
                <!--Area Rekomendasi-->
                <!--<div class="Rekomendasi">
                    <div class="rekomendasi-container">
                        <div class="header-rekomendasi">
                            <h2>Rekomendasi</h2>
                        </div>
                        <div class="rekomen-fill">
                            <div class="left">
                                <div class="konten">
                                    <div class="rekomen-img">
                                        <img src="/assets/images/header artikel.jpg" alt="">
                                    </div>
                                    <p class="text-rekomen">Yuk, Belajar Memulai Karir di Dunia Startup</p>
                                </div>
                                <div class="konten">
                                    <div class="rekomen-img">
                                        <img src="/assets/images/header artikel.jpg" alt="">
                                    </div>
                                    <p class="text-rekomen">Yuk, Belajar Memulai Karir di Dunia Startup</p>
                                </div>
                                <div class="konten">
                                    <div class="rekomen-img">
                                        <img src="/assets/images/header artikel.jpg" alt="">
                                    </div>
                                    <p class="text-rekomen">Yuk, Belajar Memulai Karir di Dunia Startup</p>
                                </div>
                            </div>
                            <div class="right">
                                <div class="konten">
                                    <div class="rekomen-img">
                                        <img src="/assets/images/header artikel.jpg" alt="">
                                    </div>
                                    <p class="text-rekomen">Yuk, Belajar Memulai Karir di Dunia Startup</p>
                                </div>
                                <div class="konten">
                                    <div class="rekomen-img">
                                        <img src="/assets/images/header artikel.jpg" alt="">
                                    </div>
                                    <p class="text-rekomen">Yuk, Belajar Memulai Karir di Dunia Startup</p>
                                </div>
                                <div class="konten">
                                    <div class="rekomen-img">
                                        <img src="/assets/images/header artikel.jpg" alt="">
                                    </div>
                                    <p class="text-rekomen">Yuk, Belajar Memulai Karir di Dunia Startup</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </section>
    </main>
<?= $this->endsection();?>