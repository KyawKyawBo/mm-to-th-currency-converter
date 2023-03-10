<?php 
// $page = $_SERVER['PHP_SELF'];
// $sec = "5";
// if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
//     $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//     header('HTTP/1.1 301 Moved Permanently');
//     header('Location: ' . $location);
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <title>THB to MMK Converter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>๐น๐ญ Thai ๐ฒ๐ฒ Myanmar Currency Converter</h2>
  <h2>๐น๐ญ แแญแฏแแบแธ - ๐ฒ๐ฒ แแผแแบแแฌ แแฝแฑแแฒแแพแฏแแบแธ แแฝแแบแแปแแบแแผแแบแธ</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="thaidailyrate">๐น๐ญ แแญแฏแแบแธแแแบแแฑแซแแบแแฑแธ (๐ฒ๐ฒ แแผแแบแแฌแแฝแฑ แแแบแแญแแบแธ)</label>
      <input type="int" onkeyup="displayDailyRate(this);" class="form-control" id="thaidailyrate" placeholder="แแแแบแธแแฎแธแแแบแทแแฌ แแญแฏแแบแแแบแทแแซแ แแแแฌ - 1250" name="thaidailyrate"><br>
      <span id="dailyrate"></span><br>
      <span id="oneKyat"></span>
    </div>
    <div class="mb-3">
      <label for="mmamt">๐ฒ๐ฒ แแผแแบแแฌแแฝแฑ แแแฌแ</label>
      <input type="int" onkeyup="displayTH(this);" class="form-control" id="mmamt" placeholder="แแผแแบแแฌแแฝแฑ แแแฌแ แแญแฏแแบแแแบแทแแซแ" name="mmamt">
    </div>
    <div class="mb-3">
      <label for="thmmt">๐น๐ญ แแญแฏแแบแธแแฝแฑ แแแฌแ</label>
      <input type="int" onkeyup="displayMM(this);" class="form-control" id="thmmt" placeholder="แแผแแบแแฌแแฝแฑ แแแฌแ แแญแฏแแบแแแบแทแแซแ" name="thmmt">
    </div>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    <p id="rate"></p>
  </form>
</div>

</body>
<script src="converter.js"></script>
</html>
