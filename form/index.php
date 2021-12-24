<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include($_SERVER['DOCUMENT_ROOT'].'/PHPCRUD/include/head.php'); ?>

    <title>Crud Operation! Sameer Shoukat</title>
</head>

<body>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/PHPCRUD/include/header.php'); ?>
    <?php
        if(isset($_GET['id'])){

        $id = $_GET['id'];

        $result = mysqli_query($conn, "SELECT * From registration WHERE id = $id");

        while($row = mysqli_fetch_array($result)) {

    ?>
    <section class="section form">
        <div class="container">
            <h1 class="display-5 text-center mb-5 text-capitalize">Updating Record Of <?php echo $row["fullname"]; ?> </h1>
            <form method="post" action="<?php echo ab_path ?>/server/update.php?id=<?php echo $row['id'] ?>">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" value="<?php echo $row["fullname"]; ?>" class="form-control required" name="full_name" placeholder="Enter Fullname" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" value ="<?php echo $row["email"]; ?>" class="form-control required" name="email" placeholder="Enter Email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control required" value="<?php echo $row["phone"]; ?>" name="phone_number" placeholder="Enter Phone Number" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" value="<?php echo $row["address"]; ?>" class="form-control required" name="address" placeholder="Enter Address" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" value="<?php echo $row["cnic"]; ?>" class="form-control required" name="cnic" placeholder="Enter CNIC" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-check">
                                <input class="form-check-input required" type="radio" name="gender" value="male" <?php if($row["gender"] === 'male'){ echo "checked" ;} ?> required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input required" type="radio" name="gender" value="female" <?php if($row["gender"] === 'female'){ echo "checked" ;} ?> required>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-control required" name="province" required>
                                    <option value="sindh" <?php if($row["province"] === "sindh"){echo 'selected' ;} ?> >Sindh</option>
                                    <option value="punjab" <?php if($row["province"] === "punjab"){echo 'selected' ;} ?>>Punjab</option>
                                    <option value="bliochistan" <?php if($row["province"] === "bliochistan"){echo 'selected' ;} ?>>Bilochistan</option>
                                    <option value="kpk" <?php if($row["province"] === "kpk"){echo 'selected' ;} ?>>KPK</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" id="message required" cols="30" rows="10" class="form-control" required><?php echo $row["message"] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark ml-3" name="save">Submit</button>
                        <div class="col-md-12">
                            <div class="form-group form-check mt-2">
                                <input type="checkbox" class="form-check-input" id="forTerms">
                                <label class="form-check-label" for="forTerms">Accept all terms and conditions</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

<?php 
        }
    }

?>

<?php
if(isset($_GET['newdata'])){
?>
<section class="section form">
<div class="container">
    <h1 class="display-5 text-center mb-3">New Record</h1>
    <form method="post" action="<?php echo ab_path ?>/server/insert.php">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text"  class="form-control required" name="full_name" placeholder="Enter Fullname" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control required" name="email" placeholder="Enter Email" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control required" name="phone_number" placeholder="Enter Phone Number" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text"  class="form-control required" name="address" placeholder="Enter Address" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control required" name="cnic" placeholder="Enter CNIC" required>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="form-check">
                        <input class="form-check-input required" type="radio" name="gender" value="male" checked required>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input required" type="radio" name="gender" value="female" required>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <select class="form-control required" name="province" required>
                            <option value="sindh"  >Sindh</option>
                            <option value="punjab">Punjab</option>
                            <option value="bliochistan">Bilochistan</option>
                            <option value="kpk">KPK</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <textarea name="message" id="message required" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-dark ml-3" name="save">Submit</button>
                <div class="col-md-12">
                    <div class="form-group form-check mt-2">
                        <input type="checkbox" class="form-check-input" id="forTerms">
                        <label class="form-check-label" for="forTerms">Accept all terms and conditions</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</section>

<?php 
}

?>



</body>

</html>