<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Exercise</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <?php
			include './processing.php';
	?>
  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;

  }

  body {
    padding: 50px 0;
    margin: 0;
    background-image: linear-gradient(-55deg, #0b8491, #F62682, #FF6651, #a10bff);
    display: flex;
    flex-direction: column;
    gap: 50px;
    justify-content: center;
    align-items: center;
    font-family: 'Poppins', sans-serif;
  }

  input {
    padding: 8px 16px;
    font-size: 16px;
    border-radius: 3px;

  }

  input {
    flex: 1;
    width: 100%;
    border: 1px solid #ccc;
  }

  input:placeholder-shown {
    color: #eee;
    font-style: italic;
  }

  input:focus {
    outline: none;
    border: 1px solid #00a8ff;
  }

  .d-flex {
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    margin-top: 12px;
  }

  .forms {
    width: 500px;
    background-color: #fff;
    border-radius: 6px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    padding: 20px;
  }

  .title {
    text-align: center;
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 20px;
  }

  label {
    font-size: 16px;
    display: block;
    width: 140px;
  }

  .btn {
    background-color: #00a8ff;
    border: none;
    outline: none;
    cursor: pointer;
  }

  .replace-string label {
    margin-top: 15px;
  }

  .replace-string input {
    margin-top: 8px;
  }
  </style>

  <div class="forms">
    <div class="title">
      Calculation
    </div>
    <form action="result.php" class="calc" method="post" name="frmOparation">
      <div class="d-flex">
        <label for="">First Number</label>
        <input type="text" name="numberA" value="<?php $numberA?>">
      </div>
      <div class="d-flex">
        <label for="">Second Number</label>
        <input type="text" name="numberB" value="<?php $numberB?>">
      </div>
      <div class="d-flex">
        <label for="">Oparation</label>
        <select name="operation" style="padding:5px 10px">
          <option value="sum">+</option>
          <option value="minus">-</option>
          <option value="mul">*</option>
          <option value="div">/</option>
        </select>
      </div>
      <div style="margin-top: 15px">
        <input type="submit" name="submit" class="btn" value="Result">
      </div>
    </form>
  </div>

  <div class="forms">
    <div class="title">Circle</div>
    <form action="index.php" method="post">
      <div class="d-flex">
        <label for="">Superficies: </label>
        <input type="text" name="superficies" placeholder="Enter superficies..." value="<?php echo  $superficies ?>">
      </div>
      <div class="d-flex">
        <label for="">Radius:</label>
        <input type="text" name="radius" placeholder="Enter radius..." value="<?php echo $radius ?>">
      </div>
      <div style="margin: 5px 0; text-align: right; color: red; font-size:12px; font-style: italic; ">
        <?php echo $message ?>
      </div>
      <input style="margin-top: 15px" type="submit" name="submitCircle" value="Circle Caculate" class="btn">
    </form>
  </div>

  <div class="forms">
    <div class="title">Replace String</div>
    <form action="index.php" method="post" class="replace-string">
      <div>
        <label for="">Input String: </label>
        <input type="text" name="inputString" placeholder="Enter your string...">
      </div>
      <div style="display: flex; gap: 10px">
        <div style="flex: 1">
          <label for="">Find: </label>
          <input type="text" name="findString" placeholder="Enter your string...">
        </div>
        <div style="flex: 1">
          <label for="">Replace: </label>
          <input type="text" name="replaceString" placeholder="Enter your string...">
        </div>
      </div>
      <div>
        <label for="">Output String: </label>
        <input disabled type="text" name="outputString" value="<?php
        echo $funcReplace ?>">
      </div>
      <input style="margin-top: 15px" type="submit" name="submitString" value="Replace String" class="btn">
    </form>
  </div>
</body>

</html>