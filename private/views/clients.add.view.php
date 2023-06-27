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
                        <h6 class="m-0 font-weight-bold " style="color:white; text-align:center">Ajouter un client</h6>

                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNom">Nom</label>
                                    <input type="text" name="nom" class="form-control" id="inputNom">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPrenom">Prenom</label>
                                    <input type="text" name="prenom" class="form-control" id="inputPrenom">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPhone">Telephone</label>
                                    <input type="tel" name="telephone" class="form-control" id="inputPhone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Adresse</label>
                                <input type="text" name="adresse" class="form-control" id="inputAddress" placeholder="">
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label for="inputGroupe">Groupe</label>
                                    <select id="inputGroupe"  class="form-control" >
                                      
                                                <option>
                                                  securité
                                                </option>
                                                <option>
                                                   Informatique
                                                </option>
                                                <option>
                                                  Marketing
                                                </option>
                                                <option>
                                                   Administration Reseaux
                                                </option>
                            
                                            <option selected> choisir un groupe</option>
                            
                                    </select>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary" href="<?=ROOT?>/clients/add">Ajouter</button>
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