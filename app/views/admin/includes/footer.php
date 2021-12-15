<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; <?= SITENAME ?> 2021</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>

</div>
</div>

<!--//! Primitivno. Izmijeniti cim prije   -->
<!--//* Dio koji sam napravio kako bih uzeo podatke od  -->
<div id="sessionsCount" hidden>
    <?php foreach ($data['sessions'] as $key => $sess) : ?>

    <pre id="sessionsCount<?= $key; ?>">

           <?= $sess->count_of_logins ?? 0 ?>

        </pre>

    <?php endforeach; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js">
</script>
<script src="<?= ASSETS_URL; ?>/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?= ASSETS_URL; ?>/demo/chart-bar-demo.js"></script>
<script src="<?= ASSETS_URL; ?>/demo/chart-area-demo.js"></script>
<script src="<?= ASSETS_URL; ?>/demo/chart-pie-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= ASSETS_URL; ?>/js/datatables-simple-demo.js"></script>
<script src="<?= ASSETS_URL; ?>/js/jquery.mask.js"></script>
<script src="<?= ASSETS_URL; ?>/js/functions.js"></script>
<?php require APPROOT . '/views/admin/includes/edit-user.php'; ?>
<?php require APPROOT . '/views/admin/includes/add-user.php'; ?>