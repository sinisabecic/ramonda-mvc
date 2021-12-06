<?php require APPROOT . '/views/admin/includes/header.php'; ?>
<?php require APPROOT . '/views/admin/includes/navigation.php'; ?>
<?php require APPROOT . '/views/admin/includes/sidebar.php'; ?>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Users</h1>
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
                            <th>Name</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data['users'] as $user) : ?>
                        <tr>
                            <td><?php echo $user->name ?></td>
                            <td><?php echo $user->username ?></td>
                            <td>
                                <a href="mailto:<?php echo $user->email ?>" class="text-dark">
                                    <?php echo $user->email ?>
                                </a>
                            </td>
                            <td><?php echo $user->address . ', ' .
                                        $user->city . ', ' .
                                        $user->country; ?></td>
                            <td>
                                <a href="tel:<?php echo $user->phone ?>" class="text-dark">
                                    <?php echo $user->phone ?>
                                </a>
                            </td>
                            <td class="d-flex justify-content-center">
                                <div class="d-inline-flex">
                                    <div class="px-1">
                                        <a href="#" data-toggle="modal" data-target="#<?= $user->id ?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </div>

                                    <?php require APPROOT . '/views/admin/includes/edit-user.php'; ?>

                                    <div class="px-1">
                                        <a href="<?= ROOT ?>/users/delete?user_id=<?= $user->id ?>" class="text-danger">
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