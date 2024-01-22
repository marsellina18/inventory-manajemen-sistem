<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head content here -->
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="<?php echo base_url(); ?>"><?php echo SITE_NAME; ?></a>
        </div>
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
            </div>
            
            <div class="navbar-btn navbar-btn-right">
                <a class="btn btn-success update-pro" href="<?php echo base_url(); ?>auth/logout" title="Logout"><i class="fa fa-sign-out"></i></i> <span>LOGOUT</span></a>
            </div>
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Remove the dropdown code and directly place the profile section -->
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url(); ?>assets/img/user.png" class="img-circle" alt="Avatar">
                            <span><?php echo $this->session->userdata('nama'); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Your other HTML content goes here -->

    <script type="text/javascript">
        // Add your JavaScript code here
    </script>
</body>
</html>
