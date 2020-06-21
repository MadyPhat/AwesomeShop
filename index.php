
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
.jumbotron-fluid{
  background-image: url("https://images.wallpapersden.com/image/download/mix-colour-background_64813_3840x2160.jpg");
}
  #feature {
  margin: auto;
  width: 60%;
  padding: 10px;
  text-align: center;
}
#promotion {
  margin: auto;
  width: 75%;
  padding: 10px;
}
.col-sm-3{
  border: none;
  border-radius: 7px;
  padding: 10px;
  margin: 10px;
}
h3{
  color: white;
}
#category{
  border: none;
}
ul#category{
  list-style-type: none;
  font-family: Arial, Helvetica, sans-serif;
}
.form-control{
  border-radius: 20px;
  width: 400px;
  height: 30px;
}
.mb-4 {
  margin: auto;
  width: 50%;
  padding: 10px;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AwesomeShop</a>
    </div>
    <ul class="nav navbar-nav" style="float: right;">
      <li class="nav-item"><a href="#"> <img src="https://cdn1.iconfinder.com/data/icons/mini-solid-icons-vol-2/16/82-512.png" width="20px;" height="20px;"> Help</a></li>
      <li class="nav-item"><button type="button" class="btn btn-success" style="margin-top: 8px;">join</button></li>
    </ul>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
<div id="feature" class="container-fluid">
  <h2>Shop your designer dressess</h2>
  <p>Ready to waer dress tailored for you from online. Hurry up while stock losts.</p>
  <div class="active-purple-3 active-purple-4 mb-4">
    <input class="form-control" type="text" placeholder="Search your product from here!" aria-label="Search">
  </div>
</div>
</div>
<div id="promotion" class="container-fluid">
<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: pink;">
        <h3>Coupon saving</h3>
        <img src="https://img.icons8.com/bubbles/2x/cutting-coupon.png" alt="Coupon" style="float:right;width:50px;height:50px;">
        <p>Up to 60% of everydat essentails</p>
        <button class="btn btn-outline-success"> 
        <span class="spinner-grow spinner-grow-sm"></span>
        Shop Coupon
        </button>
    </div>
    <div class="col-sm-3" style="background-color: MediumSeaGreen;">
        <h3>Free delivery</h3>
        <img src="https://i1.wp.com/www.creativeclick.co/wp-content/uploads/icon-round-truck.png?fit=858%2C859&ssl=1" alt="Coupon" style="float:right;width:50px;height:50px;">
        <p>With selected items</p>
        <button class="btn btn-outline-success"> 
        <span class="spinner-grow spinner-grow-sm"></span>
        Shop Coupon
        </button>
    </div>
    <div class="col-sm-3" style="background-color: SlateBlue;">
        <h3>Gift voucher</h3>
        <img src="https://icons.iconarchive.com/icons/fps.hu/free-christmas-flat-circle/512/gift-icon.png" alt="Coupon" style="float:right;width:50px;height:50px;">
        <p>With personal care items</p>
        <button class="btn btn-outline-success"> 
        <span class="spinner-grow spinner-grow-sm"></span>
        Shop Coupon
        </button>
    </div>
  </div>
</div>
</div>
<div id="product" class="container">
  <div class="row">
    <div class="col-sm-2">
      <ul id="category">
        <li> <img src="https://images.vexels.com/media/users/3/157295/isolated/lists/5ab1a21aaafa93397c0d6eedcb24731e-computer-laptop-icon.png" width="50px;" height="50px;"> Electronic </li>
        <li> <img src="https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/19057035881578983104-512.png" width="50px;" height="50px;"> Hand bag</li>
        <li> <img src="https://cdn3.iconfinder.com/data/icons/shopping-icons-14/128/05_Wallet-512.png" width="50px;" height="50px;"> Wallet</li>
        <li> <img src="https://img.icons8.com/plasticine/2x/clothes.png" width="50px;" height="50px;"> Clothes</li>
      </ul>
    </div>
    <div class="col-sm-10" style="background-color: grey;">
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>