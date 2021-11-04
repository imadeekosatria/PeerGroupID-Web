<?= $this->extend('/Apps/header-footer');?>
<?= $this->section('content')?>
<main class="l-main">
<div class="aboutcontent">
        <div class="abouttitle">
            <h1 style="color: rgb(63, 63, 155);" class="aboutsiapa">Siapa </h1>
            <h1 style="color: rgb(182, 149, 41);" class="aboutkita"> Kita?</h1>
        </div>
        <div class="descContent">
            <h2 style="color: rgb(182, 149, 41);">Lorem Ipsum Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores impedit illo animi temporibus cupiditate. 
                Fugiat numquam quo sapiente corporis, porro est harum asperiores sed ab provident eum blanditiis illo ad.</p>
        </div>
        <div class="imgContent">
            <img class="imgsiapakita" src="/assets/images/Siapakita.svg" alt="">
        </div>
    </div>
    <div class="valueContent">
        <div class="vision">
            <h2 class="theader">VISI</h2>
            Menjadi wadah pengembangan potensi bagi generasi muda dalam menemukan bakat minat,
            serta tempat berbagai ilmu, pengalaman dan pelatihan bagi sesama.
        </div>
        <div class="mission">
            <h2 class="theader">MISI</h2>
            1. Mendorong remaja untuk mengeksplorasi skill <br>
            <br>
            2. Wadah pemuda mengembangkan skill <br>
            <br>
            3. Mengedukasi topik minat dan bakat serta manfaatnya <br>
            <br>
            4. Memberikan ruang remaja dalam berkreasi dan ekspresi sesuai minat atau bakat <br>
            <br>
            5. Memberikan pelatihan peer group courses <br>
            <br>
            6. Mencetak generasi yang cerdas dalam SQ, SE, dan IQ
        </div>
    </div>
    </main>
    <script src="https://unpkg.com/scrollreveal"></script>
    <?= $this->endsection();?>