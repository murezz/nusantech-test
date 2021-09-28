<?php

error_reporting(0);

class Maze
{
  public function generate($nilai)
  {
    $character = '';
    $a = 0;
    for ($i = 1; $i <= $nilai; $i++) {
      if ($i % 2 == 1) {
        $a++;
      }
      for ($j = 1; $j <= $nilai; $j++) {
        if ($j == 1 || $j == ($nilai)) {
          $character .= '@';
        } elseif ($i % 2 == 1) {
          if (($j == 2 && $a % 2 == 1) || ($j == ($nilai - 1) && $a % 2 == 0)) {
            $character .= ' ';
          } else {
            $character .= '@';
          }
        } else {
          $character .= ' ';
        }
      }
      $character .= '<br/>';
    }
    return $character;
  }
}

$maze = new Maze();
$size = $_GET['size'];

?>

<html>

<body>
  <div align="center">
    <form action="" method="get">
      <input type="number" name="size">
      <button type="submit">Generate</button>
    </form>

    <br>

    <?php

    if (isset($_GET['size']) > 0) {
      echo "<pre>";
      echo $maze->generate($size);
      echo "</pre>";
    } else {
      echo "silahkan masukkan nilai";
    }

    ?>
  </div>

</body>

</html>