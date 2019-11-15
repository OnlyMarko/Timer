<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Timer</title>
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="clock">
    <h1>TIMER</h1>
    <span id="d"></span><span id="h"></span><span id="m"></span><span id="s"></span><span id="work"></span>
    <?php 
    function updatetime() {
      require ("db.php");
      $query ="SELECT * FROM timer WHERE id = '1'";
      $result = mysqli_query($link, $query) or die("Error updatetime $result" . mysqli_error($link)); 
      mysqli_close($link);
      if($result){
        while ( $item = mysqli_fetch_assoc($result) ) 
        {
          $timerlast = $item['endtime'];
          $work = $item['work'];
        };
      };
      if ($work == '0') {
        return;
      } else {
        $currenttime = time();
        $timerlast = strtotime($timerlast);
        $resulttimerstr = abs($timerlast - $currenttime); 
        function timerend() {
          require ("db.php");
          /*$resulttimer = date("Y-m-d H:i:s", $resulttimerstr);*/
          $query ="UPDATE timer SET work='0'";
          $result = mysqli_query($link, $query) or die("Error endtimer $result" . mysqli_error($link));
          mysqli_close($link);
        };
        if ($currenttime > $timerlast) {
          timerend();
          return;
        } else {
          return $resulttimerstr;
        };
      };
    };
    $resulttime = updatetime();
    ?>
    <script>
      var sec = "<?php echo $resulttime ?>";
    </script>
  </div> 
  <script src="script.js"></script>
</body>
</html>


















