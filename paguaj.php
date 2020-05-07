<html>

<head>
    <title>Online Paying</title>
    <link href='https://fonts.googleapis.com/css?family=David Libre' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="lib/reset.css">
    <link rel="stylesheet" href="lib/animate.css">
    <link rel="stylesheet" href="lib/stilizimi.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="javascript/jquery-3.4.1.min.js"></script>
    <script src="javascript/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
</head>

<script>
    $(document).ready(function () {

        $(".wrapper").dialog({
            width: 350,
            height: 555,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            }
        });


    });


    function validateForm(form) {

        if (form.payName.value == "") {
            alert("Error: Input is empty!");
            form.payName.focus();
            return false;
        }


        if (form.cardNm.value == "") {
            alert("Error: Input is empty!");
            form.cardNm.focus();
            return false;
        }

        if (form.expdate.value == "") {
            alert("Error: Input is empty!");
            form.expdate.focus();
            return false;
        }


        if (form.cvc.value == "") {
            alert("Error: Input is empty!");
            form.cvc.focus();
            return false;
        }

        return true;
    }

</script>

<body>


    <div class="wrapper">
        <div class="payment">
            <form id="payForm" name="pForm" method="POST" action="index.php" onsubmit="return validateForm(this);">
                <h2>Card Details</h2>
                <div id="forma">
                    <div class="card space icon-relative">
                        <label class="label">Card holder:</label>
                        <input type="text" class="input require" placeholder="Your Name" name="payName" required>
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="card space icon-relative">
                        <label class="label">Card number:</label>
                        <input type="text" class="input require" placeholder="0000 0000 0000 0000" maxlength="16"
                            minlength="16" name="cardNm" required>
                        <i class="far fa-credit-card"></i>
                    </div>
                    <div class="card-grp space">
                        <div class="card-item icon-relative">
                            <label class="label">Expiry date:</label>
                            <input type="text" name="expdate" class="input require" placeholder="00 / 00" maxlength="5"
                                minlength="5" required>
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="card-item icon-relative">
                            <label class="label">CVC:</label>
                            <input type="text" class="input require" placeholder="000" maxlength="3" minlength="3"
                                name="cvc" required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>

                    <div id="pay">
                        <input type="submit" class="pay" value="Pay" name="submit" />
                    </div>
                    <div class="oobtn" id="oobtn">
                        Close
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="javascript/allpages.js"></script>
	<script src="javascript/jquerythingz.js"></script>
</body>

</html>