<?php 
  include 'inc/header.php';
  include 'lib/User.php';
  $user = new User();
?>
 
 <?php  
   $loginmsg = Session::get('loginmsg');
   if (isset($loginmsg)) {
     echo $loginmsg;
   }
   Session::set('loginmsg',NULL);
 ?>
   <div class="panel panel-dafault">
       	 <div class="panel-heading">
            <h2>User list<span class="pull-right"><strong>Welcome! </strong>
            <?php 
               $name = Session::get("name");
               if (isset($name)) {
                 echo $name;
               }
            ?>
            </span></h2> 
          </div>
          <div class="panel-body">
             <table class="table table-striped">
                <td width='20%'>Serial</td>
                <td width='20%'>Name</td>
                <td width='20%'>Username</td>
                <td width='20%'>Email Address</td>
                <td width='20%'>Action</td>

                <tr>
                   <td>01</td>
                   <td>Md Rashedul Islam</td>
                   <td>rashedul</td>
                   <td>rashedulislam.ruet@gmail.com</td>
                   <td>
                      <a class="btn btn-primary" href="profile.php?id=1">View</a>
                   </td>
                </tr>

                <tr>
                   <td>02</td>
                   <td>Md Kawsar</td>
                   <td>kawser</td>
                   <td>Kawser@gmail.com</td>
                   <td>
                      <a class="btn btn-primary" href="profile.php?id=2">View</a>
                   </td>
                </tr>

                <tr>
                   <td>03</td>
                   <td>Ariful Islam</td>
                   <td>ariful</td>
                   <td>ariful@gmail.com</td>
                   <td>
                      <a class="btn btn-primary" href="profile.php?id=3">View</a>
                   </td>
                </tr>
             </table>
          </div>
   </div>
  
<?php 
  include 'inc/footer.php';
?>
   