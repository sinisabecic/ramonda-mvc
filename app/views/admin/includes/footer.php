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
    <pre id="sessionsCount1">
                        <?= $data['sessions'][0]->count_of_logins ?? 0 ?>
                    </pre>
    <pre id="sessionsCount2">
                        <?= $data['sessions'][1]->count_of_logins ?? 0 ?>
                    </pre>
    <pre id="sessionsCount3">
                        <?= $data['sessions'][2]->count_of_logins ?? 0 ?>
                    </pre>
    <pre id="sessionsCount4">
                        <?= $data['sessions'][3]->count_of_logins ?? 0 ?>
                    </pre>
    <pre id="sessionsCount5">
                        <?= $data['sessions'][4]->count_of_logins ?? 0 ?>
                    </pre>
    <pre id="sessionsCount6">
                        <?= $data['sessions'][5]->count_of_logins ?? 0 ?>
                    </pre>
    <pre id="sessionsCount7">
                        <?= $data['sessions'][6]->count_of_logins ?? 0 ?>
                    </pre>
    <pre id="sessionsCount8">
                        <?= $data['sessions'][7]->count_of_logins ?? 0 ?>
                    </pre>
    <pre id="sessionsCount9">
                        <?= $data['sessions'][8]->count_of_logins ?? 0 ?>
                    </pre>
    <pre id="sessionsCount10">
                        <?= $data['sessions'][9]->count_of_logins ?? 0 ?>
                    </pre>
    <pre id="sessionsCount11">
                        <?= $data['sessions'][10]->count_of_logins ?? 0 ?>
                    </pre>
    <pre id="sessionsCount12">
                        <?= $data['sessions'][11]->count_of_logins ?? 0 ?>
                    </pre>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js">
</script>
<script src="<?= ASSETS_URL; ?>/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?= ASSETS_URL; ?>/demo/chart-bar-demo.js"></script>
<script src="<?= ASSETS_URL; ?>/demo/chart-area-demo.js"></script>
<script src="<?= ASSETS_URL; ?>/demo/chart-pie-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= ASSETS_URL; ?>/js/datatables-simple-demo.js"></script>
<script src="<?= ASSETS_URL; ?>/js/functions.js"></script>