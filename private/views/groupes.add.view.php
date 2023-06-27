<?php $this->view('includes/header'); ?>
<!-- Page Wrapper -->
<div id="wrapper">
    <?php $this->view('includes/sideBar'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Top-Bar -->
            <?php $this->view('includes/topBar'); ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800"><?= explode("/", filter_var(trim($_GET['url'], "/")), FILTER_SANITIZE_URL)[0] ?></h1>

                <!-- Content Row -->

                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-gradient-primary">
                        <h6 class="m-0 font-weight-bold " style="color:white; text-align:center">Ajouter un groupe</h6>

                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputNom">nom</label>
                                    <input type="text" name="nomGroupe" class="form-control" id="inputNom">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputDescription">Description</label>
                                    <textarea class="form-control" name="groupeDescription" id="inputDescription" rows="3"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" href="<?=ROOT?>/Groupes/add">ajouter</button>
                        </form>
                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
    </div>
</div>

<!-- End of Main Content -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; CRM <?php echo date("Y"); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php $this->view('includes/footer'); ?>