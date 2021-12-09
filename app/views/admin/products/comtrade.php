<?php require APPROOT . '/views/admin/includes/header.php'; ?>
<?php require APPROOT . '/views/admin/includes/countries.php'; ?>
<?php require APPROOT . '/views/admin/includes/navigation.php'; ?>
<?php require APPROOT . '/views/admin/includes/sidebar.php'; ?>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $data['page']; ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= ROOT ?>/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">List products</li>
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
                            <th>Naziv</th>
                            <th>Proizvođač</th>
                            <th>Kategorija</th>
                            <th>VPC + PDV</th>
                            <th>VPC</th>
                            <th>GS</th>
                            <th>Barkod</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Naziv</th>
                            <th>Proizvođač</th>
                            <th>Kategorija</th>
                            <th>VPC + PDV</th>
                            <th>VPC</th>
                            <th>GS</th>
                            <th>Barkod</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                    <!--//* functions.js  -->
                    <tbody id="main">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


<?php require APPROOT . '/views/admin/includes/footer.php'; ?>
<?php require APPROOT . '/views/admin/includes/edit-user.php'; ?>