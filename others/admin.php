<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<link rel="icon" type="image" href="../assets/images/imgsidebar2.jpg">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    th{
        text-align: center;
    }
    td{
        text-align: center;
    }

    .logo{
            width: 40px;
            height: 40px;
        }
        #header{
            margin-top: 90px;
            
        }
   #text{
    width: 70%;
    height: 150%;
   }
  #msg,#add,#ntc:hover{
            cursor: pointer;
  }
    
</style>



</head>
<body>
<!--the navbar section-->
<div class="container"  id="navbar">
        
        
             <nav class="navbar navbar-dark  bg-dark navbar-expand-sm fixed-top">
             <div class="container">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
               <span class="navbar-toggler-icon"></span> 
             </button>
             <a  class="navbar-brand mr-12" href="#"><img src="../assets/images/imgsidebar2.jpg" class="logo"></a>
               <div class="collapse navbar-collapse" id="Navbar">
               <ul class="navbar-nav mr-auto">
               <li class="nav-item active"><a class="nav-link " href="../index.html">Home</a></li>
               <li class="nav-item"><span><a class="nav-link " data-toggle="modal" data-target="#AddAdmin"    id="add">AddAdmin</a></span></li>
               <li class="navb-item"><span><a class="nav-link" data-toggle="modal" data-target="#messagearea" id="msg" >SendMessage</a></span></li>
               <li class="nav-item"><span><a class="nav-link " data-toggle="modal" data-target="#noticearea"  id="ntc">NewNotice</a></span></li>
               <li class="nav-item"><a class="nav-link " href="login.php">Logout</a></li>
               <li class="nav-item"><a class="nav-link " href="#">Geekcode</a></li>
               </ul>
               </div>
             </div>
             </nav>
    </div>
    <div class="container" id="header" style="background-color: whitesmoke;">
        <div class="container" id="heading" style="padding: 10px;">
            <div class="row">
                <div class="col-sm-2 col-lg-12" style="text-align: center;background-color:#2196f3;">
                <h1 style="color:white;font-size: 50px;">Siksha 'O' Anusandhan</h1>
                </div>
                <div class="col-sm-2 col-lg-12">
                    <h4 style="text-align: center;">(Deemed to be University)</h4>
                </div>
                <div class="col-sm-2 col-lg-12">
                    <b><h3 style="color:green; text-align: center;">ITER Alumni Tracker<br>
                    Institute of Technical Education and Research</h3> </b>

                </div>
            </div>
        </div>
    </div>    

    <div class="modal fade" id="messagearea" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Message</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="admin.php" method="POST">
                        <div class="form-group row">
                                    <label class="col-md-4 offset-md-2  col-form-label " for="regno">Registration Number</label>
                                    <input type="text" class="form-control col-md-4 col-xs-4"  id="regno" 
                                    name="registrationnumber"
                                    placeholder="Enter Registration Number">
                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-12  offset-md-2" style="margin-bottom:90px;width: 100%;">
                                <textarea  id="text" class="form-text form-control" name="textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-4 offset-md-2">
                               <input type="submit" class="btn btn-primary" name="message_button" value="SEND">
                           </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="noticearea" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Notice</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="admin.php" method="POST">
                       
                        <div class="form-row">
                            <div class="col-md-12  offset-md-2" style="margin-bottom:90px;width: 100%;">
                                <textarea  id="text" class="form-text form-control" name="textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-4 offset-md-2">
                               <input type="submit" class="btn btn-primary" name="notice_button" value="POST">
                           </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



     <div class="modal fade" id="AddAdmin" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Admin</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="admin.php" method="POST">
                        <div class="container">
                        <div class="form-group row">
                     <label for="name" class="col-md-2 col-form-label offset-md-2" style="color:black;">Name</label>
                     <div class="col-md-6"><input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" ></div>
                </div>
                <div class="form-group row">
                     <label for="email" class="col-md-2 col-form-label offset-md-2" style="color:black;">Email</label>
                     <div class="col-md-6"><input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" ></div>
                </div>
                <div class="form-group row">
                     <label for="username" class="col-md-2 col-form-label offset-md-2" style="color:black;">Username</label>
                     <div class="col-md-6"><input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" ></div>
                </div>
                <div class="form-group row">
                     <label for="password" class="col-md-2 col-form-label offset-md-2" style="color:black;">Password</label>
                     <div class="col-md-6"><input type="password" class="form-control" name="password_1" id="password" placeholder="Enter password" ></div>
                </div>
                <div class="form-group row">
                     <label for="password1" class="col-md-2 col-form-label offset-md-2" style="color:black;">Condirm password</label>
                     <div class="col-md-6"><input type="password" class="form-control" name="password_2" id="password1" placeholder="Confirm password" ></div>
                </div>
                <input type="hidden" name="type"   value="Admin">
                <input type="hidden" name="status" value="1">
                        <div class="form-row">
                           <div class="col-md-4 offset-md-2">
                               <input type="submit" class="btn btn-primary" name="add_button" value="SEND">
                           </div> 
                        </div>
                     </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>

	<div id="datatable">
        <div class="container">
    <form action="admin.php" method="POST">
        <?php 

        if(isset($_POST['search'])){

            $valuetosearch1=$_POST['valuetosearch1'];
            $query="SELECT * FROM user WHERE CONCAT(name,regno,contact,email,gender,branch,year,orgname,designation) LIKE '%".$valuetosearch1."%'  ";
            $search_result=filtertable($query);
        }
        else{
            $query="SELECT * FROM user WHERE type='Alumni'";
            $search_result=filtertable($query);


        }



        function filtertable($query){
            $connect=mysqli_connect('localhost','root','','reg');
            $filter_result=mysqli_query($connect,$query);
            return $filter_result;
        }
        ?>
