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
            <span>Copyright &copy; CRM <?php echo date("Y");?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php $this->view('includes/footer'); ?>