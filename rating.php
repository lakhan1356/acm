<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Oswald:200,300,400,500,600,700|Roboto+Slab:300" rel="stylesheet">
    <link href="fonts.googleapis.com/css?family=Hind"; rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

    <title>Login/Signup</title>
    <style>
    #heading{position:absolute;
    top:30px;
    left:42%;
    font-size:38px;
    font-weight:bold;
    border:1px solid black;
    padding : 4px;
    font-family:century gothic;
    box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.8);


}
      #container{
      position:relative;
      margin-top:-7%;
        border : 2px solid gray;
        width:35%;
        padding:10px;
        padding-top:41px;
        padding-bottom:41px;
        border-radius:10px;
        box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.8);
        transition:0.5s;
      }
      
      #container2{
      visibility:hidden;
      position:relative;
      margin-top:-42%;
        border : 2px solid gray;
        width:35%;
        padding:10px;
        padding-top:80px;
        padding-bottom:41px;
        border-radius:10px;
        box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.8);
        transition:0.5s;
      }
      #container3{
      visibility:hidden;
      position:relative;
      margin-top:-20%;
        border : 2px solid gray;
        width:35%;
        padding:10px;
        padding-top:41px;
        padding-bottom:41px;
        border-radius:10px;
        box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.8);
        transition:0.5s;
      }
      #container:hover{
        transform:scale(1.03);
        transition:0.5s;
        background:rgba(255,255,255,0.8);
      }
      #container2:hover{
        transform:scale(1.03);
        transition:0.5s;
        background:rgba(255,255,255,0.8);
      }
      .address{
      width:64%;
      height:6%;
       padding:10px;
       border-radius:5px;
       border: 1px solid gray;
       <!--transition:0.5s;-->
       
      }
      .address:hover{
        transform:scale(1.05);
        <!--transition:0.5s;-->
      }
      .textbox{
       width:45%;
       height:6%;
       padding:10px;
       border-radius:5px;
       border: 1px solid gray;
       <!--transition:0.5s;-->
       
      }
      .textbox:hover{
        transform:scale(1.05);
        <!--transition:0.5s;-->
        
      }
      
      #submit{
        width:20%;
        height:6%;
      border-radius:5px;
        cursor:pointer;
        background:rgba(255,255,255,0.5);
        
        border: 1px solid gray;
      }
      #submit:hover{
       transform : scale(1.05);
       
      }
      #signup_btn {


        display:inline-block;
        position: absolute;
      padding:0.35em 1.2em;
      margin:0.6em 0.6em 0.6em 0.6em;
      border-radius:0.12em;
      box-sizing: border-box;
        text-decoration: none;
        text-decoration: bold;
        border:0.1em solid #FFFFFF;
        font-family:'Roboto',sans-serif;
      font-weight:300;
        background: black;
        color: #FFFFFF;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        transition: color 0.6s, background-color 0.6s;
}
      #signup_btn:hover {
        text-decoration: none;
          text-decoration: bold;
        box-shadow: 1px 1px 2px white;
      text-shadow: 1px 1px 2px black;
        background-color: #FFFFFF;
        color: #000000;
      }
      @media all and (max-width:30em){
      .button1 {
        text-decoration: none;
        text-decoration: bold;
      display:block;
      margin:0.4em auto;
      }
      }
  
      body{
       background-image:url("bg.jpeg");
       background-size:100% 100%;
       font-family:'Oswald',sans-serif;
      }
      .loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid black;
  border-bottom: 16px solid white;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  position:fixed;
  top:45%;
  left:45%;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
#overlay{
  height:100%;
  width:100%;
  background:rgba(0,0,0,1);
  z-index:11111;
  position:fixed;
  top:0;
  left:0;
}
    </style>
  </head>
  
  <body>
  <img src="imgs/form_bg.jpg" id="pic" style="position:absolute;left:0px;top:0px;height:120%;width:100%;"/>
  <div id="heading">Search For Worker</div>

  <br/><br/>
</div>  
    
    
    <center>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <form id="container2" action="insert_rating.php" method ="POST" >
        <input type="text" class = "textbox" placeholder="Worker Username" name="name" >
        
        <input type = "password" class="textbox" placeholder = "Password" name = "password"><br/><br/>
        
        
        <input id = "submit" type = "submit" value = "Login" name ="submit" ><br/><br/>
        <a href="update_Information.php">Forgot Password</a>
      </form>
    <form id="container3" action="update.php" method ="POST" >
        <input type="text" class = "textbox" placeholder="username" name="user" >
        
        <input type = "password" class="textbox" placeholder = "Password" name = "password"><br/><br/>
        
        
        <input id = "submit" type = "submit" value = "Login" name ="submit" ><br/><br/>
        <a href="update_Information.php">Forgot Password</a>
      </form>
    </center>
    
  
    <script type = "text/javascript">
      
      function show_login(){
         container.style.cssText = "visibility:hidden !important;"
         container2.style.cssText = "visibility:visible  !important;"
                 container3.style.cssText = "visibility:hidden  !important;"

      }

    </script>
    
    <script>
      var overlay=document.getElementById("overlay");
      window.addEventListener('load',function(){
      overlay.style.display="none";
      })
    </script>
    <!--Validation-->
    <script>
function validateForm() {
    var a = document.forms["myForm"]["name"].value;
    if (a == "") {
        alert("Name must be filled out");
        return false;
    }
  var b = document.forms["myForm"]["email"].value;
    if (b == "") {
        alert("Email must be filled out");
        return false;
    }
  var c = document.forms["myForm"]["password"].value;
    if (c == "") {
        alert("Password must be filled out");
        return false;
    }
  var d = document.forms["myForm"]["con_pass"].value;
    if (d == "") {
        alert("Conform password must be filled out");
        return false;
    }
  if(c!=d)
  {
    alert("Password does not matched")
  }
  var f = document.forms["myForm"]["mobile_number"].value;
    if (f == "") {
        alert("Mobile number must be filled out");
        return false;
    }
  length=f.toString().length;
  if(f!="" && length!=10){
      alert("Mobile number should be of 10 digits");
      return false;
  }
  var e = document.forms["myForm"]["Address_line_two"].value;
    if (e == "") {
        alert("Address must be filled out");
        return false;
    }
  var g = document.forms["myForm"]["Address_line_three"].value;
    if (g == "") {
        alert("Address must be filled out");
        return false;
    }
  
  var h = document.forms["myForm"]["dob"].value;
    if (h == "") {
        alert("Date of Birth must be filled out");
        return false;
    }
  
}
$(document).ready(function(){
  $("input").focus(function(){
    $(this).css("background-color","#f2f2f2");
  });
});
$(document).ready(function(){
  $("input").blur(function(){
    $(this).css("background-color","white");
  });
});






</script>
  </body>
</html>
