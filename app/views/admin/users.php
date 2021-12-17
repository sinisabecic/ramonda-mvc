<?php require APPROOT . '/views/admin/includes/header.php'; ?>
<?php require APPROOT . '/views/admin/includes/countries.php'; ?>
<?php require APPROOT . '/views/admin/includes/navigation.php'; ?>
<?php require APPROOT . '/views/admin/includes/sidebar.php'; ?>


<main>

    <?php if (isset($_GET['success'])) :  ?>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
    </svg>
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            Success!
        </div>
    </div>
    <?php endif; ?>

    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $data['page'] ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= ROOT ?>/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">
                <a href="<?= ROOT ?>/admin/users">List users</a>
            </li>
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
                                <img src="<?php
                                                if ($user->image === NULL) :
                                                    echo AVATAR;
                                                else :
                                                    echo UPLOADS . '/' . $user->image;
                                                endif;
                                                ?>" class="img-fluid rounded-circle" alt="" width="42px" height="42px">
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