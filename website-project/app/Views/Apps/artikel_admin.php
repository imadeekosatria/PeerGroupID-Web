<?= $this->extend('/Apps/sidebar');?>
<?= $this->section('content');?>
<div class="title">
        <p>Artikel</p>
    </div>

    <div>
        <a href="/tambah-artikel" class="tambah">Tambah</a>
    </div>

    <table class="table-paginate">
      <?php
          foreach ($artikel->getResultArray() as $data):
      ?>
      <tr>
        <td>
          <?php
              if ($data['cover'] != NULL) {
                $cover = $data['cover'];
                echo "<img src='/assets/images/$cover' alt='' class='img-tabel'>";
              }
          ?> 
          
        </td>
        <td> <span style="color: #1E435B; font-weight: bold; font-size: 18px; text-transform: capitalize;"><?php echo $data['judul']?> </span> <br> <br>
        <span style="color: #526260; font-style: italic; font-size: 14px; text-transform: capitalize;"> <?php echo $data['penulis']?> </span><br> <br>
        <span style="color: #030402; font-size: 16px;"> <?php echo $data['deskripsi']?>
        </span>
        <br>
        </td>
        <td>
            <a href="/detail-artikel/<?php echo $data['id']?>"><img src="/assets/images/launch.png" alt="" class="img-ikon"></a> <br>
            <a href="/admin-artikel/edit-artikel/<?php echo $data['id']?>"><img src="/assets/images/edit.png" alt="" class="img-ikon"></a> <br>
            <form action="/admin-artikel/hapus/<?=$data['id']?>" method="post">
              <?csrf_field();?>
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="button-delete"><img src="/assets/images/hapus.png" alt="" class="img-delete" onclick="return confirm('Apakah anda yakin ingin menghapus <?=$data['judul']?> ?')"></button>
            </form>
        </td>
      </tr>
      <?php endforeach?>
    </table>
<?= $this->endsection();?>