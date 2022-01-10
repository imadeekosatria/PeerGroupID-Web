<?= $this->extend('/Apps/admin_template');?>
<?= $this->section('content')?>
<main>
    <h1><?=$title?></h1>

    <!-- <div class="date">
        <input type="date" name="date-filter" id="date-filter">
    </div> -->

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
                        <?php 
                            if ($artikel->getNumRows() == 0) {
                                echo "<tr>
                                            <td colspan='6'>No Data</td>
                                        </tr>";
                            }else
                            foreach ($artikel->getResultArray() as $data): ?>
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
                <!-- <a href="#">Show All</a> -->
            </div>
        </main>
        <!-- End of the main section -->
</main>
<?= $this->endsection();?>