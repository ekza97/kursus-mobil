<section class="py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!-- <div class="card-header">
                    <h4>DATA MEMBER</h4>
                </div> -->
                <div class="card-body table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>TTL</th>
                                <th>JK</th>
                                <th>Agama</th>
                                <th>No. HP</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>File KTP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n=1; foreach($member as $row): ?>
                            <tr>
                                <td><?= $n++; ?></td>
                                <td><?= $row['member_nik']; ?></td>
                                <td><?= $row['member_nama']; ?></td>
                                <td><?= $row['member_tmp_lahir'].', '.date('d M Y',strtotime($row['member_tgl_lahir'])); ?>
                                </td>
                                <td><?= $row['member_jk']; ?></td>
                                <td><?= $row['member_agama']; ?></td>
                                <td><?= $row['member_telp']; ?></td>
                                <td><?= $row['member_email']; ?></td>
                                <td><?= $row['member_alamat']; ?></td>
                                <td><a href="<?= base_url('uploads/').$row['member_ktp']; ?>" target="_blank">Lihat</a>
                                </td>
                                <td>
                                    <a href="<?=base_url('admin/hapus_member/'.$row['idmember']);?>"
                                        class="btn btn-xs btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>