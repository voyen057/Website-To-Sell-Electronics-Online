<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row " style="padding-left: 500px;">
                <!-- Order Details -->
                <div class="col-sm-4 text-center">
                    <?php if (isset($_GET['id'])) {
                        # code...
                        $id = $_GET['id'];
                    ?>

                    <form action="delwishlist.php?id=<?php echo $value['id'] ?>" method=" post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <p>Are you sure you want to delete?</p> <br>
                            <p>
                                <input style="background-color: pink;" type="submit" value="Yes">
                                <a href="wishlist.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
</body>

</html>