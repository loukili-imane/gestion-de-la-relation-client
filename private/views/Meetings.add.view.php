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
                        <h6 class="m-0 font-weight-bold " style="color:white; text-align:center">Ajouter un rendez-vous</h6>

                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-row">
                            <div class="form-group col-md-12">
                                    <label for="inputNom">Sujet</label>
                                    <input type="text" name="sujet" class="form-control" id="inputNom">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputNom">Date de Début</label>
                                    <input type="text" name="date_debut" class="form-control" placeholder="aaaa-mm-jj hh:mi:ss" id="inputNom">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPrenom">Date de fin</label>
                                    <input type="text" name="date_fin" class="form-control" placeholder="aaaa-mm-jj hh:mi:ss"
                                     id="inputPrenom" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail">Client</label>
                                    <select id="inputGroupe"  class="form-control" >
                                      
                                                <option>
                                                   Samri houda
                                                </option>
                                                <option>
                                                  Asmae Ouadi
                                                </option>

    
                                                <option>
                                                gasmi nada
                                                </option>
                                                <option>
                                                salimani salim
                                                </option>
                            
                                            <option selected> choisir un client</option>
                            
                                           
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPhone">Personnel</label>
                                    <select id="inputGroupe"  class="form-control" >
                                      
                                                <option>
                                                   Maarouf Salma
                                                </option>

                                                <option>
                                                   Sobran Imane
                                                </option>

                                                <option>
                                                   Anassi Anas
                                                </option>

                                
                                            <option selected> choisir un personnel</option>
                            
                                    </select>
                                </div>


                            </div>
                  

                            <button type="submit" class="btn btn-primary" href="<?=ROOT?>/meetings/add">Ajouter</button>
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