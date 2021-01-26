<?php $this->load->view('_part/header'); ?>
<div class="page-holder d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-5 col-lg-7 mx-auto mb-5 mb-lg-0">
                <div class="pr-lg-5"><img src="<?=base_url();?>assets/backend/img/illustration.svg" alt=""
                        class="img-fluid"></div>
            </div>
            <?php if($this->session->flashdata('success')):?>
            <div class="flash-data-berhasil" data-berhasil="<?= $this->session->flashdata('success'); ?>"></div>
            <?php endif;?>
            <?php if($this->session->flashdata('error')):?>
            <div class="flash-data-gagal" data-gagal="<?= $this->session->flashdata('error'); ?>"></div>
            <?php endif;?>
            <div class="col-lg-5 px-lg-4">
                <h1 class="text-base text-primary text-uppercase mb-4"><a href="<?=base_url();?>">KursusMobil</a></h1>
                <h2 class="mb-4">Daftar akun</h2>
                <form id="loginForm" action="<?=base_url('register/create');?>" method="post" class="mt-4">
                    <div class="form-group mb-4">
                        <input type="text" name="user_fullname" placeholder="Nama lengkap"
                            class="form-control border-0 shadow form-control-lg text-violet" autofocus>
                    </div>
                    <!-- <div class="form-group mb-4">
                        <input type="email" name="user_email" placeholder="Email address"
                            class="form-control border-0 shadow form-control-lg text-violet">
                    </div> -->
                    <div class="form-group mb-4">
                        <input type="text" name="user_name" placeholder="Username"
                            class="form-control border-0 shadow form-control-lg text-violet">
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" name="user_password" placeholder="Password"
                            class="form-control border-0 shadow form-control-lg text-violet">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow px-5">Daftar</button>
                </form>
                <p class="mt-4">Sudah punya akun ? <a href="<?=base_url('login');?>"> Login</a></p>
            </div>
        </div>
        <!-- <p class="mt-5 mb-0 text-gray-400 text-center">Design by <a href="https://bootstrapious.com/admin-templates"
				class="external text-gray-400">Bootstrapious</a> & Your company</p> -->
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)                 -->
    </div>
</div>



<?php $this->load->view('_part/footer'); ?>