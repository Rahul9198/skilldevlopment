<!-- start include headerr -->
<?php
include('./mainInclude/header.php');
?>

<!-- end include header -->
<!-- start course page banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="image/courses.jpg" alt="course" style="height:500px;width:100%;object-fit:cover;box-shadow:10px;">
    </div>

</div>

<!-- end course page banner -->
<!-- start main contant -->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="form-group row">
            <label for="" class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="View">
            </div>
        </div>
    </form>
</div>
<!-- end main contant -->

<!-- start contact us -->
<div class="container">
<?php
   include('./contact.php');
   ?>
</div>
<!-- end contact us  -->
<!-- start include footer -->
<?php
include('./mainInclude/footer.php');
?>

<!-- end include footer -->