<!DOCTYPE html>
<html>
<head>

<style>

.container
{
    width:800px;
   /* overflow:hidden;*/
    display:inline-block;
}
.side-bar
{
    /*background:#74AFAD;*/
    background: #800000;
    position:absolute;
    height:100%;
    width:200px;
    color:#fff;
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


.side-bar ul .menu-head  a
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
  
  border-left: 7px solid #ffd700;
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

/* CSS reset */
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td { 
  margin:0;
  padding:0;
}
html,body {
  margin:0;
  padding:0;
}
table {
  border-collapse:collapse;
  border-spacing:0;
}
fieldset,img { 
  border:0;
}
input{
  border:1px solid #b0b0b0;
  padding:3px 5px 4px;
  color:#979797;
  width:190px;
}
address,caption,cite,code,dfn,th,var {
  font-style:normal;
  font-weight:normal;
}
ol,ul {
  list-style:none;
}
caption,th {
  text-align:left;
}
h1,h2,h3,h4,h5,h6 {
  font-size:100%;
  font-weight:normal;
}
q:before,q:after {
  content:'';
}
abbr,acronym { border:0;
}
/* General Demo Style */
body{
  font-family: "helvetica neue", helvetica;
  background: #000;
  font-weight: 400;
  font-size: 15px;
  color: #aa3e03;
  overflow-y: scroll;
  overflow-x: hidden;
}
.ie7 body{
  overflow:hidden;
}
a{
  color: #333;
  text-decoration: none;
}
.container{
  position: relative;
  text-align: center;
}
.clr{
  clear: both;
}
.container > header{
  padding: 30px 30px 10px 20px;
  margin: 0px 20px 10px 20px;
  position: relative;
  display: block;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
    text-align: left;
}
.container > header h1{
  font-family: "helvetica neue", helvetica;
  font-size: 35px;
  line-height: 35px;
  position: relative;
  font-weight: 400;
  color: #fff;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    padding: 0px 0px 5px 0px;
}
.container > header h1 span{

}
.container > header h2, p.info{
  font-size: 16px;
  font-style: italic;
  color: #f8f8f8;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.6);
}

.slideshow,
.slideshow:after {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    z-index: 0;
}
.slideshow:after {
    content: '';
    background: transparent url(../images/pattern.png) repeat top left;
}
.slideshow li span {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    color: transparent;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: none;
    opacity: 0;
    z-index: 0;
  -webkit-backface-visibility: hidden;
    -webkit-animation: imageAnimation 36s linear infinite 0s;
    -moz-animation: imageAnimation 36s linear infinite 0s;
    -o-animation: imageAnimation 36s linear infinite 0s;
    -ms-animation: imageAnimation 36s linear infinite 0s;
    animation: imageAnimation 36s linear infinite 0s;
}
.slideshow li div {
    z-index: 1000;
    position: absolute;
    bottom: 30px;
    left: 0px;
    width: 100%;
    text-align: center;
    opacity: 0;
    -webkit-animation: titleAnimation 36s linear infinite 0s;
    -moz-animation: titleAnimation 36s linear infinite 0s;
    -o-animation: titleAnimation 36s linear infinite 0s;
    -ms-animation: titleAnimation 36s linear infinite 0s;
    animation: titleAnimation 36s linear infinite 0s;
}
.slideshow li div h3 {
  font-family: "helvetica neue", helvetica;
  text-transform: uppercase;
  font-size: 80px;
  padding: 0;
  line-height: 200px;
  color: rgba(255,255,255, 0.8);
}
.slideshow li:nth-child(1) span { background-image: url("images/home7.jpg") }
.slideshow li:nth-child(2) span {
    background-image: url("imgs/home8.jpg");
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    -ms-animation-delay: 6s;
    animation-delay: 6s;
}
.slideshow li:nth-child(3) span {
    background-image: url("imgs/home10.jpg");
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    -ms-animation-delay: 12s;
    animation-delay: 12s;
}
.slideshow li:nth-child(4) span {
    background-image: url("imgs/home3.jpg");
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    -o-animation-delay: 18s;
    -ms-animation-delay: 18s;
    animation-delay: 18s;
}
.slideshow li:nth-child(5) span {
    background-image: url("imgs/home4.jpg");
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s;
}
.slideshow li:nth-child(6) span {
    background-image: url("imgs/home5.jpg");
    -webkit-animation-delay: 30s;
    -moz-animation-delay: 30s;
    -o-animation-delay: 30s;
    -ms-animation-delay: 30s;
    animation-delay: 30s;
}
.slideshow li:nth-child(2) div {
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    -ms-animation-delay: 6s;
    animation-delay: 6s;
}
.slideshow li:nth-child(3) div {
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    -ms-animation-delay: 12s;
    animation-delay: 12s;
}
.slideshow li:nth-child(4) div {
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    -o-animation-delay: 18s;
    -ms-animation-delay: 18s;
    animation-delay: 18s;
}
.slideshow li:nth-child(5) div {
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s;
}
.slideshow li:nth-child(6) div {
    -webkit-animation-delay: 30s;
    -moz-animation-delay: 30s;
    -o-animation-delay: 30s;
    -ms-animation-delay: 30s;
    animation-delay: 30s;
}
/* Animation for the slideshow images */
@-webkit-keyframes imageAnimation { 
  0% {
      opacity: 0;
      -webkit-animation-timing-function: ease-in;
  }
  8% {
      opacity: 1;
      -webkit-transform: scale(1.05);
      -webkit-animation-timing-function: ease-out;
  }
  17% {
      opacity: 1;
      -webkit-transform: scale(1.1);
  }
  25% {
      opacity: 0;
      -webkit-transform: scale(1.1);
  }
  100% { opacity: 0 }
}
@-moz-keyframes imageAnimation { 
  0% {
      opacity: 0;
      -moz-animation-timing-function: ease-in;
  }
  8% {
      opacity: 1;
      -moz-transform: scale(1.05);
      -moz-animation-timing-function: ease-out;
  }
  17% {
      opacity: 1;
      -moz-transform: scale(1.1);
  }
  25% {
      opacity: 0;
      -moz-transform: scale(1.1);
  }
  100% { opacity: 0 }
}
@-o-keyframes imageAnimation { 
  0% {
      opacity: 0;
      -o-animation-timing-function: ease-in;
  }
  8% {
      opacity: 1;
      -o-transform: scale(1.05);
      -o-animation-timing-function: ease-out;
  }
  17% {
      opacity: 1;
      -o-transform: scale(1.1);
  }
  25% {
      opacity: 0;
      -o-transform: scale(1.1);
  }
  100% { opacity: 0 }
}
@-ms-keyframes imageAnimation { 
  0% {
      opacity: 0;
      -ms-animation-timing-function: ease-in;
  }
  8% {
      opacity: 1;
      -ms-transform: scale(1.05);
      -ms-animation-timing-function: ease-out;
  }
  17% {
      opacity: 1;
      -ms-transform: scale(1.1);
  }
  25% {
      opacity: 0;
      -ms-transform: scale(1.1);
  }
  100% { opacity: 0 }
}
@keyframes imageAnimation { 
  0% {
      opacity: 0;
      animation-timing-function: ease-in;
  }
  8% {
      opacity: 1;
      transform: scale(1.05);
      animation-timing-function: ease-out;
  }
  17% {
      opacity: 1;
      transform: scale(1.1);
  }
  25% {
      opacity: 0;
      transform: scale(1.1);
  }
  100% { opacity: 0 }
}
/* Animation for the title */
@-webkit-keyframes titleAnimation { 
  0% {
      opacity: 0;
      -webkit-transform: translateY(200px);
  }
  8% {
      opacity: 1;
      -webkit-transform: translateY(0px);
  }
  17% {
      opacity: 1;
      -webkit-transform: scale(1);
  }
  19% { opacity: 0 }
  25% {
      opacity: 0;
      -webkit-transform: scale(10);
  }
  100% { opacity: 0 }
}
@-moz-keyframes titleAnimation { 
  0% {
      opacity: 0;
      -moz-transform: translateY(200px);
  }
  8% {
      opacity: 1;
      -moz-transform: translateY(0px);
  }
  17% {
      opacity: 1;
      -moz-transform: scale(1);
  }
  19% { opacity: 0 }
  25% {
      opacity: 0;
      -moz-transform: scale(10);
  }
  100% { opacity: 0 }
}
@-o-keyframes titleAnimation { 
  0% {
      opacity: 0;
      -o-transform: translateY(200px);
  }
  8% {
      opacity: 1;
      -o-transform: translateY(0px);
  }
  17% {
      opacity: 1;
      -o-transform: scale(1);
  }
  19% { opacity: 0 }
  25% {
      opacity: 0;
      -o-transform: scale(10);
  }
  100% { opacity: 0 }
}
@-ms-keyframes titleAnimation { 
  0% {
      opacity: 0;
      -ms-transform: translateY(200px);
  }
  8% {
      opacity: 1;
      -ms-transform: translateY(0px);
  }
  17% {
      opacity: 1;
      -ms-transform: scale(1);
  }
  19% { opacity: 0 }
  25% {
      opacity: 0;
      -webkit-transform: scale(10);
  }
  100% { opacity: 0 }
}
@keyframes titleAnimation { 
  0% {
      opacity: 0;
      transform: translateY(200px);
  }
  8% {
      opacity: 1;
      transform: translateY(0px);
  }
  17% {
      opacity: 1;
      transform: scale(1);
  }
  19% { opacity: 0 }
  25% {
      opacity: 0;
      transform: scale(10);
  }
  100% { opacity: 0 }
}
/* Show at least something when animations not supported */
.no-cssanimations .slideshow li span{
  opacity: 1;
}
@media screen and (max-width: 1140px) { 
  .slideshow li div h3 { font-size: 100px }
}
@media screen and (max-width: 600px) { 
  .slideshow li div h3 { font-size: 50px }
}

</style>
</head>

<body>
<div class="row">
    <div class="wrapper">
          <div class="side-bar">
                <ul>
                    <li class="menu-head">
                        HR Dashboard <a href="#" class="push_menu"><span class="glyphicon glyphicon-align-justify pull-right"></span></a>
                    </li><br>

                    <div class="menu">
                   
                        <li>

                            <a href="home.php" class="active">Home <span class="glyphicon glyphicon-home pull-right" data-toggle="tooltip" title="Home"></span></a>
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
                            <a href="leaves.php">Leaves <span class="glyphicon glyphicon-calendar pull-right" data-toggle="tooltip" title="Leaves"></span></a>
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
            <!--<div class="container">--> 
                <!-- <div class="col-md-12"> 
                <div class="panel-body">-->            
                <ul class="slideshow">
  <li><span>Image 01</span><div><h3></h3></div></li>
  <li><span>Image 02</span></li>
  <li><span>Image 03</span></li>
  <li><span>Image 04</span></li>
  <li><span>Image 05</span></li>
  <li><span>Image 06</span></li>
</ul>

                 
</div>
                        
                            
        

                        </div>
                    </div>
                </div>
            </div>

<script type="text/javascript">
    $(document).ready(function(){
    $(".push_menu").click(function(){
         $(".wrapper").toggleClass("active");
    });
});
</script>

    </div>
  </div>
</div>

  
</body>
</html> 
