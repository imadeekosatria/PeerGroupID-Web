<?= $this->extend('/Apps/sidebar');?>
<?= $this->section('content');?>
<div class="title">
        <p>Kegiatan Kami</p>
    </div>

    <div>
        <a href="/tambah-data" class="tambah">Tambah</a>
    </div>

    <table class="table-paginate">
      <?php
          foreach ($kegiatan->getResultArray() as $data):
      ?>
      <tr>
        <td>
          <?php
              if ($data['cover'] != NULL) {
                $cover = $data['cover'];
                echo "<img src='/assets/images/kegiatan/$cover' alt='' class='img-tabel'>";
              }
          ?>  
        </td>
        <td> <span style="color: #1E435B; font-weight: bold; font-size: 18px; display: flex; margin-bottom: 5px";><?=$data['judul']?> </span>
        <span style="color: #526260; font-style: italic; font-size: 14px; margin-bottom: 5px;"> <?=$data['penulis']?></span> <span style="color: #526260; font-size: 14px; margin-bottom: 5px;">  &nbsp;  &nbsp;  27 Oktober 2021 </span>
        <span style="color: #030402; font-size: 16px; display: flex; margin-bottom: 1rem; margin-top: 5px;"> Perusahaan startup (perusahaan rintisan) sedang populer 
        belakangan ini. Karena, perusahaan rintisan berbasis tekonologi 
        dan digital ini menyediakan ragam aplikasi dan layanan yang memudahkan kehidupan masyarakat.
        </span>
        </td>
        <td>
            <a href=""><img src="/assets/images/launch.png" alt="" class="img-ikon"></a> <br>
            <a href=""><img src="/assets/images/edit.png" alt="" class="img-ikon"></a> <br>
            <a href=""><img src="/assets/images/hapus.png" alt="" class="img-ikon"></a> <br>
        </td>
      </tr>
      <?php endforeach?>
</table>
<?= $this->endsection();?>