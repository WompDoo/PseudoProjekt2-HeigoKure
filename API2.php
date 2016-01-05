<!DOCTYPE HTML>
<html>
<head>
    <title>In-ADS komponent</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="http://inaadress.maaamet.ee/inaadress/js/inaadress.min.js"></script>
</head>
<body>
<div id="aadressiotsing" style="width: 600px; height: 400px"></div>
<form action="post.php" method="post">
    <input type="hidden" name="aadress" id="aadress">
    <button type="submit">Salvesta</button>
</form>
<script>
    var inAadress = new InAadress({"mode":"3",
        "container":"aadressiotsing",
        "nocss":false,"appartment":1,
        "searchLayers": ["VAIKEKOHT", "EHITISHOONE"]
    });
    document.addEventListener('addressSelected', function(e){
        var aadress = e.detail.aadress;
        document.getElementById('aadress').value = aadress;
        aadress = aadress.split(", ").reverse().join(", ");
        inAadress.setAddress(aadress);
        inAadress.hideResult();
    });
</script>
</body>
</html>