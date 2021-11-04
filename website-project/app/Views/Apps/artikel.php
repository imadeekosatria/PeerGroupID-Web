<?= $this->extend('/Apps/header-footer');?>
<?= $this->section('content')?>
<!--Code goes here-->
    <div class="l-main">
        <section class="artikel section">
            <div class="container__artikel">
                <!--Title Section-->
                <div class="title">
                    <h5 class="judul-konten"><span style="color: #1E435B">Artikel</span> <span style="color: #EAA900"><?=$kategori?></span></h5>
                </div>
                <!--Content Section-->
                <div class="konten">
                    <div class="artikel__container">
                        <!--Area artikel-->
                        <div class="artikel">
                            <?php
                                foreach ($artikel->getResultArray() as $data):
                            ?>
                            <div class="box">
                                <div class="img-thumbnail">
                                    <img src="/assets/images/<?php echo $data['cover']?>" alt="">
                                </div>
                                <div class="text-list">
                                    <div class="title-thumbnail">
                                        <a href="/detail-artikel/<?php echo $data['id']?>"><?php echo $data['judul']?></a>
                                    </div>
                                    <div class="penulis">
                                        <p class="penulis-artikel-home"><?php echo $data['penulis']  ?> <span class="tanggal-artikel-home"><?php echo $data['created_at']?></span></p>
                                    </div>
                                    <div class="thumbnail-description">
                                        <p><?php echo $data['deskripsi']?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                        <!--Area Rekomendasi-->
                        <div class="Rekomendasi">
                            <div class="rekomendasi-container">
                                <div class="header-rekomendasi-home">
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
                        </div>                        
                    </div>
                </div>
            </div>
                
        </section>
        
    </div>
<?= $this->endsection();?>