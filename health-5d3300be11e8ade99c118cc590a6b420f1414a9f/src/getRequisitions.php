<?php
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        $_SESSION['userId'] = $row["id"];
        $_SESSION['username'] = $row["username"];
        $_SESSION['name'] = $row["name"];
        $_SESSION['surname'] = $row["surname"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['password'] = $row["password"];
        $_SESSION['position'] = $row["position"];
        $_SESSION['facility'] = $row["facility"];
        $_SESSION['district'] = $row["district"];
        $_SESSION['avatar'] = $row["avatar"];
        
        if ($username != "") {
            $_SESSION['loginMsg'] = '<div class="alert alert-success">Logged in successfully</div>';
            header('Location: src/template.php?page=home');
        }
        
    }
} else {
    $_SESSION['loginMsg'] = '<div class="alert alert-error">Incorrect username or password. Please try again</div>';
    header('Location: index.php?page=login');
}
$conn->close()
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
      </tbody>
    </table>