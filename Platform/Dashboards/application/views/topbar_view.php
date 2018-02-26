
          <!-- Main Container start -->
          <div id="content-wrapper" class="main-container">
            <div class="topbar">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <div class="col-lg-6"><h1><?php echo $title; ?></h1></div>
                  <div class="col-lg-6 text-right">
                    <a class="btn btn-link disabled_link" href="<?php echo base_url('notifications'); ?>"><i class="fa fa-1-5 fa-bell-o" aria-hidden="true"></i><span class="badge badge-small badge-10">22</span><br><small>Notifications</small></a>
                    <a class="btn btn-link disabled_link" href="<?php echo base_url('reports'); ?>"><i class="fa fa-1-5 fa-line-chart" aria-hidden="true"></i><br><small>Reports</small></a>
                    <a class="btn btn-link disabled_link" href="<?php echo base_url('tasks'); ?>"><i class="fa fa-1-5 fa-tasks" aria-hidden="true"></i><br><small>Tasks</small></a>
                    <a class="btn btn-link disabled_link" href="<?php echo base_url('messages'); ?>"><i class="fa fa-1-5 fa-envelope-o" aria-hidden="true"></i><span class="badge badge-small badge-5">7</span><br><small>Messages</small></a>
                    <a class="btn btn-link" href="<?php echo base_url('setting'); ?>"><i class="fa fa-1-5 fa-wrench" aria-hidden="true"></i><br><small>Settings</small></a>
                    <a class="btn btn-link disabled_link" href="<?php echo base_url('user/profile'); ?>"><i class="fa fa-2 fa-user" aria-hidden="true"></i><span class="sr-only">User Profile</span></a>
                    <a class="btn btn-link" href="<?php echo base_url('user/logout'); ?>"><i class="fa fa-1-5 fa-sign-out" aria-hidden="true"></i><br><small>Logout</small></a>
                  </div>
                </div>
            </div>