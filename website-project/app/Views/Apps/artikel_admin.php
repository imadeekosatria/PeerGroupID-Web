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
                echo "<img src='/assets/images/artikel/$cover' alt='' class='img-tabel'>";
              }else {
                echo "<img src='/assets/images/artikel/default.svg' alt='' class='img-tabel'>";
              }
          ?> 
          
        </td>
        <td> <span style="color: #1E435B; font-weight: bold; font-size: 18px; display: flex; margin-bottom: 5px; text-transform: capitalize;"><?php echo $data['judul']?> </span>
        <span style="color: #526260; font-style: italic; font-size: 14px; margin-bottom: 5px; text-transform: capitalize;"> <?php echo $data['penulis']?> </span> <span style="color: #526260; font-size: 14px; margin-bottom: 5px;">  &nbsp;  &nbsp;  27 Oktober 2021 </span>
        <span style="color: #030402; font-size: 16px; display: flex; margin-bottom: 1rem; margin-top: 5px;"> <?php echo $data['deskripsi']?>
        </span>
        <span style="color: #FFFFFF; font-size: 13px; background-color: #306181; padding: 8px 20px; border-radius: 5px; text-transform: capitalize;"> <?php echo $data['kategori']?> </span>
        </td>
        <td>
            <a href="/detail-artikel/<?php echo $data['id']?>"><img src="/assets/images/launch.png" alt="" class="img-ikon"></a> <br>
            <!-- <a href="/admin-artikel/edit/<?php //echo $data['id']?>"><img src="/assets/images/edit.png" alt="" class="img-ikon"></a> <br> -->
            <form action="/admin-artikel/edit/<?=$data['id']?>" method="post">
              <?csrf_field();?>
              <input type="hidden" name="_method" value="PUT">
              <button type="submit" class="button-delete"><img src="/assets/images/edit.png" alt="" class="img-ikon"></button>
            </form>
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