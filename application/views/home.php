<?php $this->load->view('_part/header'); ?>
<script>
function exit() {
    Swal.fire({
        title: 'Konfirmasi Keluar',
        text: "Anda yakin ingin keluar dari aplikasi ?",
        icon: 'warning',
        allowOutsideClick: false,
        showCancelButton: true,
        cancelButtonColor: '#3085d6',
        confirmButtonColor: '#d33',
        cancelButtonText: 'Tidak',
        confirmButtonText: 'Iya, Keluar',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = "<?=base_url('admin/keluar');?>";
        }
    })
}
</script>
<!-- navbar-->
<?php if($this->session->flashdata('success')):?>
<div class="flash-data-berhasil" data-berhasil="<?= $this->session->flashdata('success'); ?>"></div>
<?php endif;?>
<?php if($this->session->flashdata('error')):?>
<div class="flash-data-gagal" data-gagal="<?= $this->session->flashdata('error'); ?>"></div>
<?php endif;?>
<header class="header">
    <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#"
            class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a
            href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">Kursus Mobil</a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
            <li class="nav-item">
                <!-- <form id="searchForm" class="ml-auto d-none d-lg-block">
                    <div class="form-group position-relative mb-0">
                        <button type="submit" style="top: -3px; left: 0;"
                            class="position-absolute bg-white border-0 p-0"><i
                                class="o-search-magnify-1 text-gray text-lg"></i></button>
                        <input type="search" placeholder="Search ..."
                            class="form-control form-control-sm border-0 no-shadow pl-4">
                    </div>
                </form> -->
            </li>
            <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img
                        src="<?=base_url();?>assets/backend/img/avatar-6.jpg" alt="Jason Doe" style="max-width: 2.5rem;"
                        class="img-fluid rounded-circle shadow"></a>
                <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong
                            class="d-block text-uppercase headings-font-family"><?= $this->session->userdata('fullname'); ?></strong><small><?= $this->session->userdata('username'); ?></small></a>
                    <div class="dropdown-divider"></div>
                    <!-- <a href="#" class="dropdown-item">Settings</a>
					<a href="#" class="dropdown-item">Activity log </a> -->
                    <div class="dropdown-divider"></div><a href="#" class="dropdown-item" onclick="exit()"
                        id="exit">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
</header>
<div class="d-flex align-items-stretch">
    <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MENU
            UTAMA
        </div>
        <ul class="sidebar-menu list-unstyled">
            <li class="sidebar-list-item"><a
                    href="<?=$this->session->userdata('akses')=="admin"?base_url('admin'):base_url('member');?>"
                    class="sidebar-link text-muted <?=isset($home)?'active':'';?>"><i
                        class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
            <?php if($this->session->userdata('akses')=="admin"): ?>
            <li class="sidebar-list-item"><a href="<?=base_url('admin/list_member');?>"
                    class="sidebar-link text-muted <?=isset($listMember)?'active':'';?>"><i
                        class="o-survey-1 mr-3 text-gray"></i><span>Member</span></a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
            <?php $this->load->view($content); ?>
        </div>
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left text-primary">
                        <p class="mb-2 mb-md-0">PT. Kursus Mobil Professional &copy; <?= date('Y'); ?></p>
                    </div>
                    <div class="col-md-6 text-center text-md-right text-gray-400">
                        <p class="mb-0">Design by <a href="https://bootstrapious.com/admin-templates"
                                class="external text-gray-400">Bootstrapious</a></p>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>



<?php $this->load->view('_part/footer'); ?>