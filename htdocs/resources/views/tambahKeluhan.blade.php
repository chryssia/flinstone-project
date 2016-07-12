<?php session_start(); ?>
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
                            Tambah Keluhan
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form id="add-services" method="post" role="form" enctype='application/json'>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Judul</label>
                                <div class="col-sm-10">
                                     <input class="form-control" id="judul" name="judul">
                                </div>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>

                             
                            <div class="form-group row">
                                    <label for="kategoriSelect" class="col-sm-2 form-control-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select id="kategori" class="form-control" name="kategori">
                                            <option value="Kemacetan">Kemacetan</option>
                                            <option value="Parkir Liar">Parkir Liar</option>
                                            <option value="Kerusuhan">Kerusuhan</option>
                                            <option value="Kebakaran">Kebakaran</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Keluhan</label>
                                <div class="col-sm-10">
                                     <textarea class="form-control" rows="6" id="keluhan" name="keluhan"></textarea>
                                </div>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label" name="foto">Foto</label>
                                <div class="col-sm-10">
                                     <input type="file" >
                                </div>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <br><br>
                            <div class ="form-group row">
                                <div class="col-sm-12">
                                    {{csrf_field() }}
                                    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                                </div>
                            </div>

                        </form>
                         <?php
                            if(isset($_POST["submit"])) {
                                //API Url
                                $url = 'http://batukotapintar.mybluemix.net/api/laporanklubas';
                                //Initiate cURL.
                                $ch = curl_init($url);
                                //The JSON data.
                                
                                    $jsonData = array(
                                        'judul' => $_POST["judul"],
                                        'kategori' => $_POST["kategori"],
                                        'keluhan' =>$_POST["keluhan"],
                                        'foto'=>'string',
                                        'userklubaid'=>$_SESSION["user_id"],
                                        'status'=>'Started',
                                        'lat'=> '2.34',
                                        'lng'=>'3.5949',
                                        'like'=>0,
                                        'tanggal'=>'2016-06-29'
                                        );                           

                                $jsonDataEncoded = json_encode($jsonData);
                                //Tell cURL that we want to send a POST request.
                                curl_setopt($ch, CURLOPT_POST, 1);
                                //Attach our encoded JSON string to the POST fields.
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
                                //Set the content type to application/json
                                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
                                //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                //Execute the request
                                $result = curl_exec($ch);
                                //header('Location: '.url('/services'));
                                //exit;
                            }
                
                         ?>
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

<!-- /#wrapper -->
<!-- @include('layouts/footer') -->
// <script>
//     $("#field-subs-type").hide();
//     $("#time-field").hide();
//     $("#hit-field").hide();
//     $("#service-type").change(function()
//     {
//         if($("#service-type").val() == "Content on Demand")
//         {
//             $("#field-subs-type").hide();
//             $("#time-field").hide();
//             $("#hit-field").hide();
//         }
//         else
//         {
//             $("#field-subs-type").show();
//             $("#time-field").show();
//             $("#subs-type").change(function(){
//                 if($("#subs-type").val() == "Time Based"){
//                     $("#time-field").show();
//                     $("#hit-field").hide();
//                 }
//                 else{
//                     $("#time-field").hide();
//                     $("#hit-field").show();
//                 }
//             })
//         }
//     });
// </script>
</body>

</html>
