<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Peer Group ID</title>
</head>
<body>
    <!--Header-->
    <div class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo"><img src="/assets/images/Logo Peer Group Transparan.png" alt=""></a> 
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.html" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="index.html" class="nav__link">About Us</a></li>
                    
                    <li class="nav__item dropdown" >
                        <a href="#" class="nav__link dropdown__link" id="dropdown">Artikel <i class='bx bx-chevron-down dropdown__icon' id="drop-icon"></i></a>
                        <ul class="dropdown__menu" id="dropdown-menu">
                            <li class="dropdown__item"><a href="#" class="nav__link">Self Development</a></li>
                            <li class="dropdown__item"><a href="#" class="nav__link">Jurusan</a></li>
                            <li class="dropdown__item"><a href="#" class="nav__link">Karir</a></li>
                        </ul>
                    </li>

                    <li class="nav__item"><a href="#" class="nav__link">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <main class="l-main">
        <!--Home-->
        <section class="home">
            <div class="home__container bd-grid">
                <div class="content">
                    <h2 class="title">Find Your Skill</h2>
                    <p class="desc">Temukan potensimu, fokus pada kelebihanmu, 
                        jadilah unik dan berbeda versi dirimu bersama 
                        Peer Group ID ✨</p>
                    <a href="" class="button-link kepoin">Kepoin Yuk <i class='bx bx-arrow-back bx-rotate-270' ></i></a>
                </div>
                <div class="home__img">
                    <img class="back" src="/assets/images/Ellipse 1.svg" alt="">
                    <img class="front" src="/assets/images/FAQs-pana 1.png" alt="">
                </div>
            </div>
        </section>


        <!--Siapa Kita-->
        <section class="about section " id="about">
            <h2 class="section-title">Siapa Kita ?</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="/assets/images/Questions-bro 1.svg" alt="">
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
        </section>
    </main>
    <!--GASP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <!--Main JS-->
    <script src="/assets/js/main.js"></script>
</body>
</html>