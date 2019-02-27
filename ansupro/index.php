<html>
<head>
<link type="text/css" rel="stylesheet" href="css/stylesheet3.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
    box-sizing: border-box;
}
body {
    font-family: Arial;
    padding: 20px;
    background:url("new.jpg") center;
}
.header {
    padding: 10px;
    font-size: 40px;
    text-align: center;
    background: lightblue;
}
.leftcolumn {   
    float: left;
    width: 75%;
}
.rightcolumn {
    float: left;
    width: 80%;
    padding-left: 80px;
}
.fakeimg {
    background-color:pink;
    width: 100%;
    padding: 20px;
}
.card {
     background-color: lightblue;
     padding: 80px;
     margin-top: 40px;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}
</style>


</head>
<body>
<div class="menudropdown1">
<ul>
 <li><a href="login.php"> log in 
</a>
 </li>
 <li><a href="signup.php"> sign in
 </a>
   
 </li>
 <li> about </li>
 <li> help 
 <ul>
 	<li>contact us</li>
 	<li>notify us</li>>
 </ul>
</li>
 <li><a href="feedbackform.php"> feedback</a>
  </li>
</ul>
</div>

</body>
</html>