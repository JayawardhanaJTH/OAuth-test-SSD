<?php
include('../../google_data.php');
$page_title = 'Upload Document';
include('helpers/header.php');

?>

<body style="background-image: url(../images/back1.jpg); background-size: 1480px;">
    <!-- Header and navigation -->
    <div>
        <!-- Header -->
        <div class="header text-white p-5 ">
            <header class="row text-center">
                <div class="header-logo ">
                    <span class="h3">Online Store</span>
                </div>
                <div class="header-description">
<?php
if (!isset($_GET['action'])) {

    if (!empty($_SESSION['user_id'])) {
        echo '<p>' . $_SESSION['email'] . '</p>';
        echo $_SESSION['access_token'];
?>
                    <div class="input-group">
<?php
        echo '<a href="../../server/google_login.php?action=logout" class="text-decoration-none"><input class="btn btn-dark" type="button" value="Log Out"></a>';
    }
    else {
        echo '<a href="#" class="text-decoration-none"><input class="btn btn-dark" type="button" value="Login"></a>';
    }
}
?>
                        
                    </div>
                </div>
            </header>
        </div>

        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Cart</a>
                    <a class="nav-item nav-link" href="#">Add Item</a>
                    
                </div>
            </div>
        </nav>
    </div>

    <div style="background:rgba(255,255,255,0.6)">
        <div class="row justify-content-center mt-5">
            <form action="../../server/upload_service.php" method="post" enctype="multipart/form-data">
            <div class="input-group"> 
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-image"></i></div>
                </div>
                <input type="file" name="document" id="document" class="form-control" />
                </div>
                <div class="row justify-content-center mt-5">
                    <input type="submit" name="submit" value="Upload" class="btn btn-primary"/>
                </div>
            </form> 
        </div>
        <div class="mt-5">
            <table class="table table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>