
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand active" href="http://localhost/connect2/index.php">CoNNect2</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="#">About Us <span class="sr-only">(current)</span></a></li>
        <li><a href="#">How It Works!</a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
       

        <?php
        if(isset($_SESSION['user_name'])){
          ?>
        
        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, <?php
        echo $_SESSION['user_name']
          ?>!
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/connect2/view.php">Dashboard</a></li>
            <li><a href="http://localhost/connect2/logout.php">Logout</a></li>
          </ul>
        </li>

<?php
   }
   else{
   ?>
    <li><a href="http://localhost/connect2/loginpage.php">Login/Register</a></li>

    <?php
  }
  ?>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
