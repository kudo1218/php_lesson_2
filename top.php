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
    <input type="submit" name="start" value="実行">
  </form>
  <?php
    function fizzbuzz() {
      $fizz = $_POST[fizz];
      $buzz = $_POST[buzz];
      echo '<h2>' .【出力】 . '</h2>';
      if(preg_match("/[0-9]/",$fizz) && preg_match("/[0-9]/",$buzz)){
        for($i = 1; $i <= 99; $i++) {
          if($i % $fizz === 0 && $i % $buzz === 0) {
            echo 'FizzBuzz:' . $i . '<br>';
          }else if($i % $fizz === 0) {
            echo 'Fizz' . $i . '<br>';
          }else if($i % $buzz === 0) {
            echo 'Buzz' . $i . '<br>';
          }
        }
      }else{
        echo '整数値を入力してください';
      }
    }
    if(!empty($_POST[start])) {
      fizzbuzz();
    }
  ?>
  </body>
</html>
