<?php require APPROOT . '/views/users/includes/header.php'; ?>

<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">

                                <?php
                                if (isLoggedIn())
                                    echo "Welcome " . getSession('username');
                                else
                                    echo 'Login';
                                ?>

                            </h3>
                        </div>

                        <?php
                        if (!isLoggedIn()) :
                        ?>

                        <div class="card-body">
                            <form action="<?php echo ROOT; ?>/users/login" method="POST">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputUsername" name="username" type="text"
                                        placeholder="Username" />
                                    <label for="inputUsername">Username</label>
                                    <small class="text-danger"><?php echo $data['usernameError']; ?></small>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" name="password" type="password"
                                        placeholder="Password" />
                                    <label for="inputPassword">Password</label>
                                    <small class="text-danger"><?php echo $data['passwordError']; ?></small>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                        value="" />
                                    <label class="form-check-label" for="inputRememberPassword">Remember
                                        Password</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="password.html">Forgot Password?</a>
                                    <input class="btn btn-primary" name="submit" type="submit" value="Login" />
                                </div>
                            </form>
                        </div>
                        <?php else : '';
                        endif; ?>

                        <div class="card-footer text-center py-3">
                            <?php if (!isLoggedIn()) : ?>
                            <div class="small"><a href="<?php echo ROOT ?>/users/register">Need an account? Sign up!</a>
                                <?php else : ?>
                                <div class="small"><a href="<?php echo ROOT ?>/users/logout">Logout</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</div>

<?php require APPROOT . '/views/users/includes/footer.php'; ?>