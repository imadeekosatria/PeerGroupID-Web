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
            <div class="artikel__container">
                <div class="header-artikel">
                    <h1 class="title-artikel"><?=$judul?></h1>
                    <div class="author">
                        <p>Penulis : <span class="author-name"><?php echo $penulis?></span> - <span class="date"><?php echo $date?></span></p>
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
        </section>
    </main>
<?= $this->endsection();?>