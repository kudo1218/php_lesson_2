<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>課題2</title>
</head>
<body>
  <h1>FizzBuzz問題</h1>
  <form method="post">
    <div>
      <label>FizzNum: <label>
      <input type="text" name="fizz"><br>
    </div>
    <div>
      <label>BuzzNum: <label>
      <input type="text" name="buzz"><br>
    </div>
    <input type="submit" value="実行">
  </form>
  <?php
    echo '<h2>' .【出力】 . '</h2>';
    if(empty($_POST[fizz] && $_POST[buzz])){
      echo '値を入力してください。';
    }else{
      $fizz = $_POST[fizz];
      $buzz = $_POST[buzz];
      if(!preg_match("/[0-9]+$/",$fizz)){
        echo '数字を入力してください';
      }else if(!preg_match("/[0-9]+$/",$buzz)){
        echo '数字を入力してください';
      }else{
        echo '正常';
      }
    }
  ?>
  </body>
</html>
