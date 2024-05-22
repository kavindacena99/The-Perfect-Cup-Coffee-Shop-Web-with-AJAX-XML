<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup | Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <script>
        $(document).click(function(){
            $("#contact").click(function(){
                $name = $("#name").val();
                $mail = $("mail").val();
                $message = $("#msg").val();

                $.ajax({
                    type:"POST",
                    url:"sendmsg.php",
                    data: "name=" + $name + "&mail=" + $mail + "&msg=" + $message,
                    success:function(html){
                        if(html == 'true'){
                            $("#add_err2").html('<div class="alert alert-success"> \
                            <strong>Message Sent!</strong> \
                            </div>');
                        }else if(html == 'fname_long'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Name is long</strong> \
                            </div>');
                        }else if(html == 'fname_short'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Name is short</strong> \
                            </div>');
                        }else if(html == 'email_long'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Cannot exceed 50 characters</strong> \
                            </div>');
                        }else if(html == 'email_short'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Email is short</strong> \
                            </div>');
                        }else if(html == 'eformat'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Email is not in correct format</strong> \
                            </div>');
                        }else if(html == 'message_long'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Message is too long</strong> \
                            </div>');
                        }else if(html == 'message_short'){
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Message is too short</strong> \
                            </div>');
                        }else{
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Processing Error</strong> \
                            </div>');
                        }
                    }
                });
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
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>The Perfect Cup</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>075 73 80 049</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:perfectcupinfo@gmail.com">perfectcupinfo@gmail.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>157 Melrose Place
                            <br>Darley Road, Colombo</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div class="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" name="mail" id="mail" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea id="msg" name="msg" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="contact" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
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
