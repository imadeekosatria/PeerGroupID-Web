<!DOCTYPE html>
<html>
  <head>
    <title>Registrasion Form</title>
    <link rel="stylesheet" href="/assets/css/form_artikel.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">
    </script>
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
      <img src="/assets/images/Logo Peer Group Transparan.png" alt="" class="img">
      </div>
      <div class="form">
        <form action="/Login/simpan" method="post">
          <h1>Ketikkan Artikel Disini </h1>
          <p>
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" class="form-input">
          </p>
          <p><?= $validation->getError('title')?></p>
          <select name="kategori">
            <option value="">Pilih Kategori</option>
            <option value="self development">Self Development</option>
            <option value="karir">Karir</option>
            <option value="jurusan">Jurusan</option>
          </select>
          <p><?= $validation->getError('kategori')?></p>
          <p>
              <label for="cover">Upload Cover</label>
              <input type="file" name="cover" id="">
              <p><?= $validation->getError('cover')?></p>
          </p>
          <p>
            <label for="title">Sumber Cover</label>
            <input type="text" name="sumber_cover" id="sumber_cover" class="form-input">
            <p><?= $validation->getError('sumber_cover')?></p>
          </p>
          <p>
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="5"></textarea>
            <p><?= $validation->getError('deskripsi')?></p>
          </p>
          <p>
            <label for="name">Nama Penulis</label>
            <!--<input type="text" name="name" id="name" class="form-input">-->
            <select name="penulis">
              <option value="">Pilih Penulis</option>
              <?php
                foreach ($penulis->getResultArray() as $user):
              ?>
                <option value="<?php echo $user['nama']?>"><?php echo $user['nama']?></option>
              <?php endforeach;?>
            </select>
            <p><?= $validation->getError('name')?></p>
          </p>
          <!-- <p>
            <label for="paragraf-tittle">Paragraf Tittle</label>
            <input type="text" name="paragraf-tittle" id="paragraf-title" class="form-input">
          </p> -->
          <p>
            <label for="content">Isi Konten</label>
            <textarea name="content" id="content" rows="15"></textarea>
            <p><?= $validation->getError('content')?></p>
          </p>
          <p>
            <!--<input type="submit" onclick="return validate()">-->
            <button type="submit">Kirim</button>
            <button type="reset">Reset</button>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
