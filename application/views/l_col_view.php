        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php foreach($user_info as $u): ?><?=base_url();?><?=$u['user_img']?><?php endforeach; ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <?php foreach($user_info as $u): ?>
                            <p>Привет, <?=$u['first_name']?></p>
                            <?php endforeach; ?>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Поиск..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <!-- Техника -->
                        <li>
                            <a href="/main/cabinet">
                                <i class="fa fa-th"></i> <span>Учет техники</span> <small class="badge pull-right bg-green">new</small>
                            </a>   
                        </li>
                        <!-- Мука по Х/З -->
                        <li>
                            <a href="/main/fabric">
                                <i class="fa fa-th"></i> <span>Отчеты по Х/З</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                      <!--  <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Показатели</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> 3-й Хлебзавод</a></li>

                            </ul>
                        </li>
 
                        <li>
                            <a href="pages/calendar.html">
                                <i class="fa fa-calendar"></i> <span>Календарь</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Почта</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                     
                            </ul>
                        </li>-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>