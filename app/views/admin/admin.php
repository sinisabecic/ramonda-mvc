<?php require APPROOT . '/views/admin/includes/header.php'; ?>
<?php require APPROOT . '/views/admin/includes/navigation.php'; ?>
<?php require APPROOT . '/views/admin/includes/sidebar.php'; ?>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <a class="text-white no-underline" href="<?= ROOT ?>/admin/users">
                            Users
                        </a>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white" href="<?= ROOT ?>/admin/register">
                            Add user
                        </a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <a class="text-white no-underline" href="#">
                            Posts
                        </a>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white" href="#">
                            Add post
                        </a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Sessions</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white" href="<?= ROOT ?>/admin/sessions">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Danger Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Area Chart of Sessions
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart of Sessions
                    </div>

                    <div class="card-body">
                        <canvas id="myBarChart" width="100%" height="40">
                        </canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <?= $data['table-name']; ?>
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="display compact">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Phone</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data['users'] as $user) : ?>
                        <tr>
                            <td><?= $user->name; ?></td>
                            <td><?= $user->username; ?></td>
                            <td>
                                <a href="mailto:<?php echo $user->email ?>" class="text-dark">
                                    <?= $user->email; ?>
                                </a>
                            </td>
                            <td>
                                <?= $user->address; ?>
                            </td>
                            <td>
                                <?= $user->city; ?>
                            </td>
                            <td>
                                <?= $user->country; ?>
                            </td>
                            <td>
                                <a href="tel:<?php echo $user->phone ?>" class="text-dark">
                                    <?php echo $user->phone ?>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>



<?php require APPROOT . '/views/admin/includes/footer.php'; ?>