<br>
<br>
<input type="text"    class="form-control"    style="width: 300px;" name="valuetosearch1" placeholder="Search" ><br><br> 
<input type="submit"  class="btn btn-warning" name="search" value="Filter">
<input type="submit"  class="btn btn-primary" name="reset" value="Reset"><br>

    </div>
    <div class="table-responsive" style="margin-top: 10px;">
	<table class="table table-striped " >
    <thead>
      <tr>
        <th style="padding: 15px;">NAME</th>
        <th>REGISTRATION NUMBER</th>
        <th style="padding: 15px;">CONTACT</th>
        <th style="padding: 15px;">EMAIL</th>
        <th style="padding: 15PX;">GENDER</th>
        <th style="padding: 15px;">BRANCH</th>
        <th>PASSING YEAR</th>
        <th style="padding:15px;">ORGANISATION</th>
        <th style="padding:15px;">DESIGNATION</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        <?php while($row=mysqli_fetch_array($search_result)):?>
        <tr>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["regno"];?></td>
            <td><?php echo $row["contact"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["gender"];?></td>
            <td><?php echo $row["branch"];?></td>
            <td><?php echo $row["year"];?></td>
            <td><?php echo $row["orgname"];?></td>
            <td><?php echo $row["designation"];?></td>
            <td></td>
            <td><input type="submit" name="detail"  class="btn btn-success" value="Detail" ></td>
            <td><input type="hidden" name="delete_username" value="<?php echo $row['username']?>"></td>
            <td><input type="submit" name="delete"  class="btn btn-danger" value="Delete"></td>
        </tr>
    <?php endwhile;?>
    </tbody>
    </form>
    </div>
	</div>
    
	
</div>

</body>
</html>

<?php 

//$textarea="";
$connect=mysqli_connect('localhost','root','','reg');
if(isset($_POST['message_button'])){
    $registrationnumber=$_POST['registrationnumber'];
    $textarea=$_POST['textarea'];
    $query="UPDATE `user` SET message='$textarea'  WHERE regno='$registrationnumber'";
    $queryselect=mysqli_query($connect,$query);
    if($queryselect)
   {
    echo '<script type = "text/javascript"> alert("Message Successfully Sent")</script>';
   }
  else
   {
    echo '<script type = "text/javascript"> alert("Message Not Sent")</script>';
   }

}


?>
<?php
$connect=mysqli_connect('localhost','root','','reg');
if(isset($_POST['notice_button'])){
    $noticearea=$_POST['noticearea'];
    $querynotice="INSERT INTO `notice`( message) VALUES ('$noticearea')    ";
    $querynoticerun=mysqli_query($connect,$querynotice);
     if($querynoticerun){
        echo '<script type = "text/javascript"> alert("Notice Posted Successfully")</script>';
    }
    else{
        echo '<script type = "text/javascript"> alert("Error While posting Notice")</script>';
    }
}


?>
<?php
$connect=mysqli_connect('localhost','root','','reg');
if(isset($_POST['delete'])){
    $username=mysqli_real_escape_string($connect,$_POST['delete_username']);
    $deletequery="DELETE  FROM user WHERE username='$username'";
    $deletequeryrun=mysqli_query($connect,$deletequery);
    if($deletequeryrun){
        echo '<script type = "text/javascript"> alert("User Successfully Deleted")</script>';
    }
    else{
        echo '<script type = "text/javascript"> alert("Error While Deleting User")</script>';
    }
}


?>


<!-- add admin -->

<?php

$connect=mysqli_connect('localhost','root','','reg');
if(isset($_POST['add_button'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $


}


?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
