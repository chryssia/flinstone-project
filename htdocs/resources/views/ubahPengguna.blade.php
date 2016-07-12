1
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
                            Ubah Pengguna
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form id="add-services" method="post" role="form" enctype='application/json'>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Nama</label>
                                <div class="col-sm-10">
                                     <input class="form-control" id="nama" name="nama" value='{{$data->nama}}'>
                                </div>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>

                             
                           
                            <?php
                                $selected = "$data->desa";
                            ?>

                             <div class="form-group row">
                                    <label for="desaSelect" class="col-sm-2 form-control-label">Desa</label>
                                    <div class="col-sm-10">
                                       <!--  <select id="{{$data->desa}}" class="form-control" name="desa" selected='{{$data->desa}}' value="{{$data->desa}}">
                                            <option value="Sukamaju">Sukamaju</option>
                                            <option value="Batu Indah">Batu Indah</option>
                                            <option value="StoneCity">StoneCity</option>
                                        </select> -->
                                        <select name="desa" class="form-control" size="1">

                                          <option <?php if($selected == 'Sukamaju'){echo("selected");}?>>Sukamaju</option>
                                          <option <?php if($selected == 'Batu Indah'){echo("selected");}?>>Batu Indah</option>
                                          <option <?php if($selected == 'StoneCity'){echo("selected");}?>>StoneCity</option>


                                        </select>
                                    </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Foto</label>
                                <div class="col-sm-10">
                                     <input type="file" value='{{$data->foto}}'>
                                </div>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                           <!--  <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Password</label>
                                

                                <div class="col-sm-10">
                                     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" >
                                </div>
                                <!--  <p class="help-block">Example block-level help text here.</p>
                            </div> -->
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Role</label>
                                <div class="col-sm-10">
                                     <input class="form-control" id="role" name="role" value='{{$data->posisi}}'>
                                </div>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Alamat</label>
                                <div class="col-sm-10">
                                     <input class="form-control" id="alamat" name="alamat" value='{{$data->alamat}}'>
                                </div>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Telepon</label>
                                <div class="col-sm-10">
                                     <input class="form-control" id="telepon" name="telepon" value='{{$data->telepon}}'>
                                </div>
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-2 form-control-label">E-Mail</label>
                                <div class="col-sm-10">
                                     <input class="form-control" id="email" name="email" value='{{$data->id}}'>
                                </div>
                                
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>

                            <br><br>
                            <div class ="form-group row">
                                
                                <div class="col-sm-12">
                                    {{csrf_field() }}
                                    <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Submit</button>
                               
                                </div>
                                

                                
                            </div>

                        </form>
                                <?php
                                    if(isset($_POST["submit"])) {
                                       

                                        //API Url
                                        $url = 'http://batukotapintar.mybluemix.net/api/userklubas/'.$data->id;
                                        //Initiate cURL.
                                        $ch = curl_init($url);
                                        //The JSON data.
                                        
                                            $jsonData = array(
                                                'nama' => $_POST["nama"],
                                                'desa' => $_POST["desa"],
                                                'alamat' =>$_POST["alamat"],
                                                'telepon' =>$_POST["telepon"],
                                                'id' =>$_POST["email"],
                                                'posisi' =>$_POST["role"]
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

                                        // url('/pengguna');
                                        // // 
                                        header('Location: '.url('/pengguna'));
                                        exit;

                                        
                                    }
                                    // url('/pengguna');
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
