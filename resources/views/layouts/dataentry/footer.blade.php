        </section>
        <!-- /.content -->
    </div>
    <!-- /.container -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="container">
        <div class="pull-right hidden-xs">
            <strong><a> {{ session('jobnumber') ? 'Job No. : '.session('jobnumber')->job_number : 'Version 3.0.0' }} </a></strong>
        </div>
        <div class="pull-right hidden-xs">
            <strong><a> {{ session('start') ? session('start') : 'n/a' }} </a></strong>
        </div>
        <strong><a> {{ session('batch_name') ? 'Batch Name : '.session('batch_name') : 'CCC Data Management Services Inc.' }} </a></strong>
    </div>
    <!-- /.container -->
</footer>