<?php require APPROOT . '/views/admin/includes/header.php'; ?>
<?php require APPROOT . '/views/admin/includes/countries.php'; ?>
<?php require APPROOT . '/views/admin/includes/navigation.php'; ?>
<?php require APPROOT . '/views/admin/includes/sidebar.php'; ?>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $data['page'] ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= ROOT ?>/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">List users</li>
        </ol>

        <!-- <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information
                about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                .
            </div>
        </div> -->
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Table of all users
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" name="" id="selectAllUsers">
                            </th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Phone</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php foreach ($data['users'] as $user) : ?>
                        <tr class="row-user" data-id="<?= $user->id ?>">
                            <td>
                                <input type="checkbox" name="user_id[]" id="delete_user" data-id="<?= $user->id ?>">
                            </td>
                            <td class="d-flex justify-content-center">
                                <img src="<?= $user->image ?>" class="img-fluid rounded-circle" alt="" width="42px"
                                    height="42px">
                            </td>
                            <td><?= $user->name; ?></td>
                            <td><?= $user->username; ?></td>
                            <td>
                                <a href=" mailto:<?php echo $user->email ?>" class="text-dark">
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
                            <td class="d-flex justify-content-center">
                                <div class="d-inline-flex">
                                    <div class="px-1">
                                        <a href="#!" id="edituser" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#editModal" data-id="<?= $user->id ?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </div>

                                    <div class="px-1">
                                        <a href="#!" onclick="deleteUser('<?= $user->id; ?>')" class="text-danger">
                                            <i class="bi bi-x-square-fill"></i>
                                        </a>
                                    </div>
                                </div>
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