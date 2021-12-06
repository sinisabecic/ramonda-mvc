<!-- Modal for edit user -->
<div class="modal fade" id="<?= $user->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
                <?php var_dump($data['user_id']) ?>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo ROOT ?>/admin/update" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputFirstName" name="name" type="text"
                                    placeholder="Enter your full name" />
                                <label for="inputFirstName">Full name</label>
                                <small class="text-danger"><?php echo $data['nameError'] ?? null; ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="inputEmail" name="email" type="email"
                                    placeholder="Enter your e-mail address" />
                                <label for="inputEmail">E-mail</label>
                                <small class="text-danger"><?= $data['emailError'] ?? null; ?></small>
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
                        <small class="text-danger"><?= $data['usernameError'] ?? null; ?></small>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPassword" name="password" type="password"
                                    placeholder="Create a password" />
                                <label for="inputPassword">Password</label>
                                <small class="text-danger"><?= $data['passwordError']; ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPasswordConfirm" name="confirmPassword"
                                    type="password" placeholder="Confirm password" />
                                <label for="inputPasswordConfirm">Confirm Password</label>
                                <small class="text-danger"><?= $data['confirmPasswordError']; ?></small>
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

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>