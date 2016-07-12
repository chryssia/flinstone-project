
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
                            Ubah Keluhan
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <!-- <form id="add-services" method="post" role="form" enctype='application/json' action= <?php echo url('/keluhan');?>> -->
                        <form id="add-services" method="post" role="form" enctype='application/json' >

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Judul</label>
                                <div class="col-sm-10">
                                     <input class="form-control" id="judul" name="judul" value='{{$data->judul}}'>
                                </div>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>

                            <?php
                                $selected = "$data->kategori";
                            ?>
                            <div class="form-group row">
                                    <label for="kategoriSelect" class="col-sm-2 form-control-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select name="kategori" class="form-control" size="1" id="kategori">

                                          <option <?php if($selected == 'Kemacetan'){echo("selected");}?>>Kemacetan</option>
                                          <option <?php if($selected == 'Parkir Liar'){echo("selected");}?>>Parkir Liar</option>
                                          <option <?php if($selected == 'Kerusuhan'){echo("selected");}?>>Kerusuhan</option>
                                          <option <?php if($selected == 'Kebakaran'){echo("selected");}?>>Kebakaran</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Keluhan</label>
                                <div class="col-sm-10">
                                     <textarea class="form-control" rows="6" id="keluhan" name="keluhan">{{$data->keluhan}}</textarea>
                                </div>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                            <?php
                                $selected = "$data->status";
                            ?>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control" size="1" id="status">

                                          <option <?php if($selected == 'Started'){echo("selected");}?>>Started</option>
                                          <option <?php if($selected == 'In Progress'){echo("selected");}?>>In Progress</option>
                                          <option <?php if($selected == 'Done'){echo("selected");}?>>Done</option>
                                    </select>
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
                                        $url = 'http://batukotapintar.mybluemix.net/api/laporanklubas/'.$data->id;
                                        //Initiate cURL.
                                        $ch = curl_init($url);
                                        //The JSON data.
                                        
                                            $jsonData = array(
                                                'judul' => $_POST["judul"],
                                                'kategori' => $_POST["kategori"],
                                                'keluhan' =>$_POST["keluhan"],
                                                'status' =>$_POST["status"]

                                                );
                                        
                                        // foreach ($jsonData as $result) {
                                        //     echo $result; 
                                        //     echo "<br>";
                                        // }
                                        //Encode the array into JSON.
                                        $jsonDataEncoded = json_encode($jsonData);
                                        //Tell cURL that we want to send a POST request.
                                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                                        //Attach our encoded JSON string to the POST fields.
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
                                        //Set the content type to application/json
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
                                        // 
                                        // curl_setopt($ch, CURLOPT_VERBOSE, 0);
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        //Execute the request
                                        $result = curl_exec($ch);

                                        
                                        // 

                                        header('Location: '.url('/keluhan'));
                                        exit;
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
