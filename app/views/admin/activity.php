<?php require APPROOT . '/views/admin/includes/header.php'; ?>
<?php require APPROOT . '/views/admin/includes/navigation.php'; ?>
<?php require APPROOT . '/views/admin/includes/sidebar.php'; ?>

<?php foreach ($data['lastActivity'] as $activity) : endforeach; ?>

<main>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Charts</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Charts</li>
        </ol>

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
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart Sessions
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                    <div class="card-footer small text-muted">Updated
                        <?= date_format(date_create($activity->date), 'd.m.Y'); ?> at
                        <?= $activity->time ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-pie me-1"></i>
                        Pie Chart Sessions
                    </div>
                    <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                    <div class="card-footer small text-muted">Updated
                        <?= date_format(date_create($activity->date), 'd.m.Y'); ?> at
                        <?= $activity->time ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php require APPROOT . '/views/admin/includes/footer.php'; ?>