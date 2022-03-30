<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Result</title>
</head>

<body>
  <?php
			include './processing.php';
	?>
  <style>
  body {
    padding: 0;
    margin: 0;
  }

  .popup__container {
    position: fixed;
    width: 100vw;
    height: 100vh;
    padding: 40px 20px;
    background-image: linear-gradient(to right, #f6d365, #fda085);
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .popup-result {
    width: 500px;
    height: 300px;
    background-color: #fff;
    border-radius: 6px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    font-size: 20px
  }

  .popup-result>a {
    position: absolute;
    bottom: 20px;
    right: 30px;
    padding: 6px 10px;
    background-color: red;
    border: none;
    outline: none;
    border-radius: 6px;
    color: white;
    text-decoration: none;
    font-size: 16px;
  }

  .popup-result>a:hover {
    background-color: rgb(245, 154, 69);
  }
  </style>
  <div class="popup__container">
    <div class="popup-result">
      <span class="result"> Kết quả quả phép tính là: <?php echo $funcCal ?> </span>
      <a class="close-btn" href="index.php">Close</a>
    </div>
  </div>
</body>

</html>