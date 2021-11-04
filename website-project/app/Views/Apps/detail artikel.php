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
                            <p><span style="font-weight: var(--font-bold);">Penulis</span>  : <span class="author-name"><?php echo $penulis?></span> - <span class="date"><?php echo $date?></span></p>
                        </div>
                        <?php
                            if ($cover != NULL) {
                                echo "<div class='arti-image'>
                                            <img src='/assets/images/$cover' alt=''>
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