<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $con->getBaseUrl() . "index.php"; ?>">Dashboard</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "index2.html"; ?>">Dashboard2</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "index3.html"; ?>">Dashboard3</a>
                    </li>
                </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $con->getBaseUrl() . "form.html"; ?>">General Form</a>
                    </li>
                    <li><a href="form_advanced.html">Advanced Components</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "form_validation.html"; ?>">Form Validation</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "form_wizards.html"; ?>">Form Wizard</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "form_upload.html"; ?>">Form Upload</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "form_buttons.html"; ?>">Form Buttons</a>
                    </li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $con->getBaseUrl() . "general_elements.html"; ?>">General Elements</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "media_gallery.html"; ?>">Media Gallery</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "typography.html"; ?>">Typography</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "icons.html"; ?>">Icons</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "glyphicons.html"; ?>">Glyphicons</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "widgets.html"; ?>">Widgets</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "invoice.html"; ?>">Invoice</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "inbox.html"; ?>">Inbox</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "calender.html"; ?>">Calender</a>
                    </li>
                </ul>
            </li>
            <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $con->getBaseUrl() . "tables.html"; ?>">Tables</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "tables_dynamic.html"; ?>">Table Dynamic</a>
                    </li>
                </ul>
            </li>
            <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $con->getBaseUrl() . "chartjs.html"; ?>">Chart JS</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "chartjs2.html"; ?>">Chart JS2</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "morisjs.html"; ?>">Moris JS</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "echarts.html"; ?>">ECharts </a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "other_charts.html"; ?>">Other Charts </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $con->getBaseUrl() . "e_commerce.html"; ?>">E-commerce</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "projects.html"; ?>">Projects</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "project_detail.html"; ?>">Project Detail</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "contacts.html"; ?>">Contacts</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "profile.html"; ?>">Profile</a>
                    </li>
                </ul>
            </li>
            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $con->getBaseUrl() . "page_404.html"; ?>">404 Error</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "page_500.html"; ?>">500 Error</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "plain_page.html"; ?>">Plain Page</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "login.html"; ?>">Login Page</a>
                    </li>
                    <li><a href="<?php echo $con->getBaseUrl() . "pricing_tables.html"; ?>">Pricing Tables</a>
                    </li>

                </ul>
            </li>
            <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
            </li>
        </ul>
    </div>

</div>
<!-- /sidebar menu -->


<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->