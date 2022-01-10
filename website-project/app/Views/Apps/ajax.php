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