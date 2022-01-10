<?php $session = session();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/new_admin.css">
    <title>Admin Panel - Peer Group ID</title> 
</head>
<body>
    <div class="container">
        <!-- SideBar -->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="/assets/images/Logo Peer Group.jpg" alt="Logo Peer Group ID">
                    <h2>PEER GROUP <span class="warning">ID</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="/admin-panel" class="nav-link <?php if(base_url('admin-panel')) echo "active"; ?>">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="artikel.html" class="nav-link">
                    <span class="material-icons-sharp">text_snippet</span>
                    <h3>Artikel</h3>
                </a>
                <a href="kegiatan.html" class="nav-link">
                    <span class="material-icons-sharp">workspaces</span>
                    <h3>Kegiatan</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="progile.html" class="nav-link">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Profile</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Aside -->
        <main>
            <h1>Dashboard</h1>
    
            <div class="date">
                <input type="date" name="date-filter" id="date-filter">
            </div>
            <!-- Insight -->
            <!-- <div class="insight">
                ****To use, copy from here****
                <div class="sales">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total sales</h3>
                            <h1>$25,04</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                ****End of Copy****
                <div class="expenses">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total sales</h3>
                            <h1>$25,04</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div> -->
            <!-- End of Insight -->

            <!-- Recent Post -->
            <div class="recent-post" id="recent-post">
                <h2>Recent Post</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Tanggal Post</th>
                            <th>Tanggal Update</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allpost->getResultArray() as $data): ?>
                        <tr>
                            <td><a href="/detail-artikel/<?php echo $data['slug']?>"><?php echo $data['judul']?></a></td>
                            <td><?php echo $data['kategori']?></td>
                            <td><?php echo $data['penulis']?></td>
                            <td><?php echo strftime('%e %b %Y', strtotime($data['created_at'])); ?></td>
                            <td><?php echo strftime('%e %b %Y', strtotime($data['updated_at'])); ?></td>
                            <td>button</td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
        <!-- End of the main section -->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?php echo $session->username?></b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="/assets/images/profile/latar-belakang-keluarga-mina-twice-ramai-dibicarakan-ini-alasannya_171.jpeg" alt="profile picture">
                    </div>
                </div>
            </div>
            <!-- End of top -->

            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <!-- Use from here to repeat -->
                    <div class="update">
                        <div class="profile-photo">
                            <img src="/assets/images/profile/latar-belakang-keluarga-mina-twice-ramai-dibicarakan-ini-alasannya_171.jpeg" alt="profile image">
                        </div>
                        <div class="message">
                            <p><b>Mina</b> post new artikel</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <!-- end of repeat -->
                    <!-- Use from here to repeat -->
                    <div class="update">
                        <div class="profile-photo">
                            <img src="/assets/images/profile/profile.jpg" alt="profile image">
                        </div>
                        <div class="message">
                            <p><b>Eko</b> post new artikel</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <!-- end of repeat -->
                </div>
            </div>
            <!-- End of Recent Updates -->
        </div>
    </div>
    <script src="/assets/js/admin.js"></script>
</body>
</html>