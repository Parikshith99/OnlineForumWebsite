<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>welcome to iDiscuss-Coding Forums</title>
</head>

<body>
    
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
   
    <?php
        $id=$_GET['threadid'];
        $sql= "SELECT * FROM `threads` WHERE thread_id=$id";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result)){
          $title=$row['thread_title'];
          $desc=$row['thread_desc'];
          $thread_user_id=$row['thread_user_id'];

          //query the users table to find the ame of original poster
          $sql2="SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
           $result2=mysqli_query($con,$sql2);
           $row2=mysqli_fetch_assoc($result2);
           $posted_by=$row2['user_email'];
        }
        ?>

<?php  
   $showAlert=false;
    $method=$_SERVER['REQUEST_METHOD'];
     if($method=='POST'){
        //insert into thread  db
        $comment=$_POST['comment'];
        $sno=$_POST['sno'];
        $comment=str_replace("<","&lt;",$comment);
        $comment=str_replace(">","&gt;",$comment);
        $sql= "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '$sno', current_timestamp());";
        $result=mysqli_query($con,$sql);
        $showAlert=true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your comment has been added!. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
     }
   ?>
    <!-- category container start -->
    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead"><?php echo $desc;?></p>
            <hr class="my-4">
            
            <p>-posted by <b><?php echo $posted_by;?></b></p>
        </div>
    </div>
  


    <?php
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo'<div class="container">
    <h1 class="py-2">Post a comment</h1>
    <form action="'. $_SERVER["REQUEST_URI"].'" method="post">
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Type comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
            <input type="hidden" name="sno" value="'.$_SESSION["sno"].'">
        </div>
        <button type="submit" class="btn btn-success">Post comment</button>
    </form>
</div>';
 }
 else{
    echo '<div class="container">
    <h1 class="py-2">Post comments</h1>
    <p class="lead">Your are not logged in.Please login to post comments!!</p>
    </div>';
 }

?>
    
    
    <div class="container mb-5">
        <h1>Discussion</h1>
        <?php
         $id=$_GET['threadid'];
         $sql= "SELECT * FROM `comments` WHERE thread_id=$id";
         $result=mysqli_query($con,$sql);
         $noResult=true;
         while($row=mysqli_fetch_assoc($result)){
            $noResult=false;
             $id=$row['comment_id'];
           $content=$row['comment_content'];
           $comment_time=$row['comment_time'];

           $thread_user_id=$row['comment_by'];
           $sql2="SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
           $result2=mysqli_query($con,$sql2);
           $row2=mysqli_fetch_assoc($result2);
          echo'<div class="media my-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRk2lvjLhHPTcrP-3964z3CW7CwMWah2dCZCw&usqp=CAU" width=50px; class="mr-3" alt="...">
            <div class="media-body">
            <p class="font-weight-bold my-0">'.$row2['user_email'].' '.$comment_time.'</p>
               ' . $content. '
            </div>
    </div>';
         }
         if($noResult){
            echo '<div class="jumbotron jumbotron-fluid">
               <div class="container">
                 <p class="display-4">No comment Found</p>
                 <p class="lead">Be the first to comment</p>
               </div>
             </div>';
           }
?>  
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