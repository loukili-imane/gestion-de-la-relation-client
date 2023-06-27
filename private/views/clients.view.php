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
                        <h6 class="m-0 font-weight-bold " style="color:white; text-align:center">Liste des clients</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <div class="dataTables_length" id="dataTable_length"><label>Show entries <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> </label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 ">
                                        <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-2 ">
                                        
                                    </div>
                                    <div class="col-sm-12 col-md-1 my-3">
                                                <div class="card bg-warning text-white shadow ">
                                                    <a href="<?= ROOT ?>/Clients/export">
                                                        <i class="fa-solid fa-file-export" style="padding : 10px;color:white; "> </i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-1 my-3">
                                                <div class="card bg-success text-white shadow ">
                                                    <a href="<?= ROOT ?>/Clients/add">
                                                        <i class="fa-solid fa-user-plus " style="padding : 10px;color:white; "> </i>
                                                    </a>
                                                </div>
                                            </div>

                                    <div class="">
                                        <div class="card-body ">


                                        
                                           

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 73px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 95px;">Nom</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 95px;">Prenom</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Adresse</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 58px;">Telephone</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 71px;">Groupe</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 67px;">Crée par</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Action</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if (isset($rows) && $rows) : ?>

                                                    <?php foreach ($rows as $row) : ?>
                                                        <tr>
                                                            <td> <?= $row->id_client ?></td>
                                                            <td> <?= $row->nom ?></td>
                                                            <td> <?= $row->prenom ?></td>
                                                            <td> <?= $row->email ?></td>
                                                            <td> <?= $row->adresse ?></td>
                                                            <td> <?= $row->telephone ?></td>
                                                            <td> <?= $row->nomGroupe ?></td>
                                                            <td> <?= $row->creePar ?></td>
                                                            <td>
                                                                <a href="<?= ROOT ?>/clients/update/<?= $row->id_groupe ?>">
                                                                    <button class="btn-sm btn btn-info text-white" ><i class="fa fa-edit"></i></button>
                                                                </a>

                                                                <a href="<?= ROOT ?>/clients/delete/<?= $row->id_client ?>">
                                                                    <button class="btn-sm btn btn-danger" onclick="confirmer()"><i class="fa fa-trash-alt"></i></button>
                                                                </a>
                                                            </td>

                                                        </tr>

                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="6">
                                                            <center>aucun client pour le moment</center>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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