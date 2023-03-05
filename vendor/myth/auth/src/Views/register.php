<?= $this->extend('templates/starting_page_layout') ?>

<?= $this->section('navaction') ?>
<a href="<?= base_url('/'); ?>" class="btn btn-primary pull-right">
    Scan QR
</a>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <div class="card">
                        <div class="card-header card-header-primary mb-48">
                            <h4 class="card-title"><?= lang('Auth.register') ?></h4>
                            <p class="card-category">Buat akun petugas</p>
                        </div>
                        <div class="card-body mx-5 my-3">

                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <form action="<?= url_to('register') ?>" method="post">
                                <?= csrf_field() ?>

                                <div class="form-group mt-4">
                                    <label for="email"><?= lang('Auth.email') ?></label>
                                    <input type="email" id="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="example@email.com" value="<?= old('email') ?>">
                                    <?php if (session('errors.email')) : ?>
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>
                                    <?php else : ?>
                                        <small id="emailHelp" class="form-text text-muted">
                                            <?= lang('Auth.weNeverShare') ?>
                                        </small>
                                    <?php endif ?>
                                </div>

                                <div class="form-group mt-4">
                                    <label for="username"><?= lang('Auth.username') ?></label>
                                    <input type="text" id="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="yourusername" value="<?= old('username') ?>">
                                    <div class="invalid-feedback">
                                        <?= session('errors.username') ?>
                                    </div>
                                </div>

                                <div class="form-group mt-4">
                                    <label for="password"><?= lang('Auth.password') ?></label>
                                    <input type="password" id="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" autocomplete="off">
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>

                                <div class="form-group mt-4">
                                    <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                    <input type="password" id="pass_confirm" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" autocomplete="off">
                                    <div class="invalid-feedback">
                                        <?= session('errors.pass_confirm') ?>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                            </form>

                            <hr>

                            <p>Sudah mendaftar? <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>