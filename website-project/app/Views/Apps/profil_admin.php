<?= $this->extend('/Apps/sidebar');?>
<?= $this->section('content');?>
    <div class="title">
        <p>Profil</p>
    </div>
    <div class="content">
        <a href=""><img src="/assets/images/profile/<?php echo $foto?>" alt="" class="img-profil"></a>
        <form action="/update/profile/<?php echo $id; ?>" method="post" enctype="multipart/form">
            <p>
                <label for="username">Username</label>
                <input type="text" class="form-input" value="<?php echo $username?>">
            </p>
            <p>
                <label for="password">Password</label>
                <input type="password" class="form-input" value="<?php echo $password?>">
            </p>
            <p>
                <label for="name">Nama</label>
                <input type="text" class="form-input" value="<?php echo $nama?>">
            </p>
            <p>
                <label for="name">Gender</label>
                <input type="text" class="form-input" value="<?php echo $gender?>">
            </p>
            <p>
                <button type="submit" class="button-update">Update</button>
            </p>

        </form>
    </div>
<?= $this->endsection();?>