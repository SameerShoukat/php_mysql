<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Data | </title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/PHPCRUD/include/head.php'); ?>
        <?php
            if(!isset($_SESSION['login'])){
                header("location:".ab_path);
            }
        ?>
</head>

<body>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/PHPCRUD/include/header.php'); ?>
    <section class="section">
        <div class="container">
            <div class="record-funtion-row">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-3">
                        <h4>Data</h4>
                    </div>
                    <div class="col-md-9 text-end">
                        <ul class="record-functions">
                            <li class="text-uppercase bg-dark text-light" id="runningTime">
                            </li>
                            <li class="bg-dark text-light"><a href=""><i class="fad fa-sync-alt"></i></a></li>
                            <li class="bg-dark text-light"><a href="../form/?newdata=<?php echo 'insert' ; ?>">New Data</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php $result =  mysqli_query($conn, 'SELECT * from registration'); ?>
            <table class="table border">
                <thead> 
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Cnic</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i=1 ;
                    while ($row = mysqli_fetch_array($result)) { ?>
                        
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td class="text-capitalize"><?php echo $row['fullname']; ?></td>
                            <td class="text-capitalize"><?php echo $row['email']; ?></td>
                            <td class="text-capitalize"><?php echo $row['phone']; ?></td>
                            <td class="text-capitalize"><?php echo $row['address']; ?></td>
                            <td class="text-capitalize"><?php echo $row['cnic']; ?></td>
                            <td>
                                <a href="../view/?id=<?php echo $row['id']; ?>" class="style_btn"><i class="fas fa-compress-wide"></i></a>
                                <a href="../form/?id=<?php echo $row['id']; ?>" class="style_btn"><i class="fad fa-edit"></i></a>
                                <a href="delete.php?del=<?php echo $row['id']; ?>" class="style_btn"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php 
                    $i++ ;
                } 
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/PHPCRUD/include/script.php'); ?>
<script type="text/javascript">
    $(document).ready(function() {
    setInterval(runningTime, 1000);
    });
    function runningTime() {
    $.ajax({
        url: '../server/timeScript.php',
        success: function(data) {
        $('#runningTime').html(data);
        },
    });
    }
</script>
</html>