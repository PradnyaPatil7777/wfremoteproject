<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #ffffff; 
}

.navbar a {
  float: left;
  font-size: 19px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 19px;  
  border: none;
  outline: none;
  color: black;
  padding: 10px 11px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: sky blue;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #f0f8ff;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#HOME">HOME</a>
  <a href="#ALL LISTING">ALL LISTING</a>
  <a href="#BLOGS">BLOGS</a>
  <a href="#ABOUT US">ABOUT US</a>
  <div class="subnav">
    <button class="subnavbtn">OTHER<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#BecomePartner">Become partner</a>
      <a href="#FAQs">FAQs</a>
    </div>
  </div> 
  <a href="#contact">Contact</a>
   <a href="#logint">login</a>
    <a href="#signup">signup</a>
  <img src=D:\xampp\htdocs\wfremoteproject1\public\img\WFRemote_Logo_New-removebg-preview - Copy.png>
</div>

</body>
</html>
