<?php

$this->title = $title;

?>

<div class="page-header align-items-start min-vh-50 pt-7 pb-9 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-cover.jpg');">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
                <h1 class="text-white mb-2 mt-5">Chào mừng</h1>
                <p class="text-lead text-white"></p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div id="alert"></div>
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card mt-5">
                <div class="card-header pb-0 text-start">
                    <h3 class="font-weight-bolder">Chào mừng trở lại</h3>
                    <p class="mb-0">Nhập tài khoản và mật khẩu để đăng nhập</p>
                </div>
                <div class="card-body">
                    <form id="form-login" action="/login" role="form" method="post" class="text-start">
                        <label>Email</label>
                        <div class="mb-3 form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email..." aria-label="Email">
                            <div class="form-message invalid-feedback"></div>
                        </div>
                        <label>Password</label>
                        <div class="mb-3 form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password..." aria-label="Password">
                            <div class="form-message"></div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Đăng nhập</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-4 text-sm mx-auto">
                        Đăng ký tài khoản ?
                        <a href="<?= $app->url('register') ?>" class="text-primary font-weight-bold">Đăng ký</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>