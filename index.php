<?php
include 'enums/UserType.php';
session_start();

if (!in_array($_SESSION['ROLE'], array(UserType::ADMIN, UserType::STUDENT))) {
    header("Location: login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--important link source from "https://bootstrapious.com/p/about-us-page"-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include 'views/layouts/page_header.php';?>

    <!--MAIN-->
    <div class="">

    </div>
    <!--MAIN-->

    <?php include 'views/layouts/page_footer.php';?>
</body>
</html>