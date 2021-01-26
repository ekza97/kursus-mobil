<section class="py-5">
    <div class="row">
        <div class="col-lg-12 mb-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Biodata Diri Pendaftar</h3>
                </div>
                <div class="card-body">
                    <?php if(isset($edit)): ?>
                    <form class="form-horizontal" action="<?=base_url('member/update/'.$member['idmember']);?>"
                        method="post" enctype="multipart/form-data">
                        <?php else: ?>
                        <form class="form-horizontal" action="<?=base_url('member/add');?>" method="post"
                            enctype="multipart/form-data">
                            <?php endif; ?>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Nomor Induk Kependudukan</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="member_nik"
                                        placeholder="ex: 92061123121200012"
                                        value="<?=isset($edit)?$member['member_nik']:'';?>" autofocus required>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Nama Lengkap (sesuai KTP)</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="member_nama"
                                        placeholder="ex: Eka Saputra"
                                        value="<?=isset($edit)?$member['member_nama']:'';?>" required>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Tempat, Tanggal Lahir</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="member_tmp_lahir"
                                        placeholder="ex: Manokwari"
                                        value="<?=isset($edit)?$member['member_tmp_lahir']:'';?>" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="date" class="form-control" name="member_tgl_lahir"
                                        value="<?=isset($edit)?$member['member_tgl_lahir']:'';?>" required>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Jenis Kelamin / Agama</label>
                                <div class="col-md-5 select mb-3">
                                    <select name="member_jk" class="form-control"
                                        value="<?=isset($edit)?$member['member_jk']:'';?>" required>
                                        <option value="L" <?=isset($edit)?$member['member_jk']=="L"?'selected':'':'';?>>
                                            Laki-laki</option>
                                        <option value="P" <?=isset($edit)?$member['member_jk']=="P"?'selected':'':'';?>>
                                            Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-4 select mb-3">
                                    <select name="member_agama" class="form-control" required>
                                        <option value="Islam"
                                            <?=isset($edit)?$member['member_agama']=="Islam"?'selected':'':'';?>>Islam
                                        </option>
                                        <option value="Kristen Protestan"
                                            <?=isset($edit)?$member['member_agama']=="Kristen Protestan"?'selected':'':'';?>>
                                            Kristen Protestan</option>
                                        <option value="Kristen Katolik"
                                            <?=isset($edit)?$member['member_agama']=="Kristen Katolik"?'selected':'':'';?>>
                                            Kristen Katolik</option>
                                        <option value="Hindu"
                                            <?=isset($edit)?$member['member_agama']=="Hindu"?'selected':'':'';?>>Hindu
                                        </option>
                                        <option value="Budha"
                                            <?=isset($edit)?$member['member_agama']=="Budha"?'selected':'':'';?>>Budha
                                        </option>
                                        <option value="Konghucu"
                                            <?=isset($edit)?$member['member_agama']=="Konghucu"?'selected':'':'';?>>
                                            Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Nomor Handphone / Email</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="member_telp"
                                        placeholder="ex: 082248577297"
                                        value="<?=isset($edit)?$member['member_telp']:'';?>" required>
                                </div>
                                <div class="col-md-5">
                                    <input type="email" class="form-control" name="member_email"
                                        placeholder="ex: ekza97@gmail.com"
                                        value="<?=isset($edit)?$member['member_email']:'';?>">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Alamat Lengkap</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="member_alamat"
                                        placeholder="ex: Jl. Kenangan No 01 Manokwari"
                                        value="<?=isset($edit)?$member['member_alamat']:'';?>" required>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">File KTP</label>
                                <div class="col-md-9">
                                    <?php if(isset($edit)): ?>
                                    <div class="mb-4">
                                        <img src="<?=base_url('uploads/').$member['member_ktp'];?>" alt="File KTP"
                                            width="250" height="150">
                                    </div>
                                    <?php endif; ?>
                                    <input type="file" class="form-control" name="member_ktp"
                                        <?=isset($edit)?'':'required';?>>
                                    <small class="form-text text-muted ml-3">Ukuran maksimal file <strong>2 MB.</strong>
                                        Format file yang di ijinkan <strong>.jpg .jpeg .png</strong></small>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-md-9 ml-auto">
                                    <button type="reset" class="btn btn-secondary"><i class="fas fa-times"></i>
                                        Batal</button>
                                    <button type="submit" class="btn btn-primary float-right"><i
                                            class="fas fa-save"></i>
                                        Daftar
                                        Formulir</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

</section>