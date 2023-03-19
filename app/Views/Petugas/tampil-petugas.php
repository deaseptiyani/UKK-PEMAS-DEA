<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
<h2>Data Petugas</h2>
<p>Berikut ini daftar petugas pengelola aplikasi Pengaduan Masyarakat yang
sudah terdaftar dalam database.</p>
<p><a href="/petugas/tambah" class="btn btn-primary btn-sm">Tambah Petugas</a></p>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead class="bg-secondary text-center">
<tr align="center">
<th>No</th>
<th>Nama Petugas</th>
<th>Username</th>
<th>Level User</th>
<th>Aksi</th>
</tr>
</thead>
<tbody class="text-center">
<?php foreach($ListPetugas as $key => $row): ?>
                            <tr align="center">
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['nama_petugas'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['level'] ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/petugas/edit/<?= $row['id_petugas']?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"> Edit</i></a>
                                        <a onclick="return confirm('Anda Yakin Ingin Menghapus ?')" href="/petugas/hapus/<?=$row['id_petugas']?>" class="btn btn-secondary btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
</tbody>
</table>
<?= $this->endSection() ?>