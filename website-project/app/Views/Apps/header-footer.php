<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?=$title?></title>
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
                    <li class="nav__item"><a href="/" class="nav__link">Beranda</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Siapa Kita</a></li>
                    <li class="nav__item dropdown" >
                        <a href="/artikel" class="nav__link dropdown__link" id="dropdown">Artikel <i class='bx bx-chevron-down dropdown__icon' id="drop-icon"></i></a>
                        <ul class="dropdown__menu" id="dropdown-menu">
                            <li class="dropdown__item"><a href="/self-dev" class="nav__link">Self Development</a></li>
                            <li class="dropdown__item"><a href="/jurusan" class="nav__link">Jurusan</a></li>
                            <li class="dropdown__item"><a href="/karir" class="nav__link">Karir</a></li>
                        </ul>
                    </li>
                    <li class="nav__item"><a href="#" class="nav__link">Kegiatan Kami</a></li>
                    <li class="nav__item"><a href="/login" class="nav__link">Login</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <?= $this->renderSection('content');?>
    <footer class="footer">
        <!-- <a href="#" class="nav__logo"><img src="/assets/images/Logo Peer Group Transparan.png" alt=""></a>  -->
        <small>Copyright &copy; Peergroup.id 2021</small>
    </footer>
    <!--GASP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <!--Main JS-->
    <script src="/assets/js/main.js"></script>
</body>
</html>