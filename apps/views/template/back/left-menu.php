 <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               <!-- Search form -->
                <form role="search" class="navbar-form">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="clearfix"></div>
                
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>                    
                    <li>
                        <a href='<?= base_url() ?>back/dashboard'><i class='icon-home-3'></i><span>Dashboard</span></a>
                    </li>
                    <li class='has_sub'>
                        <a href='javascript:void(0);'><i class='icon-home-3'></i><span>New</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                        </a>
                            <ul>
                                <li>
                                    <a href='<?= base_url() ?>back/user' ><span>User</span></a>
                                </li>
                                <li>
                                    <a href='<?= base_url() ?>back/order'><span>Order</span></a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a href='<?= base_url() ?>back/dashboard'><i class='icon-home-3'></i><span>Third Party</span></a>
                    </li>
                    <li class='has_sub'>
                        <a href='javascript:void(0);'><i class='icon-feather'></i><span>Appearance</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href='alerts.html'><span>Pages</span></a>
                            </li>
                            <li><a href='buttons.html'><span>Category</span></a>
                            </li>
                            <li><a href='calendar.html'><span>Menu</span></a>
                            </li>
                            
                        </ul>
                    <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
            <div class="portlets">
                <div id="chat_groups" class="widget transparent nomargin">
                    <h2>Social Media</h2>
                    <div class="widget-content">
                        <ul class="list-unstyled">
                            <li><a href="javascript:;"><i class="fa fa-circle-o text-red-1"></i> Social Page</a></li>
                            <!-- <li><a href="javascript:;"><i class="fa fa-circle-o text-blue-1"></i> Family</a></li>
                            <li><a href="javascript:;"><i class="fa fa-circle-o text-green-1"></i> Friends</a></li> -->
                        </ul>
                    </div>
                </div>

                <div id="recent_tickets" class="widget transparent nomargin">
                    <h2>Recent User</h2>
                    <div class="widget-content">
                        <ul class="list-unstyled">
                            <li>
                                <a href="javascript:;">Fatchul Amin</a>
                            </li>
                            <!-- <li>
                                <a href="javascript:;">Server down, need help!<span>My server is not responding for the last...</span></a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div><br><br><br>
        </div>
            <div class="left-footer">
                <div class="progress progress-xs">
                  <div class="progress-bar bg-green-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="progress-precentage">80%</span>
                  </div>
                  
                  <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
                </div>
            </div>
        </div>