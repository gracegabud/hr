
<?php
include 'hrd_db.php';
$id = $_GET['id'];
/*$sql = "SELECT FROM employee WHERE idno = '".$id."'";
if ($con->query($sql) === TRUE){
?>
*/
 if(isset($id)){
    $result = $con->query("SELECT * FROM employee WHERE idno='".$id."' limit 0,1");
    $data = $result->fetch_assoc();
?>
<?php
    if(isset($_POST['update'])){
        $idno = $_POST['idno'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $bdate = $_POST['bdate'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $religion = $_POST['religion'];
        $nationality = $_POST['nationality'];
        $status = $_POST['status'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $department = $_POST['department'];
        $query = $con->query("UPDATE employee SET idno='$idno',lname='$lname',fname='$fname',mname='$mname',bdate='$bdate',address='$address',gender='$gender',religion='$religion',nationality='$nationality',status='$status',email='$email',phone='$phone',department='$department' WHERE idno = '".$id."' " );
        if($query){
            header("refresh:0; url=employees.php");
        }else{
            echo"Error!";
        }
    }
?>
<html><head>

<meta charset="UTF-8">

<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>HR Dashboard|Employee</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script type="text/javascript">
         var url = "http://localhost:8000/";
        </script>
<script src="/emp_ajax.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
 
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<style>



#header{
  display: block;
  background-color: #800000;
  margin-top: -50px;
  margin-left: -13px;
  color: #fff;

}

  @import url(http://fonts.googleapis.com/css?family=Lato);

.container
{
    width:100%;
    overflow:hidden;
    display:inline-block;
}

a:hover, a:focus{
 background-color: #D9853B;
}

.side-bar
{
    /*background:#74AFAD;*/
    background: #800000;
    position:absolute;
    height:100%;
    width:200px;
    color:#fff;
    margin-top: -15px;
    transition: margin-left 0.5s;
}

.side-bar ul
{
    list-style:none;
    padding:0px;
    
}

.side-bar ul li.menu-head
{
    font-family: 'Lato', sans-serif;
    padding:20px;
}


.side-bar ul li.menu-head a
{
    color:#fff;
    text-decoration:none;
    height:50px;
}


.side-bar ul .menu li  a 
{
    color:#fff;
    text-decoration:none;
    display:inline-table;
    width:100%;
    padding-left:20px;
    padding-right:20px;
    padding-top:10px;
    padding-bottom:10px;
}

.side-bar ul .menu li  a:hover
{
    border-left:3px solid #ECECEA;    
    padding-left:17px;
}

.side-bar ul .menu li  a.active
{
    padding-left:17px;
   /* background:#D9853B;*/
   background: #ffd700;
    border-left:3px solid #ECECEA;
}

.side-bar ul .menu li  a.active:before {
   content:"";
   position: absolute;
   width: 0;
   height: 0;
   border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
  
  border-left: 7px solid #FFD700;
    margin-top: -10px;
    margin-left: 180px;
}


.content
{
    width: 100%;
    padding-left: 200px;
    transition: padding-left 0.5s;
}

.active > .side-bar
{
    margin-left:-150px;   
    transition: margin-left 0.5s;
}

.active > .content
{
    padding-left:50px;
    transition: padding-left 0.5s;

}

.form-group {
  position: relative;
  margin-bottom: 1.5rem;
}

.form-control-placeholder {
  position: absolute;
  top: 0;
  padding: 7px 0 0 13px;
  transition: all 200ms;
  opacity: 0.5;
}

.form-control:focus + .form-control-placeholder,
.form-control:valid + .form-control-placeholder {
  font-size: 75%;
  transform: translate3d(0, -100%, 0);
  opacity: 1;
}
td,th{
   text-align:center;
}


</style>
    <body>

<div class="container">

  <div class="row">
    <div class="wrapper">
          <div class="side-bar">
                <ul>
                    <li class="menu-head">
                        HR Dashboard <a href="#" class="push_menu"><span class="glyphicon glyphicon-align-justify pull-right"></span></a>
                    </li><br>

                    <div class="menu">
                        <li>

                            <a href="home.php">Home <span class="glyphicon glyphicon-home pull-right"></span></a>
                        </li>
                        <li>
                            <a href="dashboard.php">Dashboard <span class="glyphicon glyphicon-dashboard pull-right"></span></a>
                        </li>
                        <li>
                            <a href="employees.php" class="active">Employees <span class="glyphicon glyphicon-user pull-right"></span></a>
                        </li>
                        <li>
                            <a href="infractions.php">Infractions <span class="glyphicon glyphicon-list-alt pull-right"></span></a>
                        </li>
                        <li>
                            <a href="leaves.php">Leaves <span class="glyphicon glyphicon-calendar pull-right"></span></a>
                        </li>
                        <li>
                            <a href="reminders.php">Reminders <span class="glyphicon glyphicon-calendar pull-right"></span></a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalConfirmDelete">Logout <span class="glyphicon glyphicon-off pull-right"></span></a>
                        </li>

                    </div>
                    
                </ul>
          </div>    

            </div>
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Are you sure you want to log out?</p>
                </div>
                    <a href="logout.php" class="btn  btn-outline-secondary-modal">Yes</a>
                    <a type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">No</a>
            </div>
            <!--/.Content-->
        </div>
    </div>


<script type="text/javascript">
    $(document).ready(function(){
    $(".push_menu").click(function(){
         $(".wrapper").toggleClass("active");
    });
});
</script>
<div class="content">
<div id="header">
    <p style="font-size: 18px; padding:8px; margin-top: 50px; width:1500px; margin-left: 20px; "> UPDATE EMPLOYEE</p>


    </div> <!-- end of row -->
    </div> 
<div class="content">
 <div class="container" runat="server" style="margin-left: 30px; margin-top: 40px;">      
        <img src="" id="blah" class="img-thumbnail"  width="200" height="200">
        <br><br><input type='file' name="image" onchange="readURL(this);" > 

         <!--  name="imgInp" -->
      </div>     
<!-- images/pic.png -->

            <!-- <form id="frm" onsubmit="return validateForm()" method="POST" action="insert_signup.php" > -->
    
            <form class="form-horizontal"  method="POST" style="margin-left: 300px; margin-top: -180px;">     
            

            <div class="form-group input-group"><!-- 
            <label style="margin-top: -60px;">ID No.</label>  -->
                <input type="text" name="idno" class="form-control" placeholder="ID Number" required="" value="<?php echo $data['idno']?>" style="width: 200px; margin-top: -39px; ">
            </div>

            <div class="form-group input-group">
                <input type="text" name="lname" class="form-control" placeholder="Last name" required="" value="<?php echo $data['lname']?>"   style="width: 200px; margin-top: 30px;">
            </div>

            <div class="form-group input-group">
                <input type="text" name="fname" class="form-control" placeholder="First name" required="" value="<?php echo $data['fname']?>" style="width: 200px; margin-left: 250px; margin-top: -49px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="mname" class="form-control" placeholder="Middle name" required="" value="<?php echo $data['mname']?>" style="width: 200px; margin-left: 500px; margin-top: -64px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="bdate" class="form-control" placeholder="Birthdate" required="" value="<?php echo $data['bdate']?>" style="width: 200px; margin-left: 0px; margin-top: 4px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="address" class="form-control" placeholder="Address" required="" value="<?php echo $data['address']?>" style="width: 200px; margin-left: 250px; margin-top: -49px;"> 
            </div>

            <div class="form-group input-group" style="width: 200px; margin-left: 500px; margin-top: -64px;">
                <!-- <input type="text" name="gender" class="form-control" placeholder="Gender" required="" style="width: 200px; margin-left: 500px; margin-top: -64px;">  -->
                <label style="margin-left: -15px;">Gender:</label> 
                 <input type="radio" name="gender" value="Male" id="radiobtn" style="margin-left: 10px;" onchange="do_submit()" <?php if($data['gender']=='Male'){?> checked="checked"<?php }?>
                 <label style="margin-left: 5px;">Male</label> 
                 <input type="radio" name="gender" value="Female" id="radiobtn" style="margin-left: 10px;" onchange="do_submit()" <?php if($data['gender']=='Female'){?> checked="checked"<?php }?><label style="margin-left: 5px;">Female</label></td>

            </div>

            <div class="form-group input-group">
                <input type="text" name="religion" class="form-control" placeholder="Religion" required="" value="<?php echo $data['religion']?>" style="width: 200px; margin-top: 44px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="nationality" class="form-control" placeholder="Nationality" required="" value="<?php echo $data['nationality']?>" style="width: 200px; margin-left: 250px; margin-top: -49px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="status" class="form-control" placeholder="Marital Status" required="" value="<?php echo $data['status']?>" style="width: 200px; margin-left: 500px; margin-top: -64px;"> 
            </div>

              <div class="form-group input-group">
                <input type="text" name="email" class="form-control" placeholder="Email" required="" value="<?php echo $data['email']?>" style="width: 200px;  margin-top: 7px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="phone" class="form-control" placeholder="Phone No." required="" value="<?php echo $data['phone']?>" style="width: 200px; margin-left: 250px; margin-top: -47px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="department" class="form-control" placeholder="Department" required="" value="<?php echo $data['department']?>" style="width: 200px; margin-left: 500px; margin-top: -62px;"> 
            </div>

          
</div>


<button style="margin-left: 1110px; margin-top: 20px " class="btn btn-primary" data-toggle="modal" data-target="#addSubject" name="update"  >Update</button>

<script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
    }
}

/*$("#imgInp").change(function(){
    readURL(this);
});*/
</script>


 <script type="text/javascript">
    $(document).ready(function(){
    $(".push_menu").click(function(){
         $(".wrapper").toggleClass("active");
    });
});
</script>
<?php
} else{/*
	echo "<script>location.href='employees.php'</script>";*/
    die('Invalid query: ' . mysqli_error());
    echo"Error Query";
}
?>