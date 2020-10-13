<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
 
  <meta charset="utf-8">
  <!--responsive--><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
 <!--responsive-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <style>
.container {
	padding: 100px 100px;
	
}
body {
  
  background: lightblue url("https://mk0followthecam6ioqe.kinstacdn.com/wp-content/uploads/2019/12/Sea-Shell.jpg") no-repeat fixed center; 
  
  background-size:cover;
  
}
}
<!--navbar-->
.navbar {
		background-color: #dcd3cb;
      margin-bottom: 0;
      border-radius: 0;
    }
<!--navbar-->
<!--serach bar-->
body {
  font-family: Arial;

}

* {
  box-sizing: border-box;
   
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
<!--serach bar-->
</style>
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">logo</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="LOGOUT.PHP">Logout</a></li>
    </ul>
    
  </div>
</nav>
<!--navbar-->
<div class="form" style="padding-left:400px;padding-top:50px">
 <h2>Forms</h2>
  <button type="button"><a href="FAMILY.PHP">FAMILY</a></button>
  <button type="button" class="btn btn-danger">Baptism </button>
  <button type="button" class="btn btn-success">Holy communion</button>
  <button type="button" class="btn btn-default">Conformation</button>  
  <button type="button" class="btn btn-warning">daeth cerificate</button> 
  <button type="button" class="btn btn-primary">Nikka</button> 
    
</div>
<!--serach bar-->


<form class="example" action="/action_page.php" style="margin:auto;max-width:300px; padding-top:100px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<!--serach bar-->

<!--button-->
<div class="container" style="padding-left:270px;padding-top:50px">
  <h2>Areas</h2>
  <button type="button" class="btn btn-primary">B.C</button>
  <button type="button" class="btn btn-primary">P.A.F</button>
  <button type="button" class="btn btn-primary">H.G</button>
  <button type="button" class="btn btn-primary">C.T</button>
  <button type="button" class="btn btn-primary">Q.B</button>
  <button type="button" class="btn btn-primary">N.C</button>
  <button type="button" class="btn btn-primary">Z.C</button>
  <button type="button" class="btn btn-primary">M.T</button>
  <button type="button" class="btn btn-primary">KPOR#1</button>
  <button type="button" class="btn btn-primary">KOR#2</button>
  <button type="button" class="btn btn-primary">PNT</button> 
  
    
   
</div>

</body>
</html>
