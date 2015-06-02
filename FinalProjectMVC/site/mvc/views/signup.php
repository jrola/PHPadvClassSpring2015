<!DOCTYPE html>
<html>
    <head>
        <title>PhotoGenetics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="\PHPadvClassSpring2015/FinalProjectMVC/site/css/bootstrap.css">
        <link rel="stylesheet" href="\PHPadvClassSpring2015/FinalProjectMVC/site/css/website.css">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="intro">
                        <i class="fa fa-code"></i>  <span class="light">PhotoGenetics.com</span>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a href="intro">Introduction</a>
                        </li>
                        <li>
                            <a href="login">Login</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <div class="container">
            <form role="form" method="post">
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <label for="email">Email:</label>
                        <input type="text" name="Email" autocomplete="off" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <label for="password">Password:</label>
                        <input type="password" name="Password" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <label for="firstname">First Name:</label>
                        <input type="text" name="FirstName" autocomplete="off" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <label for="lastname">Last Name:</label>
                        <input type="text" name="LastName" autocomplete="off" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <label for="address">Address:</label>
                        <input type="text" name="Address" autocomplete="off" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <label for="city">City:</label>
                        <input type="text" name="City" autocomplete="off" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <label for="state">State:</label>
                        <input type="text" name="State" autocomplete="off" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <label for="zip">Zip:</label>
                        <input type="text" name="Zip" autocomplete="off" class="form-control" required/>
                    </div>
                </div>      
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <input type="hidden" name="action" value="create" />
                        <br />
                        <button type="submit" value="submit" class="btn btn-default btn-lg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <script src="\PHPadvClassSpring2015/FinalProjectMVC/site/js/lib/jquery.js" type="text/javascript"></script>
        <script src="\PHPadvClassSpring2015/FinalProjectMVC/site/js/lib/bootstrap.js" type="text/javascript"></script>
        <script src="\PHPadvClassSpring2015/FinalProjectMVC/site/js/lib/jquery.easing.min.js" type="text/javascript"></script>
        <script src="\PHPadvClassSpring2015/FinalProjectMVC/site/js/lib/website.js" type="text/javascript"></script>
    </body>
</html>