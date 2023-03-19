<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
</br> <h2>Data Hasil Respon Pengaduan Masyarakat</h2> </br>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead class="bg-secondary text-center">
<tr align="center">
<th>No</th>
<th>Nik</th>
<th>Nama</th>
<th>Petugas</th>
<th>Tanggal Masuk</th>
<th>Tanggal Ditanggapi</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach($ListTanggapan as $key => $row): ?>
                            <tr align="center">
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['nik'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['nama_petugas'] ?></td>
                                <td><?= $row['tgl_pengaduan'] ?></td>
                                <td><?= $row['tgl_tanggapan'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="/pengaduan/tampilrespon/<?= $row['id_tanggapan']?>" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i> Detail </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
</tbody>
</table>
<?= $this->endSection() ?>