<?php
session_start();
  require '../Database/connect.php' ; 
   
	$sql = "SELECT * FROM `user` where `user_id` = '".$_SESSION['id']."'";
  $exec_requete = mysqli_query($con,$sql);
  $reponse = mysqli_fetch_array($exec_requete);


  if (isset($_SESSION['info']))
  $msg = $_SESSION['info'];
  else 
  $msg=" ";
	

?>

  <?php require '../components/menu.php' ;  ?> 

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <div class="container bootstrap snippets bootdeys">
  <div class="row">
    <div class="col-xs-12 col-sm-9">
      <form class="form-horizontal">
          <div class="panel panel-default">
            <div class="panel-body text-center">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-circle profile-avatar" alt="User avatar">
            </div>
            
            <form action="../Database/upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
              </form>
            
                <p class="lower-case">  Feedback</p>
                <div class="ratings">
                  <ul class="list-inline">
                      <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                  </ul>
                </div>
          </div>

        <form method="post" action='../Database/update.php'>
        <?php echo $msg ?>
        
        <div class="panel panel-default">
          
          <div class="panel-heading">
          <h4 class="panel-title">User info</h4>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-sm-2 control-label" >First name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="fname" value="<?php echo $reponse['prenom'];?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Last name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="lname"   value="<?php echo $reponse['nom'];?>">
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="panel-title">Contact info</h4>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Mobile number</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" name="mnumber" value="<?php echo $reponse['numtel'];?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">E-mail address</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" value="<?php echo $reponse['email'];?>" disabled>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="panel-title">Security</h4>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Current password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" class="oldpass" name="oldpass" >
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">New password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" class="newpass" name="newpass">
              </div>
            </div>
            

            

            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <input type="submit" class="btn btn-primary" value="Submit" name="edit">
                <input type="reset" class="btn btn-default" value="Cancel">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </form>
  
  <?php require '../components/footer.php' ;  ?> 

    

