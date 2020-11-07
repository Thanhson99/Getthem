<body>
  <div class="col-md-2 header-left-admin">
    <section>
      <a class="img-admin" href="#">
        <img id="img-admin" src="assets/images/default-avatar.jpg" alt="">
        <h1 id="name">ADMIN</h1>
      </a>
      <div></div>
    </section>
    <div class="menu-left-admin">
      <div class="item">
        <a class="user-menu" href="#">
          <i class="fas fa-circle"></i>
          <h2>Menu Người dùng</h2>
        </a>
      </div>
      <div class="item">
        <a class="user-menu" href="#">
          <i class="fas fa-circle hidden"></i>
          <h2>Thống kê</h2>
        </a>
      </div>
      <div class="item">
        <a class="user-menu" href="#">
          <i class="fas fa-circle hidden"></i>
          <h2>Thêm Thông báo</h2>
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="col-md-12">
      <section class="menu-header">
        <div class="sub-menu-header">
          <i class="fas fa-bars"></i>
          <div id="brbt"></div>
        </div>
      </section>
      <?php 
          //connect database
          $servername = "localhost";
          $database = "id11071958_database";
          $username = "id11071958_thanhson99";
          $password = "Lsl{9AOf*{nD3ItU";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $database);

          // Check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    }?>
      <div class="list-user">
          <table class="data-table">
            <tr>
              <th><input id="check-all" type="checkbox"></th>
              <th>Mã cá nhân</th>
              <th>Email</th>
              <th>Họ tên</th>
              <th>Giới tính</th>
              <th>Ngày sinh</th>
              <th>SĐT</th>
              <th>Địa chỉ</th>
              <th>Thao tác</th>
            </tr>
            <?php 
                $sql = "SELECT * FROM `canhan`";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
                  echo '<form action="" method="POST">
                          <tr>
                            <td><input type="checkbox"></td>
                            <td>'.$row['MaCaNhan'].'</td>
                            <td>'.$row['Email'].'</td>
                            <td>'.$row['HoTen'].'</td>
                            <td>'.$row['GioiTinh'].'</td>
                            <td>'.$row['Ngay'].'/'.$row['Thang'].'/'.$row['Nam'].'</td>
                            <td>'.$row['SDT'].'</td>
                            <td>'.$row['DiaChi'].'</td>
                            <input name="macanhan" style="display: none" type="text" value="'.$row['MaCaNhan'].'">
                            <td><button name="btn-delete" class="le-button" type="submit">Delete</button></td>
                          </tr>
                        </form>';
                }
            ?>
          </table>
          <?php
            if(isset($_POST['btn-delete'])){
              $sql1 = "DELETE FROM `canhan` WHERE MaCaNhan=".$_POST['macanhan'];
              $sql2 = "DELETE FROM `taikhoan` WHERE MaTK=".$_POST['macanhan'];
              if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)){
                echo '<script>alert("Xóa người dùng thành công");window.location="http://localhost/CDIO3/admin.php?check=true";</script>';
              }
            }
          ?>
      </div>
    </div>
  </div>
</body>
</html>