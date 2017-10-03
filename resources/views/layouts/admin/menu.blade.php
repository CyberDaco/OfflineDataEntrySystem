<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">CCC Data Management System Inc.</li>
            <!-- Optionally, you can add icons to the links -->

            <li class="{{ setActive('admin')}}"><a href="{{ url('/admin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

            <li class="treeview {{ setActive('admin/batch')}}">
                <a href="{{ url('/admin/batch') }}"><i class="fa fa-pencil-square"></i> <span>Batches</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/batch/aunews') }}">Australian Newspapers</a></li>
                    <li><a href="{{ url('/admin/batch/interest') }}">Interest Auction Results</a></li>
                    <li><a href="{{ url('/admin/batch/recent_sales') }}">Recent Sales</a></li>
                    <li><a href="{{ url('/admin/batch/reanz') }}">REA NZ Keying</a></li>
                    <li><a href="{{ url('/admin/batch/sat_auction') }}">Saturday Auction</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-file-text"></i> <span>Exports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ setActive('admin/export/')}}"><a href="{{ url('/admin/export/interest') }}">Interest Auction Results</a></li>
                    <li class="{{ setActive('admin/export/')}}"><a href="{{ url('/admin/export/recent_sales') }}">Recent Sales</a></li>
                    <li class="{{ setActive('admin/export/')}}"><a href="{{ url('/admin/export/sat_auction') }}">Saturday Auction</a></li>
                    <li class="{{ setActive('admin/export/')}}"><a href="{{ url('/admin/export/reanz') }}">REA NZ Keying</a></li>
                    <li class="{{ setActive('admin/export/')}}"><a href="{{ url('/admin/export/aunews') }}">Australian Newspapers</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-users"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/report/stats') }}">EP90 Stats Data</a></li>
                    <li><a href="{{ url('/admin/report/production') }}">Production Report</a></li>
                    <li><a href="{{ url('/admin/report/recs_per_hour') }}">Records Per Hour</a></li>
                    <li><a href="{{ url('/admin/report/job_export') }}">Job Export</a></li>
                    <li><a href="{{ url('/admin/report/job_number') }}">Job Number Report</a></li>
                    <li><a href="{{ url('/admin/report/productivity') }}">Productivity Report</a></li>
                    <li><a href="{{ url('/admin/report/dtr') }}">Daily Time Record</a></li>
                </ul>
            </li>



            <li class="treeview">
                <a href="#"><i class="fa fa-clock-o"></i> <span>Setup</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/setup/application/view') }}">Application</a></li>
                    <li><a href="{{ url('/admin/setup/sysusers/view') }}">System Users</a></li>
                    <li><a href="{{ url('/admin/setup/userprofile/view') }}">User Profile</a></li>
                    <li><a href="{{ url('/admin/setup/jobnumber/view') }}">Job Numbers</a></li>
                    <li><a href="{{ url('/admin/setup/publication/view') }}">Jobs Table</a></li>
                    <li><a href="{{ url('/admin/setup/states/view') }}">States</a></li>
                    <li><a href="{{ url('/admin/setup/aupostcode/view') }}">AU Postcode</a></li>
                    <li><a href="{{ url('/admin/setup/lookup/view') }}">Lookup</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-money"></i> <span>Utilities</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/utilities/entrylogs') }}">Entry Logs</a></li>
                    <li><a href="{{ url('/news/databasebackup') }}">Backup Database</a></li>
                    <li><a href="{{ url('/news/importdata') }}">Import Data</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-money"></i> <span>Imports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/import/reanz') }}">REA NZ Keying</a></li>
                    <li><a href="{{ url('/admin/import/recent_sales') }}">Recent Sales</a></li>
                    <li><a href="{{ url('/admin/import/saturday_auction') }}">Saturday Auction</a></li>
                    <li><a href="{{ url('/admin/import/interest') }}">Interest Auction Results</a></li>
                    <li><a href="{{ url('/admin/import/home_price') }}">Home Price</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-warning"></i> <span>Security</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Password Policy</a></li>
                    <li><a href="#">User Roles</a></li>
                    <li><a href="#">Users</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-warning"></i> <span>Lookup</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/lookup/sat_auction">REV Auction Lookup</a></li>
                    <li><a href="/admin/lookup/home_price">Home Price Guide Lookup</a></li>
                    <li><a href="/admin/lookup/sat_auction_st_extension">Sat Auction Street Extensions Lookup</a></li>
                    <li><a href="/admin/lookup/natalpha">Post Code Lookup</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>