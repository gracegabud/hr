
<?php
  include 'header.php';
?>
<title>HR Dashboard|Employee</title>

    <div class="wrapper">
          <div class="side-bar">
                <ul>
                    <li class="menu-head">
                        HR Dashboard <a href="#" class="push_menu"></a>
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
<?php
        include 'hrd_db.php';
       include 'header.php';
            if(isset($_POST['search']))
            {
                $val = $_POST['valueToSearch'];
                $query = "SELECT * FROM employee WHERE idno /*CONCAT('idno','lname','fname','gender','department','email')*/ LIKE '%".$val."%' " OR "SELECT * FROM employee WHERE lname /*CONCAT('idno','lname','fname','gender','department','email')*/ LIKE '%".$val."%' ";
                $search_Result = filterTable($query);   
                /*if($query == true)
                {
                }
                else
                {
                    echo "Data not Found";
                }*/

               /* found in lib. like function 
               if(strstr($membership, "AB")){
  
               }else{
  
               }

                if(stripos('idno', $val) == FALSE){
                $output = '';
                   $output .= '
                    <div class="table-responsive">
                        <table align="center">
                        <tr>
                        <td>
                    "Data not Found"
                    </td>
                    </tr>
                    </table>
                    ';
                    echo "Data not Found";
                }*/

            }
            else{
                $query = "SELECT * FROM employee";
                $search_Result = filterTable($query);
            }
            function filterTable($query)
            {
              $connect = mysqli_connect("localhost","root","","hrdashboard");
              $filter_Result = mysqli_query($connect, $query);
              return $filter_Result;

            }
      /*      $result = mysqli_query('$filter_Result');
            if (!$result) {
            die('Invalid query: ' . mysql _error());
}*/

?>

<div class="content">
<div id="header">
    <p style="font-size: 12pt;color:rgb(103,0,1); padding:8px; margin-top: 60px; width:1500px; margin-left: 20px; "> <b>EMPLOYEE INFORMATION</b></p>
    </div>
    <br><br>
<!-- 
      <div class="alert alert-success alert-dismissible" role="alert" style="margin-left: 440;margin-right: 440"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button><strong>Success!</strong> Data saved successfully! </div> -->
    <table border=0  style="margin-left: 7%"" width="82%">
    <tr>
    <td>
            <form action="employees.php" method="post">
              

                <table border= 0 >
                    <tr>
                      <td width="25%">   
                     <div class="input-group" >
                      <input type="text" name="valueToSearch" placeholder="Search via ID Number" class="form-control" autocomplete="off" style="margin-left:-20px; margin-top: 13px"><br>
                      <span class="input-group-btn">
                     <input type="submit" name="search" class="btn btn-default" value="Search" style="margin-top: 13px;margin-left:-21px;"></input>
                     </span>
                      </div></td>
                      </tr>
                      </table></form>
    </td>
    <td width="5%">
                    <a href="person_info.php" class="btn btn-info btn-md">
                   <span class="glyphicon glyphicon-plus"></span> Add Employee </a>
    </td>
    </table><br>
            <form action="employees.php" method="post">
                      <table id="employeesTable" border=1 style=" font-size: 11pt ;margin-left: 50px; width: 90%" class="table table-bordered table-hover">
                    <tr>
                        <th width="10%"> ID </th>
                        <th> Name </th>
                        <th> Gender </th>
                        <th> Department </th>
                        <th> Email </th>
                        <th> Image </th>
                        <th width="10%"> Option </th>
                    </tr>
                    <?php while($row = mysqli_fetch_array($search_Result)):?>
                      <tr > 
                            <td>  <?php echo $row['idno'];?></a></td>
                            <td><?php echo $row['lname'];?>, <?php echo $row['fname'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['department'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['image'];?></td>
                            <td style="text-align: center"><a href="update_info.php?id=<?php echo $row['idno'];?>" class="btn-warning btn-sm"><span class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Edit" aria-hidden="true"></span></a>
                            <a onclick="return confirm( 'Are you sure you want to delete <?php echo $row['fname'];?> <?php echo $row['lname'];?>?')"  href="delete_info.php?id=<?php echo $row['idno'];?>" class="btn btn-danger btn-sm" ><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete" aria-hidden="true"></span></a></td>
                        </tr>
                    <?php endwhile;?>
                    </table><br>
                    <table border=0 style=" font-size: 11pt ;margin-left: 50px; width: 90%">
                    <!-- <?php if(stripos('idno', $val) == false):?>
                        <tr>
                        <td colspan="6"><b><i> Data not Found!</i></b></td>
                        </tr>
                        onclick="deleteRecord('<?php echo $row['idno'];?>');"
                    <?php endif;?> -->
                </table>
                </form>

                <div class="modal fade" id="addEmployee" tableindex="-1" role="dialog" aria-labelledby="addLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="addLabel">Add Employee</h4>
      </div>
        <div class="modal-body">
        <form data-toggle="validator" method="POST" action="insert_employee.php">
          <div class="form-group">
            <label for="sn">ID Number</label>
            <input type="text" class="form-control" id="id" name="IDNO">
          
          </div>
          <div class="form-group">
            <label for="st">Last Name</label>
            <input type="text" class="form-control" id="ln" name="LNAME">

          </div>


          <div class="form-group">
            <label for="st">First Name</label>
            <input type="text" class="form-control" id="fn" name="FNAME">

          </div>
          <div class="form-group">
            <label for="st">Position</label>
            <input type="text" class="form-control" id="position" name="POSITION">

          </div>
          <div class="form-group">
            <label for="st">Department</label>
            <input type="text" class="form-control" id="dept" name="DEPARTMENT">

          </div>
          <div class="form-group">
            <label for="st">Email</label>
            <input type="text" class="form-control" id="email" name="EMAIL">

          </div>
         
        </div>
        <div class="modal-footer">
          <button type="submit" onclick="saveData()" class="btn btn-primary crud-submit btn-success">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
  
        </body>
        <script type="text/javascript">
          $(document).ready(function(){
              $('#employeesTable').DataTable();
          });
        </script>
    </html>