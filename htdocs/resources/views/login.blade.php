<?php session_start(); ?>
@include('layouts/header')
<style>
* {
box-sizing: border-box;
}

*:focus {
  outline: none;
}
body {
font-family: Arial;
/*background-color: #171c8a;*/
background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url("https://dpavilionarchitects.files.wordpress.com/2009/05/32.jpg");
height:100%; 
background-size:cover;
/*color:#fff;*/
/*padding: 60px;*/
}
.login {
margin: 20px auto;
width: 500px;
height: 600px;
}
.login-screen {
/*background-color: #FFF;*/
padding: 60px;
border-radius: 5px
}

.app-title {
text-align: center;
/*color: #777;*/
}

.login-form {
text-align: center;
}
.control-group {
margin-bottom: 10px;
}

input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
  border: 2px solid transparent;
  background: #2196f3;
  color: #ffffff;
  font-size: 16px;
  line-height: 25px;
  padding: 10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 3px;
  box-shadow: none;
  transition: 0.25s;
  display: block;
  width: 250px;
  margin: 0 auto;
}

.btn:hover {
  background-color: #34d2db;
}

.login-link {
  font-size: 12px;
  color: #444;
  display: block;
  margin-top: 12px;
}
</style>
<body>
  <div class="login">
<!--     <div class="row">
      <div class="col">
        <img src="http://cdn.utekno.com/wp-content/uploads/2015/02/telkomsel-logo.png" width="50%">
      </div>

    </div> -->
    <div class="login">
      <form class="form-signin" method="post" role="form" enctype='application/json'>
    <div class="login-screen">
      <div class="app-title">
        <h1>Login to Kluba</h1>
      </div>

      <div class="login-form">
        <div class="control-group">
        <input type="text" class="login-field" value="" placeholder="username" id="username" name="username">
        <label class="login-field-icon fui-user" for="login-name"></label>
        </div>

        <div class="control-group">
        <input type="password" class="login-field" value="" placeholder="password" id="password" name="password">
        <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>
        {{ csrf_field() }}
        <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">login</button>
        
        <a class="login-link" href="#">Lost your password?</a>
      </div>
    </div>
  </form>
  </div>
 <?php
    if(isset($_POST["submit"])) {
                                    //API Url
      $url = 'http://batukotapintar.mybluemix.net/api/userklubas/login';
                //Initiate cURL.
      $ch = curl_init($url);
                //The JSON data.
      $jsonData = array(
        'email' => $_POST["username"],
        'password' => $_POST["password"]
        );
                    // foreach ($jsonData as $result) {
                    //     echo $result; 
                    //     echo "<br>";
                    // }

                //Encode the array into JSON.
      $jsonDataEncoded = json_encode($jsonData);

                //Tell cURL that we want to send a POST request.
      curl_setopt($ch, CURLOPT_POST, 1);

                //Attach our encoded JSON string to the POST fields.
      curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

                //Set the content type to application/json
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                //Execute the request
      $result = curl_exec($ch);
      // echo $result;
      $result = json_decode($result);
      if($result->loginStatus==1){
        $_SESSION["user_id"] = $_POST["username"];
        header('Location: '.url('/dashboard'));
        exit;
      }
      else{
        echo 'salah';
      }
    }
    ?>

  </div>
  @include('layouts/footer')
</body>

</html>

