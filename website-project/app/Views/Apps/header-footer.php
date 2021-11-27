<?php $session = session();?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/about.css">
    <!--  Essential META Tags -->
    <meta name="description" content="<?php echo $deskripsi; ?>" />
    <meta name="application-name" content="Web Peer Group ID">
    <meta name="author" content="Web Development Team Peer Group ID">
    <meta name="keywords" content="Self Development, Karir, Jurusan">
    <meta property="og:title" content="Peer Group ID">
    <meta property="og:type" content="article" />
    <meta property="og:image" content="/assets/images/Logo Peer Group.jpg">
    <!-- <meta property="og:site_name" content="peergroupid.org"> -->
    <!-- <meta property="og:url" content="https://www.peergroupid.org"> -->
    <!-- <meta rel="canonical" herf="https://peergroupid.org"> -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="language" content="id">
    <meta name="geo.country" content="id">
    <meta name="geo.placename" content="Indonesia">
    <meta>
    <!--  Non-Essential, But Recommended -->
    <meta property="og:description" content="<?php echo $deskripsi?>">
    <!-- <meta property="og:site_name" content="European Travel, Inc.">
    <meta name="twitter:image:alt" content="Alt text for image"> -->

    <!--  Non-Essential, But Required for Analytics -->
    <!-- <meta property="fb:app_id" content="your_app_id" />
    <meta name="twitter:site" content="@website-username"> -->
    <title><?=$title?></title>
</head>
<body>
    <!--Header-->
    <div class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="/" class="nav__logo"><img src="/assets/images/Logo Peer Group Transparan.png" alt=""></a> 
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
                    <li class="nav__item"><a href="/about" class="nav__link">Siapa Kita</a></li>
                    <li class="nav__item dropdown" >
                        <a href="#" class="nav__link dropdown__link" id="dropdown">Artikel <i class='bx bx-chevron-down dropdown__icon' id="drop-icon"></i></a>
                        <ul class="dropdown__menu" id="dropdown-menu">
                            <li class="dropdown__item"><a href="/artikel/self" class="nav__link">Self Development</a></li>
                            <li class="dropdown__item"><a href="/artikel/jurusan" class="nav__link">Jurusan</a></li>
                            <li class="dropdown__item"><a href="/artikel/karir" class="nav__link">Karir</a></li>
                        </ul>
                    </li>
                    <!--<li class="nav__item"><a href="#" class="nav__link">#CeritaMereka</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Review</a></li>-->
                    <li class="nav__item"><a href="#" class="nav__link">Kegiatan Kami</a></li>
                    <?php
                        if ($session->logged_in == true) {
                            $logout = base_url('logout');
                            $admin_page = base_url('artikel-admin');
                            echo "<li class='nav__item dropdown' >
                                    <a href='#' class='nav__link dropdown__link' id='dropdown'>$session->username <i class='bx bx-chevron-down dropdown__icon' id='drop-icon'></i></a>
                                    <ul class='dropdown__menu' id='dropdown-menu'>
                                        <li class='dropdown__item'><a href='$admin_page' class='nav__link'>Admin</a></li>
                                        <li class='dropdown__item'><a href='$logout' class='nav__link'>Logout</a></li>
                                    </ul>
                                </li>";
                        }else {
                            echo '<li class="nav__item"><a href="/login" class="nav__link">Login</a></li> ';
                        }
                    ?>
                    
                </ul>
            </div>
        </nav>
    </div>
    <?= $this->renderSection('content');?>
    <footer class="footer">
        <!-- <a href="#" class="nav__logo"><img src="/assets/images/Logo Peer Group Transparan.png" alt=""></a>  -->
        <small>Copyright &copy; Peergroup.id 2021</small>
    </footer>
    
    <!--Main JS-->
    <script src="/assets/js/main.js"></script>
</body>
</html>