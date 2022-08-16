<!doctype html>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>Details</title>
        <link rel="stylesheet" href="charity.css">
    </head>
    <body>
        <div id="dtl">
    <p>Information submitted</p>
    <ul>
   <li><b>Your firsrt name:</b> <?php echo $_POST["fName"] ?></li>
   <li><b>Surname:</b> <?php echo $_POST["sName"] ?></li>
   <li><b>Gender:</b> <?php echo $_POST["gender"] ?></li>
   <li><b>Mob number:</b> <?php echo $_POST["tel"] ?></li>
   <li><b>Date:</b> <?php echo $_POST["date"] ?></li>
   <li><b>Time:</b> <?php echo $_POST["time"] ?></li>
    </ul><br>
    <p>Please choose your payment method, our <b>Business number is:</b> 400500</p>
    <p>Your reference number is:</p>
    <p><img id="pesa" scr="mpesa.png"> <button onclick="document.getElementById('voda').style.display='block'">M-PESA</button></p>
    <div id="voda">
        <ol>
            <li>Dial *150*00#</li>
            <li>Choose 4 "pay by M-pesa(Lipa kwa Mpesa)"</li>
            <li>Choose 4 "Enter bussiness number(Namba ya Kampuni)" -- 400500</li>
            <li>Enter ref number(kumb no)-- your given ref number</li>
            <li>Enter amount</li>
            <li>Enter your pin(neno siri)</li>
            <li>Confirm(Thibitisha)</li>
        </ol>
        <button onclick="document.getElementById('voda').style.display='none'">Hide</button>
    </div>
    <p> <img id="pesa" scr="tigoh.jpg"> <button onclick="document.getElementById('tigo').style.display='block'">TIGO PESA</button></p>
    <div id="tigo">
        <ol>
            <li>Dial *150*01#</li>
            <li>Choose 4 "pay bills"</li>
            <li>Choose 3 "Enter bussiness number(Namba ya Kampuni)" -- 400500</li>
            <li>Enter ref number(kumb no)-- your given ref number</li>
            <li>Enter amount</li>
            <li>Enter your pin(neno siri)</li>
            <li>Confirm(Thibitisha)</li>
        </ol>
        <button onclick="document.getElementById('tigo').style.display='none'">Hide</button>
    </div>
    <p><img id="pesa" src="Airtel.jpg"> <button onclick="document.getElementById('air').style.display='block'">AIRTEL MONEY</button></p>
    <div id="air">
        <ol>
            <li>Dial *150*60#</li>
            <li>Choose 5 "pay bills"</li>
            <li>Choose 4 "Enter bussiness number(Namba ya Kampuni)" -- 400500</li>
            <li>Enter ref number(kumb no)-- your given ref number above</li>
            <li>Enter amount</li>
            <li>Enter your pin(neno siri)</li>
            <li>Confirm(Thibitisha)</li>
        </ol>
        <button onclick="document.getElementById('air').style.display='none'">Hide</button>
    </div>
    <p><img id="pesa" src="bank.jpg"> <button onclick="document.getElementById('bank').style.display='block'">BANK</button>
    <div id="bank">
        <ol>
            <li>Account name: Baptist Church Morogoro</li>
            <li>Account number: 0152588810</li>
            <li>use given Ref number above</li>
        </ol>
        <button onclick="document.getElementById('bank').style.display='none'">Hide</button>
    </div>
</div> 
</body>
</html>