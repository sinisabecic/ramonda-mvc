<?php require APPROOT . '/views/admin/includes/header.php'; ?>
<?php require APPROOT . '/views/admin/includes/navigation.php'; ?>
<?php require APPROOT . '/views/admin/includes/sidebar.php'; ?>

<?php foreach ($data['lastActivity'] as $activity) : endforeach; ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $data['page'] ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= ROOT ?>/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">List <?= $data['page'] ?></li>
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
                Table of all <?= $data['page'] ?>
            </div>
            <div class="card-body">

                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Logged at</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Logged at</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php foreach ($data['sessionsAll'] as $session) : ?>

                        <tr>
                            <td><?= $session->s_id; ?></td>
                            <td><?= $session->user_id; ?></td>
                            <td>
                                <?= $session->username; ?>
                            </td>
                            <td>
                                <?= $session->name; ?>
                            </td>
                            <td>
                                <?= $session->country; ?>
                            </td>
                            <td>
                                <?= $session->city; ?>
                            </td>
                            <td>
                                <?= date_format(date_create($session->logged_at), 'd.m.Y H:i:s'); ?>
                            </td>
                            <td class="d-flex justify-content-center">
                                <div class="d-inline-flex">
                                    <!-- <div class="px-1">
                                        <a href="#" id="editsession" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#editModal" data-id="<?= $session->s_id ?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </div> -->

                                    <div class="px-1">
                                        <a href="#" onclick="deleteSession('<?= $session->s_id; ?>')"
                                            class="text-danger">
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

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                Area Chart Sessions
            </div>
            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
            <div class="card-footer small text-muted">Updated
                <?= date_format(date_create($activity->date), 'd.m.Y'); ?> at
                <?= $activity->time ?></div>
        </div>

    </div>
</main>


<?php require APPROOT . '/views/admin/includes/edit-user.php'; ?>
<?php require APPROOT . '/views/admin/includes/footer.php'; ?>