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
                <h1 class="h3 mb-4 text-gray-800"><?=explode("/", filter_var(trim($_GET['url'],"/")),FILTER_SANITIZE_URL)[0]?></h1>
                <!-- Content Row -->
                <div class="row">
                    <div class="card shadow mb-4">
                        <div class="card-header bg-gradient-primary py-3">
                            <h6 class="m-0 font-weight-bold text-light"><?= esc($row->nom) ?> <?= esc($row->prenom) ?></h6>
                        </div>
                        <div class="card-body">
                            <img src="<?= ROOT ?>/img/undraw_profile_1.svg" class="border border-primary d-block mx-auto rounded-circle " style="width:150px;">

                            <br>

                            <div class="text-center">
                                <a href="<?= ROOT ?>/profile/edit/<?= $row->id_utilisateur ?>">
                                    <button class="btn-sm btn btn-success">modifier</button>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-12 bg-light p-2">
                            <table class="table table-hover table-striped table-bordered " style="width :100%">
                                <tr >
                                    <th  colspan="12">Nom  </th>
                                    <td colspan="12"><?= esc($row->nom) ?></td>
                                </tr>
                                <tr>
                                    <th colspan="12">Prenom </th>
                                    <td colspan="12"><?= esc($row->prenom) ?></td>
                                </tr>
                                <tr>
                                    <th colspan="12">Email</th>
                                    <td colspan="12"><?= esc($row->email) ?></td>
                                </tr>
                                <tr>
                                    <th colspan="12">Telephone</th>
                                    <td colspan="12" ><?= esc($row->telephone) ?></td>
                                </tr>
                                <tr>
                                    <th colspan="12" >Statut du compte </th>
                                    <td colspan="12" >activé</td>
                                </tr>
                                <tr>
                                    <th colspan="12">Role </th>
                                    <td colspan="12" ><?= esc($row->role) ?></td>
                                </tr>
                            </table>
                        </div>
                        </div>
                        
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
            <span>Copyright &copy; Your Website <?php echo date("Y"); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php $this->view('includes/footer'); ?>