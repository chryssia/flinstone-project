
@include('layouts/header')
<body>

    <div id="wrapper">
    	@include('layouts/navbar')
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Pengguna <span style="float:right;"><a href=<?php echo url('/pengguna/tambah');?>><i class="fa fa-fw fa-plus-circle"></i> </a>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>E-mail</th>
                                        <th>Role</th>
                                        <th>Desa</th>
                                        <th>Alamat</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php $i = 1; ?>
                                    @foreach($data as $key => $content)

                                    <tr>
                                        
                                        <td>{{$content->nama}}</td>
                                        <td>{{$content->id}}</td>
                                        <td>{{$content->posisi}}</td>
                                        <td>{{$content->desa}}</td>
                                        <td>{{$content->alamat}}</td>
                                        <td><form role="form" method="delete" style="display:inline;">
                                                <input type="hidden" name="id" value=<?php echo $content->id ?>>
                                                <button type="submit" name="delete" value="DELETE"><i class="fa fa-trash" ></i></button>
                                                {{ csrf_field() }}|
                                                
                                            </form>
                                                <button><a href=<?php echo url('/pengguna/ubah',$content->id); ?> ><i class="fa fa-pencil"></i></a></button>
                                            
                                            
                                         </td>
                                    </tr>
                                    <?php $i++; ?>
                                    @endforeach
                                    <?php
                                        if(isset($_REQUEST["id"])){
                                            $ch = curl_init();
                                    // curl_setopt($ch, CURLOPT_URL, "http://nbp-backend.mybluemix.net/api/contentproviders/$_REQUEST[id]");
                                            curl_setopt($ch, CURLOPT_URL, "http://batukotapintar.mybluemix.net/api/userklubas/$_REQUEST[id]");

                                            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            // execute the request
                                            $output = curl_exec($ch);
                                            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                            // close curl resource to free up system resources
                                            curl_close($ch);
                                            header('Location: '.url('/pengguna'));
                                            exit;
                                        }
                                        ?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                

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

</body>

	</html>
