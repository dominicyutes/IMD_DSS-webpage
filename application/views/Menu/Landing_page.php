<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: grey;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 13px;
  color: white;
  display: block;
}

.sidebar a:hover {
  color: green;
}

.main {
  margin-left: 160px; 
  padding: 0px 10px;
}

.dropdown-content {
  display: none;
  padding-left: 20px;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<?php include '../Default_sidebar.php'; ?>

<div class="main">
  <h1>landing page matter</h1>
  
</div>
     
</body>
</html>
