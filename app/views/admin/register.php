<?php require APPROOT . '/views/admin/includes/header.php'; ?>
<?php require APPROOT . '/views/admin/includes/navigation.php'; ?>
<?php require APPROOT . '/views/admin/includes/sidebar.php'; ?>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Registration</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo ROOT ?>/admin/users">Users</a></li>
            <li class="breadcrumb-item active">Register user</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Adding user
            </div>
            <div class="card-body">
                <form action="<?php echo ROOT ?>/admin/register" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputFirstName" name="name" type="text"
                                    placeholder="Enter your full name" />
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
                                <input class="form-control selectpicker" name="country" id="inputCountry" type="text"
                                    placeholder="Enter your address" />
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
                                <input class="form-control" id="inputZip" name="zip" type="number" min="1000"
                                    max="99999" placeholder="Enter your zip code" />
                                <label for="inputZip">Zip code</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="inputPhone" name="phone" type="text"
                                    placeholder="Enter your last name" />
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
                                <input class="form-control" id="inputPassword" name="password" type="password"
                                    placeholder="Create a password" />
                                <label for="inputPassword">Password</label>
                                <small class="text-danger"><?php echo $data['passwordError']; ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPasswordConfirm" name="confirmPassword"
                                    type="password" placeholder="Confirm password" />
                                <label for="inputPasswordConfirm">Confirm Password</label>
                                <small class="text-danger"><?php echo $data['confirmPasswordError']; ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <select class="form-control" name="role" id="roleUser" type="text"
                                        placeholder="Select role (default is user)">
                                        <option value="0" selected>User</option>
                                        <option value="1">Administrator</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input class="btn btn-primary btn-block" type="submit" name="submit"
                                        value="<?php echo $data['submit-value']; ?>" />
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</main>


<?php require APPROOT . '/views/admin/includes/footer.php'; ?>