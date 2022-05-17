<?php

// namevi,emailvi,phonevi,selfvi
    $msg="";
    $showmsg=FALSE;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include 'dbConnect.php';

        $compName = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
        $ip = $_SERVER["REMOTE_ADDR"];
        

        $name=$_POST['namevi'];
        $email=$_POST['emailvi'];
        $phone=$_POST['phonevi'];
        $self=$_POST['selfvi'];

        $sql="SELECT * FROM `visiter` WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        $numrow=mysqli_num_rows($result);
        if($numrow==0)
        {
            
                    $sql="INSERT INTO `visiter` (`sl`, `name`, `email`, `phone`, `txt_visiter`, `compName`, `ip`, `date_time_visiter`) VALUES (NULL, '$name', '$email', '$phone', '$self', '$compName', '$ip', current_timestamp())";
            
                    $result=mysqli_query($conn,$sql);
            
                    if($result)
                    {
                        $msg=" Your Registration is completed.";
                        $showmsg=TRUE;
                    }

        }
        else {
            $msg=" Already Register your email .";
            $showmsg=TRUE;

        }




    }


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php
        if($showmsg==TRUE)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Message-</strong>'.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    ?>

    <div class="container">
        <marquee>
            <h1>Testing Purpuss IP Tracking In Visiter</h1>
        </marquee>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label"><em>Name</em></label>
                <input type="text" name="namevi" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="emailvi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><em>Phone Number</em></label>
                <input type="number" name="phonevi" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" name="selfvi" id="floatingTextarea2" required
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2"><em>Say Something Your self</em></label>
            </div>
            <center><button type="submit" class="btn btn-success my-3">Submit</button></center>
        </form>

    </div>

    <?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>