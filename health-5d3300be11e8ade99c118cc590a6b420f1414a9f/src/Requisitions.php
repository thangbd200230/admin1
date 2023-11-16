<?php

require 'config.php';

// This is a msg that will be displayed to the user
$_SESSION['requisitionMsg'] = '';

// Getting curremt date
date_default_timezone_set("Africa/Johannesburg");
$created = date("Y-m-d H:i:s");

// Get all data sent from the capture form and assign to the below variables.
$names = (isset($_POST['names']) ? $names = $_POST['names'] : $names = "");
$surname = (isset($_POST['surname']) ? $surname = $_POST['surname'] : $surname = "");
$position = (isset($_POST['position']) ? $position = $_POST['position'] : $position = "");
$facility = (isset($_POST['facility']) ? $facility = $_POST['facility'] : $facility = "");
$demandcode = (isset($_POST['demandcode']) ? $demandcode = $_POST['demandcode'] : $demandcode = "");
$demandnum = (isset($_POST['demandnum']) ? $demandnum = $_POST['demandnum'] : $demandnum = "");
$catnum = (isset($_POST['catnum']) ? $catnum = $_POST['catnum'] : $catnum = "");
$qtyOrdered = (isset($_POST['qtyOrdered']) ? $qtyOrdered = $_POST['qtyOrdered'] : $qtyOrdered = "");
$photo = (isset($_POST['photo']) ? $photo = $_POST['photo'] : $photo = "");

/*
 * The below IF statement does the following:
 * Preventing empty variables to be inserted to the database
 * Avoiding inserting to the database when the page is being loaded
 * Only allows inserting on BUTTON CLICK
 * 
**/
if($names != "" and $surname != "" and $position != "" and $facility != "" and $demandcode != "" and $demandnum != "" and $catnum != "" and $qtyOrdered != ""){
  
  // Insert variables to database
  $sql = "INSERT INTO requisitions (names, surname, position, facility, demandcode, demandnum, catnum, orderqty, photo, created, status)
  VALUES ('$names', '$surname', '$position', '$facility', '$demandcode' ,'$demandnum' ,'$catnum' ,'$qtyOrdered' ,'$photo' ,'$created', 'ok')";
  
  // Set the msg to be displayed to the user
  if ($conn->query($sql) === TRUE) {
      $catnum = "";
      $_SESSION['requisitionMsg'] = '<div class="alert alert-success">New record created successfully</div>';
  } else {
      $_SESSION['requisitionMsg'] = '<div class="alert alert-error">Failed to insert record. Caused by: ' . $sql . '. <b>Reason</b>: ' . $conn->error . '</div>';
  }
}

// Close database connection for security reasons
$conn->close();
?>

<div class="row">
  <div class="col-md-12">
    <?= $_SESSION['requisitionMsg']; ?>
    <h3 class="text-center text-info">Capture Requsition</h3>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="tracknum" class="form-control" placeholder="tracknum">
            </div>
            <div class="form-group"> 
              <input type="text" name="names" class="form-control" placeholder= "Names" value="<?= $_SESSION['name'] ?>" required>
            </div>
            <div class="form-group">
              <input type="text" name="surname" class="form-control" placeholder= "Surname" value="<?= $_SESSION['surname'] ?>" required>
            </div>
            <div class="form-group">
              <input type="text" name="position" class="form-control" placeholder= "Position" value="<?= $_SESSION['position'] ?>" required>
            </div>
            <div class="form-group">
              <input type="text" name="facility" class="form-control" placeholder= "Facility" value="<?= $_SESSION['facility'] ?>" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="demandcode" class="form-control" placeholder= "Demandcode" required>
            </div>
            <div class="form-group">
              <input type="text" name="demandnum" class="form-control" placeholder= "enter Demand Number" required>
            </div>
            <div class="form-group">
              <input type="text" name="catnum" class="form-control" placeholder= "Catalog Number" required>
            </div>
            <div class="form-group">
              <input type="text" name="qtyOrdered" class="form-control" placeholder= "Quantity Ordered" required>
            </div>
            <div class="form-group">
                <input type="file" name="photo" class="custom-file">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <input type="submit" name="add" class="btn "btn-primary btn-block value= "add record">
          </div>
        </div>
      </div>     
    </form>
  </div>
  <div class="col-md-12">
    <?php
    //
      $sql = "SELECT * FROM requisitions";
      $result = $conn->query($sql);
    ?>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>names</th>
          <th>surname</th>
          <th>position</th>
          <th>facility</th>
          <th>demandcode</th>
          <th>demandnum</th>
          <th>catnum</th>
          <th>qtyordered</th>
          <th>image</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $result->fetch_assoc()) { ?> 
        <tr>
          <td><?= $row['tracknum']; ?></td>
          <td><?= $row['names']; ?></td>
          <td><?= $row['surname']; ?></td>
          <td><?= $row['position']; ?></td>
          <td><?= $row['facility']; ?></td>
          <td><?= $row['demandcode']; ?></td>
          <td><?= $row['demandnum']; ?></td>
          <td><?= $row['catnum']; ?></td>
          <td><?= $row['orderqty']; ?></td>
          <td><img src="<?= $row['photo']; ?>" width="25"></td>
          <td>
              <a href="details.php?details=<?= $row['tracnum']; ?>" class="
              badge bagde-primary p-2">Details</a> |
              <a href="action.php?delete=<?= $row['tracknum']; ?>"  class="
              badge bagde-danger p-2">Delete</a> |
              <a href="requisitions.php?edit=<?= $row['id']; ?>" class="badge 
              bagde-succes p-2">Edit</a> |
          </td>
        </tr>
        <?php } $conn->close()?>
      </tbody>
    </table>
  </div>
</div>