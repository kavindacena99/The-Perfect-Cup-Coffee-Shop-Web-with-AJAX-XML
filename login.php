<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup | Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>
	
	<!-- Script -->
	<script type="text/javascript">
        $(document).ready(function(){
            $("#login").click(function(){

                email = $("#mail").val();
                password = $("#pswd").val();
                  
                $.ajax({
                    type:"POST",
                    url:"pcheck.php",
                    data: "mail=" + email + "&pswd=" + password,
                    success:function(html){
                        if(html == 'true'){
                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Authenticated</strong> \ \
                                                 </div>');

                            window.location.href = "blog.php";
                        }else if(html == 'false'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Authentication</strong> Failure \ \
                                                 </div>');
                        }else{
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request error \ \
                                                 </div>');
                        }
                    },
                    beforeSend:function(){
                        $("#add_err2").html("Loading.............");
                    }
                });
                return false;
            });
        });
    </script>

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">157 Melrose Place | Darley Road, Colombo | 075 73 80 049</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <div class="alert alert-danger">
                        <strong>You must be logged in to view blog</strong>
                    </div>
                    <hr>
                    <h2 class="intro-text text-center">Login
                        <strong>form</strong>
                    </h2>
					<div id="add_err2"></div>
                    <hr>       
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Email Address</label>
                                <input type="email" id="mail" name="mail" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" id="pswd" name="pswd" maxlength="10" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="login" class="btn btn-default">Login</button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group col-lg-12">
                        <a href="register.php"><button type="submit" id="createnew" class="btn btn-default">Create New Account</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    <?php require_once 'footer.php'; ?>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
