<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `hospital` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$age = $row['age'];
$gender = $row['gender'];
$message = $row['message'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];


    $sql = "update `hospital` set id=$id,name='$name',email='$email',mobile='$mobile',age='$age',gender='$gender',message='$message'
    where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Data updated Succesfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="https://media.istockphoto.com/id/1004198294/vector/pet-paw-symbol-simple-black-dog-or-cat-footprint-shape.jpg?s=612x612&w=0&k=20&c=7QGzowZhg4MFqjQWbjnhhaYBbBDXK7Qp4M7Jdtp43P0=" width="50" height="50" ;></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="display.php">Blogs <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Contact Us</a>
                </li>
                </a>
    </nav>
</head>

<body>
<section class="vh-100"> <img src="https://www.pixelstalk.net/wp-content/uploads/images3/Cute_dog_wallpaper_HD_desktop_download.jpg";>
        <div class="container py-5 h-100">
            <form method="post">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="assets/img/paws.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <form>
                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                                <span class="h1 fw-bold mb-0">Update</span>
                                            </div>
                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Fill here</h5>

                                            <div class="form-outline mb-4">
                                                <input type="name" class="form-control form-control-lg" placeholder="Enter your Name" name="name" autocomplete="off"value=<?php echo $name;?>>
                                                <label class="form-label" for="form2Example17">Name</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="email" class="form-control form-control-lg" placeholder="Enter your Email" name="email" autocomplete="off"value=<?php echo $email;?>>
                                                <label class="form-label" for="form2Example27">Email</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="mobile" class="form-control form-control-lg" placeholder="Enter your Mobile" name="mobile" autocomplete="off"value=<?php echo $mobile;?>>
                                                <label class="form-label" for="form2Example27">Mobile</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="age" class="form-control form-control-lg" placeholder="Enter your Age" name="age" autocomplete="off"value=<?php echo $age;?>>
                                                <label class="form-label" for="form2Example27">Age</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="gender" class="form-control form-control-lg" placeholder="Enter your Gender" name="gender" autocomplete="off"value=<?php echo $gender;?>>
                                                <label class="form-label" for="form2Example27">Gender</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="message" class="form-control form-control-lg" placeholder="Enter your Birthday" name="message" autocomplete="off"value=<?php echo $message;?>>
                                                <label class="form-label" for="form2Example27"> Message </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                            <br></br>
                                            <input type="checkbox" class="btn btn-primary" name="checkbox_name"> Check this box if you finished updating the forms </button>
                                        </form>
                                    </div>
</body>
</section>

</html>