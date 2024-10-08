<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin/dashboard') ?>" class="logo" style="background-color: #28a745;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><i class="fa fa-internet-explorer"></i>Vote</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><i class="fa fa-internet-explorer"></i><b>-Voting </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #28a745">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="background-color: #28a745">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('assets/template/backend/') ?>dist/img/avatar5.png" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $this->session->userdata('userName') ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header" style="background-color: #28a745">
                            <img src="<?php echo base_url('assets/template/backend/') ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
                            <p>
                                <?php echo $this->session->userdata('userName') ?>
                                <small><?php echo $this->session->userdata('identity') ?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo base_url('admin/auth/change_password') ?>" class="btn btn-default btn-flat">Change Password</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url('admin/auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>