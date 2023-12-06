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
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="image/guitar.jpg"height="50%"weight="50%" alt="Guitar" class="card-imag-top">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: Learn Guitar</h5>
                <p class="card-text">Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="card-text">Duration: 10 Days</p>
                <form action="" mehtod="post">
                    <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span
                            class="font-weight-border">&#8377 200</span></p>
                    <button type="submit" class="btn btn-primary text-white font-weight-border font-right"
                        name="buy">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson No.</th>
                        <th scope="col">Lesson Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr scope=" row">
                        <td>Introduction</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
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