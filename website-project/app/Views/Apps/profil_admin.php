<?= $this->extend('/Apps/sidebar');?>
<?= $this->section('content');?>
    <div class="title">
        <p>Profil</p>
    </div>

    <div class="content">
        <a href=""><img src="/assets/images/profil.png" alt="" class="img-profil"></a>
        <form action="">
            <p>
                <label for="username">Username</label>
                <input type="text" class="form-input">
            </p>
            <p>
                <label for="password">Password</label>
                <input type="password" class="form-input">
            </p>
            <p>
                <label for="name">Nama</label>
                <input type="text" class="form-input">
            </p>
            <p>
                <button type="submit" class="button-update">Update</button>
            </p>

        </form>
    </div>
<?= $this->endsection();?>