<?php include "header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manufactures Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manufactures Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <?php
    if (isset($_GET['id'])) :
        $id = $_GET['id'];
        $getAllManuById = $manu->getAllManuById($id);
        foreach ($getAllManuById as $values) : ?>
    <section class="content">
        <form action="updatemanu.php?id=<?php echo $values['manu_id'] ?>" method="post" enctype="multipart/form-data">
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" id="inputName" class="form-control"
                                    value="<?php echo $values['manu_name'] ?>" name="name">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <input name="submit" type="submit" value="Update manufactures" class="btn btn-success float-right">
                </div>
            </div>
        </form>

    </section>
    <!-- /.content -->
    <?php
        endforeach;
    endif;
    ?>
</div>
<!-- /.content-wrapper -->
<?php include "footer.html" ?>