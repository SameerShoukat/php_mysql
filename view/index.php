
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/PHPCRUD/include/head.php'); ?>
    <?php
        $id = $_GET['id'];

        $result = mysqli_query($conn, "SELECT * From registration WHERE id = $id");

        while($row = mysqli_fetch_array($result)){

        ?>
    <title> <?php echo $row['fullname']; ?> | The Falana Dhimaka </title>
</head>

<body>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/PHPCRUD/include/header.php'); ?>
    <section class="section individual-data">
    <div class="container">
        <h1 class="heading text-center text-capitalize"><?php echo $row['fullname']; ?></h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table border">
                    <tbody>
                        <tr> 
                            <td scope="col" class="td-head">Phone</td>
                            <td scope="col"><?php echo $row['phone']; ?></td>
                        </tr>
                        <tr> 
                            <td scope="col" class="td-head">Email</td>
                            <td scope="col"><?php echo $row['email']; ?></td>
                        </tr>
                        <tr> 
                            <td scope="col" class="td-head">Address</td>
                            <td scope="col"><?php echo $row['address']; ?></td>
                        </tr>
                        <tr> 
                            <td scope="col" class="td-head">Cnic</td>
                            <td scope="col"><?php echo $row['cnic']; ?></td>
                        </tr>
                        <tr> 
                            <td scope="col" class="td-head">Gender</td>
                            <td scope="col"><?php echo $row['gender']; ?></td>
                        </tr>
                        <tr> 
                            <td scope="col" class="td-head">Province</td>
                            <td scope="col"><?php echo $row['province']; ?></td>
                        </tr>
                        <tr> 
                            <td scope="col" class="td-head">Message</td>
                            <td scope="col"><?php echo $row['message']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
 

    </div>

</section>

<?php } ?>

</body>
</html