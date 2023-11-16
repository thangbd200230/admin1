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
  background-color: yellow; 
}

.navbar a {
  float: left;
  font-size: 16px;
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
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: Green;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: Green;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: black;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
  <div class="subnav">
    <button class="subnavbtn">File <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#Logoff">Logoff</a>
      <a href="#Reports">Reports</a>
      <a href="#Printer Setup">Printer Setup</a>
      <a href="#Exit">Exit</a>
    </div>
  </div> 

  <div class="subnav">
    <button class="subnavbtn">General <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#Medicine">Medicine</a>
      <a href="#Districts">Districts</a>
      <a href="#Facilities">Facilities</a>
      <a href="#Facility Requisitions">Requisitions</a>
      <a href="#Facility Receipts">Receipts</a>
      <a href="#browse Payment packs">browse Payment packs</a>
    </div>
    
  </div> 

  <div class="subnav">
    <button class="subnavbtn">Transact <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">

      <a href="#Capture Requisition">Capture Requisition</a>
      <a href="#Capture Receipt">Capture Receipt</a>
      <a href="#Authorise Payments">Authorise Payments</a>
      <a href="#Upload DDV Order">Upload DDV Order</a>
      <a href="#Upload Payment Pack Docs">Upload Payment Pack Docs</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Queries <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#View Authorised Payments">View Authorised Payments</a>
      <a href="#View Unauthorised Payments">View Unauthorised Payments</a>
      <a href="#Search Facility">Search Facility</a>
      <a href="#Search Tracking number">Search Tracking number</a>
    </div>
  </div> 

  <div class="subnav">
    <button class="subnavbtn">Tools <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#View System Settings">System Settings</a>
      <a href="#View Unauthorised Payments">User Admin</a>
      </div>
  </div> 

  <div class="subnav">
    <button class="subnavbtn">Tracking <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#Payment Pack Process">Payment Pack Process</a>
      <a href="#Deliveries">Deliveries</a>
      </div>
  </div>
  <a href="#contact">Contact</a>
</div>


</body>
</html>



<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
    <div class="module">
    <label for="Tracking Number"><b>Track Number</br></label>
        <h3>CAPTURE REQUISITION</h3>
        <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="alert alert-error">
            </div>
            <input type="text" placeholder="Demand Number" name="Demand Number" required />
             <label for="Catalog number"><b>Select Catalog Number and the date of order</br></label>
                <select name="Catalog number" id="Catalog Number">
                <option value="6598773">6598773</option>
                <option value="7098743">7098743</option>
                <option value="6232123">6232123</option>
                <option value="8809833">8809833</option>
                <option value="3298373">3298373</option>
                <option value="6023432">6023432</option>
                <option value="6878993">6878993</option>
            </select>
            <input type="date" id="Order Date" name="Order Date">
                 <input type="text" placeholder="Quantity Ordered" name="username" required />
            <input type="submit" value="Capture" name="Capture" class="btn btn-block btn-primary" />
        </form>
    </div>


    
</div>

</div>

