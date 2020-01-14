<!DOCTYPE HTML>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<style>
  body {
    background-color: #f1f1f1;
    font-family: Roboto;
  }
  .summary {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Roboto;
    font-size: 18px;
    padding: 40px;
    width: 70%;
    min-width: 300px;
    align-items: center;
  }
  #summarytitle{
    text-align: center;
  }
  #bottomcontainer{
    text-align: center;
  }
  .sub-menu {
    z-index: 1000;
    position: static;
    height: 150px;
  }
  .sub-menu li {
      display: none;
      list-style-type: none;
  }
  .sub-menu li:first-child{
    text-transform: capitalize;
  }
  button {
    background-color: #0e3a8f;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
  }
  button:hover {
    opacity: 0.8;
  }
</style>

<?php
  $firstname=$_GET['firstname'];
  $lastname=$_GET['lastname'];
  $email=$_GET['email'];
  $phone=$_GET['phone'];
  $sandwich=$_GET['sandwich'];
  $chickenwrap=$_GET['chickenwrap'];
  $entree=$_GET['entree'];
  $side=$_GEt['sides'];
  $cheesefries=$_GET['cheesefries'];
  $salad=$_GET['salad'];
  $notes=$_GET['requests'];
  $pickup=$_GET['time'];
  $fullname = "$firstname"." "."$lastname";
  $order = "$sandwich"." "."$chickenwrap"." "."$entree"." "."$side"." "."$cheesefries"." "."$salad";

?>

<body>
  <div class="summary">
    <div id="summarytitle">
      <h2>Order Confirmed</h2>
    </div>
    <div class="sub-menu" id="dropDownMenu">
      <ul>
        <li><?php echo "Name: $fullname"; ?></li>
        <li><?php echo "Email: $email"; ?></li>
        <li><?php echo "Phone number: $phone"; ?></li>
        <li><?php echo "Your order: $order"; ?></li>
        <li><?php echo "Pickup Time: $pickup"; ?></li>
        <li><?php echo "Requests: $notes"; ?></li>

      </ul>
    </div>
    <div id="bottomcontainer">
      <button href="#">Back to Home</button>
    </div>
  </div>

  <script>
    $("#dropDownMenu li").each(function(i) {
    $(this).delay(100 * i).fadeIn(500);
    });
  </script>


</body>
</html>
