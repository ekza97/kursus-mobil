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
                <h2 class="mb-4">Welcome back!</h2>
                <form id="loginForm" action="<?=base_url('login/cekLogin');?>" method="post" class="mt-4">
                    <div class="form-group mb-4">
                        <input type="text" name="username" placeholder="Username"
                            class="form-control border-0 shadow form-control-lg text-violet" autofocus>
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" name="password" placeholder="Password"
                            class="form-control border-0 shadow form-control-lg text-violet">
                    </div>
                    <!-- <div class="form-group mb-4">
                        <div class="custom-control custom-checkbox">
                            <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                            <label for="customCheck1" class="custom-control-label">Remember Me</label>
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow px-5">Masuk</button>
                </form>
                <p class="mt-4">Belum punya akun ? <a href="<?=base_url('register');?>"> Daftar</a></p>
            </div>
        </div>
        <!-- <p class="mt-5 mb-0 text-gray-400 text-center">Design by <a href="https://bootstrapious.com/admin-templates"
                class="external text-gray-400">Bootstrapious</a> & Your company</p> -->
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)                 -->
    </div>
</div>



<?php $this->load->view('_part/footer'); ?>