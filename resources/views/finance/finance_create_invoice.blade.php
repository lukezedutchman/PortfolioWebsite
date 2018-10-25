<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Create Invoice</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="stylesheet" href="../../../public/css/create_invoice.css">
    <link rel="stylesheet" href="{{asset('css/create_invoice.css')}}">
</head>
<body>

<nav>
    <h1><b>BARROC IT</b><br>Software for real</h1>

    <h2>Finance</h2>
    <div class="tooltip"><h2>?</h2>
        <span class="tooltiptext">Tooltip text</span>
    </div>
    </div>
    <div class="navbuttons">
        <button class="navbutton"><span>Client Information</span></button>
        <button class="navbutton"><span>Create Invoice</span></button>
        <button class="navbutton"><span>Overview Invoices</span></button>
    </div>
</nav>

<div class="main">

    <form action="/action_page.php" id="create_invoice">
        <label for="dateofinvoice"></label>
        <input placeholder = "Date of Invoice" class = "textbox-n" type = "text" onfocus = "(this.type = 'date')"  id = "date">

        <label for="invoicebtw"></label>
        <input type="text" id="invoicebtw" name="invoicebtw" placeholder="Invoice BTW" required>


        <label for="invoicenumber"></label>
        <input type="text" id="invoicenumber" name="invoicenumber" placeholder="Invoice Number (will be automatically generated)" disabled>

        <label for="invoiceexclusivebtw"></label>
        <input type="text" id="invoiceexclusivebtw" name="invoiceexclusivebtw" placeholder="Invoice exclusive BTW" required>


<div class="wrapper">
        <textarea name="description" form="create_invoice" placeholder="Description" rows="7"></textarea>

        <div class="wrapper-for-button">

            <label for="invoicetotal"></label>
            <input type="text" id="invoicetotal" name="invoicetotal" placeholder="Invoice total" required>

            <!-- Search bar for clients -->

            <input type="submit" value="Save">
        </div>
</div>

    </form>
</div>



<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>