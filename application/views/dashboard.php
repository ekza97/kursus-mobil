<?php if($this->session->userdata('akses')=="admin"): ?>
<section class="py-5">
    <div class="row">
        <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
            <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-violet"></div>
                    <div class="text">
                        <h6 class="mb-0">Jumlah Pendaftar</h6><span
                            class="text-gray"><?= number_format($jml_pendaftar,0,',','.'); ?> Orang</span>
                    </div>
                </div>
                <div class="icon text-white bg-violet"><i class="fas fa-clipboard"></i></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
            <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-green"></div>
                    <div class="text">
                        <h6 class="mb-0">Pendaftar Baru</h6><span
                            class="text-gray"><?= number_format($jml_pendaftar_baru,0,',','.'); ?> Orang</span>
                    </div>
                </div>
                <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
            <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-blue"></div>
                    <div class="text">
                        <h6 class="mb-0">Pendaftar Lama</h6><span
                            class="text-gray"><?= number_format($jml_pendaftar_lama,0,',','.'); ?> Orang</span>
                    </div>
                </div>
                <div class="icon text-white bg-blue"><i class="fa fa-clipboard"></i></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
            <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-red"></div>
                    <div class="text">
                        <h6 class="mb-0">Jumlah Pengguna</h6><span
                            class="text-gray"><?= number_format($jml_pengguna,0,',','.'); ?> Orang</span>
                    </div>
                </div>
                <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
            </div>
        </div>

    </div>
</section>
<?php endif; ?>