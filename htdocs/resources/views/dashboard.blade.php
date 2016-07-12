
@include('layouts/header')

<body>

    <div id="wrapper">
        @include('layouts/navbar')

        <!-- Navigation -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Beranda 
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
                <!-- /.row -->

                
                    
                    
                    
                </div>
                <!-- /.row -->

                
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Statistics</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href=<?php echo url('/keluhan'); ?> class="list-group-item">
                                        <span class="badge">{{$keluhanCount->count}}</span>
                                        <i class="fa fa-fw fa-comment"></i> Total Keluhan
                                    </a>
                                    <a href=<?php echo url('/pengguna'); ?> class="list-group-item">
                                        <span class="badge">{{$penggunaCount->count}}</span>
                                        <i class="fa fa-fw fa-line-chart"></i> Total Pengguna
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
