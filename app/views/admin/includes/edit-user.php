<!-- Modal for edit user -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel"></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= ROOT ?>/users/update" method="POST">

                    <input class="form-control" id="id" name="id" type="text" placeholder="Enter your full name"
                        hidden />

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="name" name="name" type="text"
                                    placeholder="Enter your full name" />
                                <label for="name">Full name</label>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="email" name="email" type="email"
                                    placeholder="Enter your e-mail address" />
                                <label for="email">E-mail</label>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <select class="form-select" name="country" id="country" type="text"
                                    placeholder="Select country">

                                    <?php foreach ($countries as $key => $country) : ?>

                                    <option value="<?= htmlspecialchars($country) ?>, <?= $key ?>"
                                        title="<?= htmlspecialchars($country) ?>">
                                        <?= htmlspecialchars($country) ?>
                                    </option>

                                    <?php endforeach; ?>
                                </select>
                                <label for="country">Country</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="city" name="city" type="text"
                                    placeholder="Enter your city" />
                                <label for="city">City</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="zip" name="zip" type="number" min="1000" max="99999"
                                    placeholder="Enter your zip code" />
                                <label for="zip">Zip code</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="phone" name="phone" type="text"
                                    placeholder="Enter your last name" />
                                <label for="phone">Phone</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="address" name="address" type="text"
                            placeholder="name@example.com" />
                        <label for="address">Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="username" name="username" type="text"
                            placeholder="name@example.com" />
                        <label for="username">Username</label>
                        <small class="text-danger"></small>
                    </div>
                    <!-- <div class="row mb-3" hidden>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="password" name="password" type="password"
                                    placeholder="Create a password" />
                                <label for="password">Password</label>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="confirmPassword" name="confirmPassword" type="password"
                                    placeholder="Confirm password" />
                                <label for="confirmPassword">Confirm Password</label>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                    </div> -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mt-4 mb-0">
                                <div class="d-grid form-floating">
                                    <select class="form-select" name="is_admin" id="is_admin" type="text"
                                        placeholder="Select role (default is user)">
                                        <option value="0" selected>User</option>
                                        <option value="1">Administrator</option>
                                    </select>
                                    <label for="is_admin">Role</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" id="saveUser" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>