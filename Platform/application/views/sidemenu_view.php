
          <!-- ========== Left Sidebar Start ========== -->
          <div class="left side-menu">
              <div class="logo">
                <a href="<?php echo base_url(); ?>" title="Ballorah Dashboard">Ball<span>orah</span></a>
              </div>
              <div class="sidebar-inner slimscrollleft">
                  <!--- Sidemenu -->
                  <div id="sidebar-menu">

                      <ul id="navbar" class="sidebar-nav">
                          <li>
                              <a href="<?php echo base_url(); ?>" class="<?php echo  ($active == "dashboard" ? 'active' : ''); ?>"><i class="fa fa-tachometer"></i> <span> Dashboard </span> </a>
                          </li>
							            <li class="has-childs <?php echo  ($active_parent == "cases" ? 'active' : ''); ?>">
                              <a href="javascript:void(0);" class="<?php echo  ($active_parent == "cases" ? 'active' : ''); ?>"><i class="fa fa-file-text"></i><span>Buses</span> <span class="menu-arrow"></span></a>
                              <ul class="<?php echo  ($active_parent == "cases" ? 'active' : ''); ?>">
                                  <li class="<?php echo  ($active == "case_add" ? 'active' : ''); ?>"><a href="<?php echo base_url('cases/add'); ?>" class="<?php echo  ($active == "case_add" ? 'active' : ''); ?>">Add New</a></li>
                                  <li class="<?php echo  ($active == "case_list" ? 'active' : ''); ?>"><a href="<?php echo base_url('cases'); ?>" class="<?php echo  ($active == "case_list" ? 'active' : ''); ?>">List All</a></li>
                              </ul>
                          </li>






						               <li class="has-childs">
                              <a href="javascript:void(0);"><i class="fa fa-user"></i><span>Users</span> </a>
                          </li>
                      </ul>
                      <div class="clearfix"></div>
                  </div>
                  <!-- Sidebar -->
                  <div class="clearfix"></div>

              </div>

          </div>
          <!-- Left Sidebar End -->
