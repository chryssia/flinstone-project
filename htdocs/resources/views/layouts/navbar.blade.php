<?php
$json = file_get_contents("http://batukotapintar.mybluemix.net/api/userklubas/".$_SESSION["user_id"]."/exists");
$exist = json_decode($json);
if($exist->exists != 1){
    echo "Login First";
}
?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=<?php echo url('/dashboard');?>>Kluba Admin </a> 
                
            </div>
            <!-- Top Menu Items -->
           <!--   --><ul class="nav navbar-right top-nav">
               
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    
                    <li class="{{Request::is('dashboard')? 'active':''}}">
                        <a href=<?php echo url('/dashboard');?>><i class="fa fa-fw fa-dashboard fa-3x"></i> <br>Home </a>
                    </li>
                    <br>
                    <br>
                    <li  class="{{Request::is('pengguna')? 'active':''}}">
                        <a href=<?php echo url('/pengguna');?>><i class="fa fa-fw fa-users fa-3x"></i> <br>Pengguna</a>
                    </li>
                    <br>
                    <br>
                    <li class="{{Request::is('keluhan')? 'active':''}}">
                        <a href=<?php echo url('/keluhan');?>><i class="fa fa-fw fa-comments-o fa-3x"></i> <br>Keluhan</a>
                    </li>
                    <br>
                    <br>
                    <li class="{{Request::is('login')? 'active':''}}">
                        <a href=<?php echo url('/');?>><i class="fa fa-fw fa-sign-out fa-3x"></i><br> Log Out</a>
                    </li>
                    <br>
                    <br>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>