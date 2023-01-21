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
  <h2>🇹🇭 Thai 🇲🇲 Myanmar Currency Converter</h2>
  <h2>🇹🇭 ထိုင်း - 🇲🇲 မြန်မာ ငွေလဲနှုန်း တွက်ချက်ခြင်း</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="thaidailyrate">🇹🇭 ထိုင်းဘတ်ပေါက်ဈေး (🇲🇲 မြန်မာငွေ တစ်သိန်း)</label>
      <input type="int" onkeyup="displayDailyRate(this);" class="form-control" id="thaidailyrate" placeholder="ဂဏန်းသီးသန့်သာ ရိုက်ထည့်ပါ။ ဉပမာ - 1250" name="thaidailyrate"><br>
      <span id="dailyrate"></span><br>
      <span id="oneKyat"></span>
    </div>
    <div class="mb-3">
      <label for="mmamt">🇲🇲 မြန်မာငွေ ပမာဏ</label>
      <input type="int" onkeyup="displayTH(this);" class="form-control" id="mmamt" placeholder="မြန်မာငွေ ပမာဏ ရိုက်ထည့်ပါ။" name="mmamt">
    </div>
    <div class="mb-3">
      <label for="thmmt">🇹🇭 ထိုင်းငွေ ပမာဏ</label>
      <input type="int" onkeyup="displayMM(this);" class="form-control" id="thmmt" placeholder="မြန်မာငွေ ပမာဏ ရိုက်ထည့်ပါ။" name="thmmt">
    </div>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    <p id="rate"></p>
  </form>
</div>

</body>
<script src="converter.js"></script>
</html>
