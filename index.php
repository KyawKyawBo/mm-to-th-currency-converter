<?php
include 'price.php';
$page = $_SERVER['PHP_SELF'];
$sec = "5";
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<head>
    <title>My Business Plan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid text-center">
        <h1>My Business Plan</h1>
        <h2>Copy, Scan, Print, Typing Shop</h2>
        <h3>Required Things</h3>
        <h4>1. A Copier</h4>
        <p>A copier to print and copy documents in black and white.</p>
        <p>Estimated Cost = <?php echo $copier_price ?> MMK</p><a href="https://m.facebook.com/permalink.php?story_fbid=pfbid02CTJVdLGJMTuNYP8iYJDodSWF8uekDEgWoEdTARwh7u7xqwejuGmu857Yhm1oD21bl&id=100057343785654 ">Ref Link for price</a>
        <figure class="figure">
            <img class="img-fluid" src="https://www.gcs.co.th/sites/11037/files/s/products/o_1d4mus221hv21rv4u9qgp3184ab.jpg" alt="iR2530">
            <figcaption class="figure-caption text-center">iR2530</figcaption>
        </figure> <hr>
        <h4>2. A Cutter</h4>
        <p>to cut papers</p>
        <p>Estimated Cost = <?php echo $cutter_price ?> THB</p>
        <a href="https://shopee.co.th/product/258472041/7261264221">Ref Link for price</a>
        <figure class="figure">
            <img src="https://cf.shopee.co.th/file/948e77e436c12afc68067cecc20b4450" alt="paper cutter " class="img-fluid">
            <figcaption class="figure-caption">A4 Paper Cutter</figcaption>
        </figure> <hr>
        <h4>3. A Card Cut Machine</h4>
        <p>to cut Card like Business Card, Visiting Card</p>
        <p>Estimated Cost = <?php echo $electric_cutter_price ?> THB</p>
        <a href="https://www.lazada.co.th/products/dtawan-electric-cut-card-machine-sk-316-a4-i2145874970-s7171614375.html?exlaz=d_1:mm_150050845_51350205_2010350205::12:19039203577!!!!!c!!7171614375!120267009">Ref Link for price</a>
        <figure class="figure">
            <img class="img-fluid" src="https://ae01.alicdn.com/kf/HTB1orU.coGF3KVjSZFmq6zqPXXar/A4-size-electric-card-cutter-90-54mm-card-size-SK316-Heavy-duty-fine-tuning-electric-business.jpg_Q90.jpg_.webp" alt="Electric Card Cut Machine">
            <figcaption class="figure-caption">A4 Sized Electric Card Cutter</figcaption>
        </figure> <hr>
    </div>
</body>
</html>