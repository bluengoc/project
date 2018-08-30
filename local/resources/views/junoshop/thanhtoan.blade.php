<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Hoàn tất đơn hàng</title>
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.13">
    <link rel="stylesheet" type="text/css" href="thanhtoan.css">
  </head>
<body>
  	<div id="header">
      <div class="checkout">
    		<div class="left">
    			<div class="container">
            <div class="row">
              <div class="col-12">
                <a href="#"><img src="img/logo.png" alt="JUNO"></a>
              </div>
              <div id="menu col-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home </a></li><span> ></span>
                  <li class="breadcrumb-item"><a href="#"> Library</a></li><span> ></span>
                  <li class="breadcrumb-item active"> Data</li>
                </ul>
              </div>
            </div>
    			</div>
          <div class="form">
            <div><p>THÔNG TIN GIAO HÀNG</p></div>
            <div class="col-12">
              <form action class="row">
                <div class="check-form">
                  <label for="name">Họ và tên: </label><br>
                  <input type="text" required id ="name">
                </div>
                <div class="email">
                  <label for="name">Email: </label><br>
                  <input type="text" required id ="email">
                </div>
                <div class="sdt">
                  <label for="name">Số điện thoại: </label><br>
                  <input type="text" required id ="phone">
                </div>
                <div class="check-form">
                  <label for="name">Địa chỉ: </label><br>
                  <input type="text" required id ="adress">
                </div>
                <div class="sdt">
                  <label for="name">Tỉnh/Thành: </label><br>
                  <input type="text" required id ="province">
                </div>
                <div class="sdt">
                  <label for="name">Quận/Huyện: </label><br>
                  <input type="text" required id ="district">
                </div>
                <div class="sdt">
                  <label for="name">Xã/Phường: </label><br>
                  <input type="text" required id ="village">
                </div>
                <span style="color: red; float: left; margin-right: 260px; margin-top: 33px;"> < Giỏ hàng</span>
                <div class="complete">
                  <button class="btn">Hoàn tất đơn hàng</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="container">
            <div class="row">
              <table class="table">
                <tbody>
                  <tr>
                    <td><img class="img" src="img/Vi/product_1.jpg"></td>
                    <td>Ví cầm tay Juno khoá kéo VI058</td>
                    <td>350,000<sup>đ</sup></td>
                  </tr>
                  <tr>
                    <td><img class="img" src="img/Vi/product_2.jpg"></td>
                    <td>Ví cầm tay Juno kiểu dáng phong thư VI063</td>
                    <td>390,000<sup>đ</sup></td>
                  </tr>
                  <tr>
                    <td style="font-weight: bold;">Tổng cộng</td>
                    <td></td>
                    <td>740,000<sup>đ</sup></td>
                  </tr>
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>