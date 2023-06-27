<?php $this->view('includes/header') ?>
<div class="container">
    <!-- Login Form Start -->
    <div class="row justify-content-center wrapper" id="login-box">
        <div class="col-lg-10 my-auto myShadow">
            <div class="row">
                <div class="col-lg-7 bg-white p-4">
                    <h1 class="text-center font-weight-bold " style="color : #080d4e">Authentification</h1>
                    <hr class="my-3" />
                    <form  method="post" class="px-3" id="login-form">
                        <?php if (count($errors) > 0) : ?>
                            <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                                <strong>Errors:</strong>
                                <?php foreach ($errors as $error) : ?>
                                    <?= $error ?>
                                <?php endforeach; ?>
                                <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </span>
                            </div>
                        <?php endif; ?>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg fa-fw"></i></span>
                            </div>
                            <input type="email" id="email" name="email" value="<?= get_var('email') ?>" class="form-control rounded-0" placeholder="E-Mail" required />
                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                            </div>
                            <input type="password" id="password" name="password" value="<?= get_var('passwords') ?>" class="form-control rounded-0" minlength="5" placeholder="Password" required autocomplete="off" />
                        </div>
                        <div class="form-group clearfix">

                            <div class="forgot float-right">
                                <a href="#" id="forgot-link">mot de passe oublié ?</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="login-btn" value="se connecter" class="btn btn-primary btn-lg btn-block myBtn" />
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                <img src="<?= ROOT ?>/img/undraw_login.svg" class=" d-block mx-auto  " style="width:100%;">


                </div>
            </div>
        </div>
    </div>
    <!-- Login Form End -->

    
    < <!-- Forgot Password Form Start -->
        <div class="row justify-content-center wrapper" id="forgot-box" style="display: none;">
            <div class="col-lg-10 my-auto myShadow">
                <div class="row">
                    <div class="col-lg-7 bg-white p-4">
                        <h1 class="text-center font-weight-bold text-primary">Forgot Your Password?</h1>
                        <hr class="my-3" />
                        <p class="lead text-center text-secondary">To reset your password, enter the registered e-mail
                            adddress and we will send you password reset instructions on your e-mail!</p>
                        <form action="#" method="post" class="px-3" id="forgot-form">
                            <div id="forgotAlert"></div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg"></i></span>
                                </div>
                                <input type="email" id="femail" name="email" value="<?= get_var('email') ?>" class="form-control rounded-0" placeholder="E-Mail" required />
                            </div>
                            <div class="form-group">
                                <input type="submit" id="forgot-btn" value="Reset Password" class="btn btn-primary btn-lg btn-block myBtn" />
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Reset Password!</h1>
                        <hr class="my-4 bg-light myHr" />
                        <button class="btn btn-outline-light btn-lg font-weight-bolder myLinkBtn align-self-center" id="back-link">Back</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forgot Password Form End -->
</div>
<?php $this->view('includes/footer') ?>