<?php include "header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Protypes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Protypes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="padding-right: 650px;">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Protypes</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body ">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 10% text-center">
                                ID
                            </th>
                            <th style="width: 10% text-center">
                                Name
                            </th>
                            <th style="width: 5%  ">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $getAllType = $type->getAllType();
                        foreach ($getAllType as $value) :
                        ?>
                        <tr>
                            <td>
                                <?php echo $value['type_id'] ?>
                            </td>
                            <td><?php echo $value['type_name'] ?>
                            </td>
                            <td class="project-actions text-left">
                                <a class="btn btn-info btn-sm"
                                    href="updateprotypes.php?id=<?php echo $value['type_id'] ?>">
                                    <i class="fas fa-pencil-alt"> </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="deltype1.php?id=<?php echo $value['type_id'] ?>">
                                    <i class="fas fa-trash"> </i>
                                    Delete
                                </a>

                            </td>
                        </tr>
                        <?php endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "footer.html"; ?>