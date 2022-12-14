<div class="row">
    <div class="col-12">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="d-flex">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex p-10 no-block">
                            <div class="align-slef-center d-flex">
                                <h2 class="m-b-0"><?= $all_registered ?></h2>
                                <h6 class="text-muted m-b-0">Total Registered Students</h6>
                            </div>
                            <div class="align-self-center display-6 ml-auto">
                                <!-- <i class="fa-solid fa-user"></i> -->
                            </div>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex p-10 no-block">
                            <div class="align-slef-center d-flex">
                                <h2 class="m-b-0 text-danger"><?= $all_deleted ?></h2>
                                <h6 class="text-muted m-b-0">Total Students Deactivated</h6>
                            </div>
                            <div class="align-self-center display-6 ml-auto">
                                <!-- <i class="fas fa-ban"></i> -->
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex p-10 no-block">
                            <div class="align-slef-center d-flex">
                                <h2 class="m-b-0 text-success"><?= $total_epassed; ?></h2>
                                <h6 class="text-muted m-b-0">Total Students Passed</h6>
                            </div>
                            <div class="align-self-center display-6 ml-auto">
                                <!-- <i class="fas fa-check-square"></i> -->
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex p-10 no-block">
                            <div class="align-slef-center d-flex">
                                <h2 class="m-b-0 text-danger"><?= $total_efailed ?></h2>
                                <h6 class="text-muted m-b-0">Total Students Failed</h6>
                            </div>
                            <div class="align-self-center display-6 ml-auto">
                                <!-- <i class="fas fa-window-close"></i> -->
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div id="contactAdmin" style="margin-top: -5px;"></div>
    </div>
</div>