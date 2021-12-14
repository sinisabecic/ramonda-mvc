<?php require APPROOT . '/views/users/includes/header.php'; ?>


<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create Account</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo ROOT ?>/users/register" method="POST" class="register-form">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control inputFirstName" id="inputFirstName" name="name"
                                                type="text" placeholder="Enter your full name" />
                                            <label for="inputFirstName">Full name</label>
                                            <small class="text-danger"><?php echo $data['nameError']; ?></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputEmail" name="email" type="email"
                                                placeholder="Enter your e-mail address" />
                                            <label for="inputEmail">E-mail</label>
                                            <small class="text-danger"><?php echo $data['emailError']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control selectpicker" name="country" id="inputCountry"
                                                type="text" placeholder="Enter your address" />
                                            <label for="inputCountry">Country</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputCity" name="city" type="text"
                                                placeholder="Enter your city" />
                                            <label for="inputCity">City</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputZip" name="zip" type="number"
                                                min="1000" max="99999" placeholder="Enter your zip code" />
                                            <label for="inputZip">Zip code</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control inputPhone" id="inputPhone" name="phone"
                                                type="text" placeholder="Enter your last name" />
                                            <label for="inputPhone">Phone</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputAddress" name="address" type="text"
                                        placeholder="name@example.com" />
                                    <label for="inputAddress">Address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputUsername" name="username" type="text"
                                        placeholder="name@example.com" />
                                    <label for="inputUsername">Username</label>
                                    <small class="text-danger"><?php echo $data['usernameError']; ?></small>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPassword" name="password"
                                                type="password" placeholder="Create a password" />
                                            <label for="inputPassword">Password</label>
                                            <small class="text-danger"><?php echo $data['passwordError']; ?></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPasswordConfirm" name="confirmPassword"
                                                type="password" placeholder="Confirm password" />
                                            <label for="inputPasswordConfirm">Confirm Password</label>
                                            <small
                                                class="text-danger"><?php echo $data['confirmPasswordError']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <input class="btn btn-primary btn-block" type="submit" name="submit"
                                            value="Create Account" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="<?php echo ROOT; ?>/login">Have an account? Go to login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


<?php require APPROOT . '/views/users/includes/footer.php'; ?>