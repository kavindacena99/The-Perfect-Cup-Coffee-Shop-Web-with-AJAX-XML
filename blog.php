<?php
    require_once 'connection.php';
?>
<?php
    session_start();

    if(isset($_SESSION['login'])){
        $fname = $_SESSION['fname'];
        $lname = $_SESSION['lname'];
    }else{
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup | Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


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
                    <h2 class="text-center"><small>Welcome</small> <?php echo $fname; echo " "; echo $lname . " "; ?><a href="logout.php">Log Out</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>Coconut Oil Coffee
                        <br>
                        <small>October 13, 2023</small>
                    </h2>
                    <p>Coconut oil coffee, also known as bulletproof coffee, is a rich and creamy beverage that blends brewed coffee with coconut oil.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH Coffee
                        <br>
                        <small>December 23, 2023</small>
                    </h2>
                    <p>Irish coffee is a classic cocktail that combines hot coffee, Irish whiskey, sugar, and a topping of thick cream.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Frozen Caramel Latte
                        <br>
                        <small>January 03, 2024</small>
                    </h2>
                    <p>A frozen caramel latte is a refreshing and indulgent blend of rich espresso, creamy milk, and sweet caramel syrup, all blended with ice to create a smooth, frosty treat.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Coconut Oil Coffee</h4>
                </div>
                <div class="modal-body">
                    <p>Coconut oil coffee, also known as bulletproof coffee, is a rich and creamy beverage that blends brewed coffee with coconut oil. This combination is popular for its potential health benefits, including increased energy and improved focus, thanks to the medium-chain triglycerides (MCTs) found in coconut oil. The result is a smooth, frothy drink that adds a deliciously tropical twist to your regular coffee routine. Perfect for those following a keto diet or anyone looking for a flavorful and nutritious coffee alternative.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">IRISH Coffee</h4>
                </div>
                <div class="modal-body">
                    <p>Irish coffee is a classic cocktail that combines hot coffee, Irish whiskey, sugar, and a topping of thick cream. This delightful drink offers a warming, slightly sweet, and creamy experience, perfect for cozy evenings or special occasions. Invented in Ireland in the 1940s, Irish coffee has become a beloved treat worldwide, appreciated for its rich flavors and the comforting blend of coffee and whiskey. Whether enjoyed as an after-dinner drink or a festive indulgence, Irish coffee is sure to satisfy.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">FROZEN CARAMEL LATTE</h4>
                </div>
                <div class="modal-body">
                    <p>A frozen caramel latte is a refreshing and indulgent blend of rich espresso, creamy milk, and sweet caramel syrup, all blended with ice to create a smooth, frosty treat. This delightful beverage offers the perfect balance of coffee's boldness and caramel's sweetness, making it a favorite for hot days or when you crave a cool, caffeinated treat. Topped with whipped cream and a drizzle of caramel sauce, a frozen caramel latte is both visually appealing and irresistibly delicious.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
