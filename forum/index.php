<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>welcome to V-Discuss-Coding Forums</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
    
    <!-- slider start here -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://media.itpro.co.uk/image/upload/v1570816583/itpro/2019/05/data_science_shutterstock_746652745.jpg" width=1280px height=550px class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://s3.amazonaws.com/coursesity-blog/2019/04/da11.jpg" width=1280px height=550px class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.wallpapertip.com/wmimgs/160-1606042_java-programming-logo-hd.jpg" width=1280px height=550px class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- category container start -->
    <div class="container my-3">
        <h2 class="text-center">Welcome to V-Discuss-Categories</h2>
        <div class="row">
        <!-- fetch all the Categories -->
       <?php
        $sql= "SELECT * FROM `categories`";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result)){
          //  echo $row['category_id'];
          //  echo $row['category_name'];
          //substring is function used to limit string 1 argument name,2 start index,3 stop index
          $id=$row['category_id'];
          $cat=$row['category_name'];
          $desc=$row['category_description'];
         echo '<div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x300/?'.$cat.',coding" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="threadlist.php?catid='.$id.'">  '.$cat.'</a></h5>
                        <p class="card-text">'.substr($desc,0,90).'.....</p>    
                        
                        <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div>';
        }
       ?>
            <!-- Use for loop to itrerate through category-->

            



        </div>
    </div>


    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>