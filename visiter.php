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


    <div class="container my-3">
        <marquee>
            <h1>Welcome to Our Website .</h1>
        </marquee>
        <table class="table  my-3">
            <caption>
                <h4>: All visiter list :</h4>
            </caption>
            <thead>
                <tr>
                    <th scope="col"><strong>SL</strong></th>
                    <th scope="col"><strong>COMPNAME</strong></th>
                    <th scope="col"><strong>IP</strong></th>
                    <th scope="col"><strong>DATE & TIME</strong></th>

                </tr>
            </thead>
            <tbody>
            <?php
//   $sql="INSERT INTO `onlyvisit` (`sl`, `comp`, `ip`, `date_and_time`) VALUES (NULL, '$compName', '$ip', current_timestamp())";

            include 'dbConnect.php';

            $sql="SELECT * FROM `onlyvisit` WHERE 1 ORDER BY `sl` DESC";
            $result=mysqli_query($conn,$sql);
            $numrow=mysqli_num_rows($result);
            // echo var_dump($result);
            for($i=0;$i<$numrow;$i++)
            {
                $row=mysqli_fetch_assoc($result);
                echo '<tr>
                <th scope="row"><em>'.($i+1).'</em></th>
                <td><em>'.$row['comp'].'</em></td>
                <td><em>'.$row['ip'].'</em></td>
                <td><em>'.$row['date_and_time'].'</em></td>

                </tr>';
            }

            ?>


            </tbody>
        </table>

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