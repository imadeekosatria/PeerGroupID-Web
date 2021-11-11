<?= $this->extend('/Apps/sidebar');?>
<?= $this->section('content');?>
<div class="title">
        <p>Kegiatan Kami</p>
    </div>

    <div>
        <a href="/tambah-kegiatan" class="tambah">Tambah</a>
    </div>

    <table class="table-paginate">
  <tr>
    <td> <img src="/assets/images/image.png" alt="" class="img-tabel"></td>
    <td> <span style="color: #1E435B; font-weight: bold; font-size: 18px;">Yuk, Belajar Memulai Karir di Dunia Startup </span> <br> <br>
    <span style="color: #526260; font-style: italic; font-size: 14px;"> Muhammad Perwira Hutama A. </span><br> <br>
    <span style="color: #030402; font-size: 16px;"> Perusahaan startup (perusahaan rintisan) sedang populer 
    belakangan ini. Karena, perusahaan rintisan berbasis tekonologi 
    dan digital ini menyediakan ragam aplikasi dan layanan yang memudahkan kehidupan masyarakat.
    </span>
     <br>
    </td>
    <td>
        <a href=""><img src="/assets/images/launch.png" alt="" class="img-ikon"></a> <br>
        <a href=""><img src="/assets/images/edit.png" alt="" class="img-ikon"></a> <br>
        <a href=""><img src="/assets/images/hapus.png" alt="" class="img-ikon"></a> <br>
    </td>
  </tr>
</table>
<?= $this->endsection();?>