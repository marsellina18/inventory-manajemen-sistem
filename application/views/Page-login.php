<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <?php $this->load->view('global/header'); ?>
    <style>
        body {
            background: linear-gradient(to right, purple, white);
            margin: 0;
            padding: 0;
        }
        .auth-box{
            background-color: whitesmoke;
        }
        .btn-primary {
        background-color: #6f0882;
        border-color: #6f0882; }
        .btn-primary:hover, .btn-primary:focus {
            background-color: #e614b5;
            border-color: #e614b5; 
        }
        .auth-box .right .overlay {
        position: absolute;
        top: 0;
        display: block;
        width: 100%;
        height: 100%;
        background: rgba(174, 106, 186, 0.92); 
        }
        

    
        
        
        
        
    </style>
</head>
<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><h2>Inventory</h2></div>
                                <p class="lead">Login to your account</p>
                                <div id="error"></div>
                            </div>
                            <form class="form-auth-small" action="index.php">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">User Name</label>
                                    <input type="text" class="form-control" id="signin-name" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn_login">LOGIN</button>
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">Inventory Management System</h1>
                            <p>by Kelompok one</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#btn_login').click(function(e){
            var user = $('#signin-name').val();
            var password = $('#signin-password').val();
            $.ajax({
                type: "POST",
                url: "auth/login",
                data: 'user='+user+'&password='+password,
                success: function(response){
                    if(response == "success") {
                        window.location = '<?php echo base_url(); ?>';
                    } else {
                        $("#error").html('<div class="alert alert-danger alert-dismissible" role="alert"> <i class="fa fa-exclamation-triangle"></i> &nbsp; Login Error !</div>');
                    }
                } 
            });

            e.preventDefault();
        });
    });
</script>
