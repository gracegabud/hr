<?php
include 'header.php';
?>

<div class="content">
<div id="header">
    <p style="font-size: 18px; padding:8px; margin-top: 50px; width:1500px; margin-left: 20px; "> ADD EMPLOYEE</p>
    </div>
    </div>

<!--<div class="content">

 images/pic.png 
<div class="container" runat="server" style="margin-left: 30px; margin-top: 40px;">      
        <img src="" id="blah" class="img-thumbnail"  width="200" height="200">
        <br><br><input type="file" onchange="readURL(this);" > 

      </div>-->
            <!-- <form id="frm" onsubmit="return validateForm()" method="POST" action="insert_signup.php" > -->
    
            <form class="form-horizontal"  id="frm" onsubmit="return validateForm()" method="POST" action="insert_employee.php" style="margin-left: 300px; margin-top: -180px;" enctype="multipart/form-data"> 
             
            <div class="container" runat="server" style="margin-left: 30px; margin-top: 40px;">      
                    <img src="" id="blah" class="img-thumbnail"  width="200" height="200">
                    <br><br><input type="file" name="image" onchange="readURL(this);"" > 

             </div>      

            <div class="form-group input-group">
            <label style="margin-top: -60px;">ID No.</label> 
                <input type="text" name="idno" class="form-control" placeholder="" style="width: 200px; margin-top: -39px; ">
            </div>

            <div class="form-group input-group">
                <input type="text" name="lname" class="form-control" float-label="Last Name" style="width: 200px; margin-top: 30px;">
            </div>

            <div class="form-group input-group">
                <input type="text" name="fname" class="form-control" placeholder="First name" style="width: 200px; margin-left: 250px; margin-top: -49px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="mname" class="form-control" placeholder="Middle name" required="" style="width: 200px; margin-left: 500px; margin-top: -64px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="bdate" class="form-control" placeholder="Birthdate" required="" style="width: 200px; margin-left: 0px; margin-top: 4px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="address" class="form-control" placeholder="Address" required="" style="width: 200px; margin-left: 250px; margin-top: -49px;"> 
            </div>

            <div class="form-group input-group" style="width: 200px; margin-left: 500px; margin-top: -64px;">
                <!-- <input type="text" name="gender" class="form-control" placeholder="Gender" required="" style="width: 200px; margin-left: 500px; margin-top: -64px;">  -->
                <label style="margin-left: -15px;">Gender:</label> 
                 <input type="radio" name="gender" value="Male" id="radiobtn" style="margin-left: 10px;"><label style="margin-left: 5px;">Male</label> 
                 <input type="radio" name="gender" value="Female" id="radiobtn" style="margin-left: 10px;"><label style="margin-left: 5px;">Female</label></td>

            </div>

            <div class="form-group input-group">
                <input type="text" name="religion" class="form-control" placeholder="Religion" required="" style="width: 200px; margin-top: 44px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="nationality" class="form-control" placeholder="Nationality" required="" style="width: 200px; margin-left: 250px; margin-top: -49px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="status" class="form-control" placeholder="Marital Status" required="" style="width: 200px; margin-left: 500px; margin-top: -64px;"> 
            </div>

              <div class="form-group input-group">
                <input type="text" name="email" class="form-control" placeholder="Email" required="" style="width: 200px;  margin-top: 7px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="phone" class="form-control" placeholder="Phone No." required="" style="width: 200px; margin-left: 250px; margin-top: -47px;"> 
            </div>

            <div class="form-group input-group">
                <input type="text" name="department" class="form-control" placeholder="Department" required="" style="width: 200px; margin-left: 500px; margin-top: -62px;"> 
            </div>

          
</div>


<button style="margin-left: 1110px; margin-top: 10px " class="btn btn-primary" data-toggle="modal" data-target="#addSubject"  >Submit</button>

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

</table>
</body>
</html>
