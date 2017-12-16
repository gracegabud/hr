<!--
#ffd700 - yellow
#fcc305 - yellow2
#800000 - maroon
#670001 - maroon2
-->
<?php
include 'header.php';
?>

    <div class="wrapper">
          <div class="side-bar">
                <ul>
                    <li class="menu-head">
                        HR Dashboard <a href="#" class="push_menu"><span class="glyphicon glyphicon-align-justify pull-right"></span></a>
                    </li><br>

                    <div class="menu">
                    <!--  <p style="font-family: Verdana,Arial; font-size: 18px; text-align: center;"> <?php  session_start(); echo $_SESSION['fname'],' ', $_SESSION['lname'];?></p>
                      
                        <hr class="style1">  -->
                        <li>

                            <a href="home.php">Home <span class="glyphicon glyphicon-home pull-right" data-toggle="tooltip" title="Home"></span></a>
                        </li>
                        <li>
                            <a href="dashboard.php">Dashboard <span class="glyphicon glyphicon-dashboard pull-right" data-toggle="tooltip" title="Dashboard"></span></a>
                        </li>
                        <li>
                            <a href="employees.php">Employees <span class="glyphicon glyphicon-user pull-right" data-toggle="tooltip" title="Employees"></span></a>
                        </li>
                        <li>
                            <a href="infractions.php">Infractions <span class="glyphicon glyphicon-list-alt pull-right" data-toggle="tooltip" title="Infractions"></span></a>
                        </li>
                        <li>
                            <a href="leaves.php" class="active">Leaves <span class="glyphicon glyphicon-calendar pull-right" data-toggle="tooltip" title="Leaves"></span></a>
                        </li>
                        <li>
                            <a href="reminders.php">Reminders <span class="glyphicon glyphicon-calendar pull-right" data-toggle="tooltip" title="Reminders"></span></a>
                        </li>
                        <li>
                            <a href="logout.php">Logout <span class="glyphicon glyphicon-off pull-right" data-toggle="tooltip" title="Logout"></span></a>
                        </li>

                    </div>
                    
                </ul>
          </div>   
            <div class="content">
                <div class="col-md-12">
                    
                        
                        

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
rel="Stylesheet"type="text/css"/>
<script type="text/javascript">
$(function () {
    $("#txtFrom").datepicker({
        numberOfMonths: 1,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#txtTo").datepicker("option", "minDate", dt);
        }
    });
    $("#txtTo").datepicker({
        numberOfMonths: 1,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#txtFrom").datepicker("option", "maxDate", dt);
        }
    });
});
</script>

<!--<p style="font-family: 'Lato', sans-serif; font-size: 20px">ID No.: <input type="text" id="txtId" /></p>

<p style="font-family: 'Lato', sans-serif; font-size: 20px">Last Name: <input size="20" type="text" id="txtName" /></p>
<p style="font-family: 'Lato', sans-serif; font-size: 20px">First Name: <input size="20" type="text" id="txtName" /></p>
<p style="font-family: 'Lato', sans-serif; font-size: 20px">Start Date: <input type="text" id="txtFrom" maxlength="10" /></p>
<p style="font-family: 'Lato', sans-serif; font-size: 20px">End Date: <input type="text" id="txtTo" maxlength="10" /></p>
 <p style="font-family: 'Lato', sans-serif; font-size: 20px">Reason: <select>
            <option value="volvo">Reason</option>
            <option value="saab">Vacation</option>
            <option value="mercedes">Sick</option>
            <option value="audi">Emergency</option>
        </select></p>-->


        

<form action="insert_leaves.php" method="post">
<table border="0" cellpadding="0" cellspacing="0" style="margin-left: 80px; margin-top: 140px">
<tr>

    <td>
        <p style="font-family: 'Lato', sans-serif; font-size: 20px">ID No.: </p>
    </td>
    <td>
        <input type="text" name="idno"  maxlength="5" style="width: 200px" />
    </td>
</tr>

<tr>
    <td>
        <p style="font-family: 'Lato', sans-serif; font-size: 20px">Last Name: </p>
    </td>
    <td>
        <input size="20" type="text" name="lname" style="width: 200px"/>
    </td>
</tr>

<tr>
    <td>
        <p style="font-family: 'Lato', sans-serif; font-size: 20px">First Name: </p>
    </td>
    <td>
        <input size="20" type="text" name="fname"  style="width: 200px"/>
    </td>
</tr>

<tr>
    <td>
        <p style="font-family: 'Lato', sans-serif; font-size: 20px">Start Date: </p>
    </td>
    <td>
        <input type="text" name="startD" maxlength="10" id="txtFrom"  style="width: 200px"/>
    </td>
    <td>
        &nbsp; 
    </td>
</tr>

<tr>
    <td>
        <p style="font-family: 'Lato', sans-serif; font-size: 20px">End Date: </p>
    </td>
    <td>
        <input type="text" name="endD" maxlength="10" id="txtTo" style="width: 200px"/>
    </td>

</tr>

<tr>
    <td>
        <p style="font-family: 'Lato', sans-serif; font-size: 20px">Reason: </p>
    </td>
    <td>
        
        <select name="reason"  style="width: 200px">
            <option value=" "> </option>
            <option value="Vacation">Vacation</option>
            <option value="Sick">Sick</option>
            <option value="Emergency">Emergency</option>
            <option value="Maternal">Maternal Leave</option>
            <option value="Paternal">Paternal Leave</option>
        </select>
    </td>

</tr>


<script>
  function saveData()
  {
    var idno = $('#idno').val();
    var lname = $('#lname').val();
    var fname = $('#fname').val();
    var startD = $('#startD').val();
    var endD = $('#endD').val();
    var reason = $('#reason').val();

    $.ajax({
      type:"POST",
      url:"insert_leaves.php?p=add",
      data:"id="+idno+"&lname="+lname+"&fname="+fname+"&startD="+startD+"&endD="+endD+"&reason="+reason,
      success: function  (msg) {
        alert('Successfully added.');
      }
    });

  }
  </script>


</table>



<!--<p>
 <button type="submit" style="width: 100px;">Submit</button>
 <button type="reset" style="width: 100px;">Reset</button>
</p> -->
<div>
        <button type="submit" onclick="saveData() " class="btn btn-primary" style="width: 100px; margin-top: 30px; margin-left: 160px">Submit</button>
        <button type="reset" class="btn btn-primary" style="width: 100px; margin-top: 30px; margin-left: 20px">Clear</button>

<script>
  function saveData()
  {
    var idno = $('#idno').val();
    var lname = $('#lname').val();
    var fname = $('#fname').val();
    var startD = $('#startD').val();
    var endD = $('#endD').val();
    var reason = $('#reason').val();

    $.ajax({
      type:"POST",
      url:"insert_leaves.php?p=add",
      data:"idno="+idno+"&lname="+lname+"&fname="+fname+"&startD="+startD+"&endD="+endD+"&reason="+reason,
      success: function  (msg) {
        alert('Successfully added.');
      }
    });

  }
  </script>
</div>

                        </div>
                    </div>
                </div>
            </div>

    
  </div>
</div>

</form>
</body>
</html> 