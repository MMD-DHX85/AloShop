<?php session_start(); 
$cnt = $_SESSION['cart_count'];?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snippet - BBBootstrap</title>
    <link type="text/css" rel="stylesheet" href="css/cart.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body classname="snippet-body" data-new-gr-c-s-check-loaded="14.1113.0" data-gr-ext-installed="">
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted" style="padding-left: 10px;"><?php echo($cnt); ?> item(s)
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['cart'])) {
                    $conn = new PDO("mysql:host=localhost;dbname=Online_Shop", "root", "");
                    $err = $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    
                    $Psub = 0;

                    for ($i = $cnt-1; $i >= 0; $i--) {
                        $pro = $_SESSION['cart'][$i];
                        $stmt = $conn->prepare("SELECT * FROM products WHERE Pro_Code='$pro';");
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);

                        $Psub = $Psub + $row['Pro_Price'];

                        $img = $conn->prepare("SELECT * FROM image WHERE Pro_Code='" . $row['Pro_Code'] . "';");
                        $img->execute();
                        $img_row = $img->fetch(PDO::FETCH_ASSOC);

                        if ($row['Off'] > 0) {
                            $Off = ($row['Pro_Price'] / 100) * $row['Off'];
                            $price = $row['Pro_Price'] - $Off;
                        } else
                            $price = $row['Pro_Price'];
                        ?>
                        <div class="row">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="<?php echo $img_row['Path']; ?>"></div>
                                <div class="col">
                                    <div class="row text-muted">
                                        <?php echo ($row['Pro_Cat']) ?>
                                    </div>
                                    <div class="row">
                                        <?php echo ($row['Pro_Name']) ?>
                                    </div>
                                </div>
                                <div class="col">
                                    <a href="#">-</a><a href="#" class="border">

                                    </a><a href="#">+</a>
                                </div>
                                <div class="col">
                                    <?php echo ("$" . $row['Pro_Price']) ?><span class="close">✕</span>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>


                <div class="back-to-shop"><a href="store.php">←<span class="text-muted">Back to shop</span></a></div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5><b>Summary</b></h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col"><?php echo($cnt); ?> item(s)</div>
                    <div class="col text-right"><?php echo("$" . $Psub); ?></div>
                </div>
                <form>
                    <p>SHIPPING</p>
                    <select>
                        <option class="text-muted">Standard-Delivery- FREE</option>
                    </select>
                </form>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right"><?php echo("$" . $Psub); ?></div>
                </div>
                <a href="checkout.php" class="primary-btn order-submit">CHECKOUT</a>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        var myLink = document.querySelectorAll('a[href="#"]');
        myLink.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
            });
        });
    </>

</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>