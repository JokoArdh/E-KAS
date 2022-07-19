

    

        

        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-info-800">Sistem Informasi Pengelolaan Kas</h1>

                    <div class="alert alert-info" role="alert">
                    <h3>Selamat datang anda login sebagai <b><?php echo $this->session->userdata('username'); ?> </b> </h3>
                    </div>

                    
                    
                   <div class="row">
                       
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               PEMASUKAN</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "RP." . number_format($total_masuk,0,".",","); ?>,-</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                               Pengeluaran</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "RP." . number_format($total_keluar,0,".",","); ?>,-</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                               SALDO KAS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "RP." . number_format($total_masuk - $total_keluar,0,".",","); ?>,-</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                   </div>
                       

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           