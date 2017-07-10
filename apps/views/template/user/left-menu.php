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
                        <a href='<?= base_url() ?>user/dashboard'><i class='icon-home-3'></i><span>Beranda</span></a>
                    </li>
                    
                    <li>
                        <a href='<?= base_url() ?>user/order'><i class="fa fa-adjust"></i><span>Order</span> <span class="label label-danger">Coming Soon</span></a>
                    </li>
                    <li class='has_sub'>
                        <a href='javascript:void(0);'><i class="fa fa-anchor"></i><span>Produk</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                        </a>
                            <ul>
                                <li>
                                    <!-- <a href='<?= base_url() ?>back/user' class='active'><span>User</span></a> -->
                                    <a href='<?= base_url() ?>user/produk' ><span>Produk List</span></a>
                                </li>
                                <li>
                                    <a href='<?= base_url() ?>user/kategori'><span>Kategori</span></a>
                                </li>
                                <li>
                                    <a href='<?= base_url() ?>user/media'><span>Media Management</span></a>
                                </li>
                            </ul>
                    </li>
                    
                    <li>
                        <a href='<?= base_url() ?>user/statistik'><i class="fa fa-archive"></i><span>Statistik <span class="label label-danger">Coming Soon</span></span></a>
                    </li>
                    <li>
                        <a href='<?= base_url() ?>user/promosi'><i class="fa fa-bar-chart-o"></i></i><span>Promosi <span class="label label-danger">Coming Soon</span></span></a>
                    </li>
                    <li>
                        <a href='<?= base_url() ?>user/channel'><i class="fa fa-bell"></i><span>Channel <span class="label label-danger">Coming Soon</span></span></a>
                    </li>
                    
                    <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
            
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