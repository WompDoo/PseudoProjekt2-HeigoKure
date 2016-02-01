<html>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css"
          href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    <title> Heigo Kure</title>
</head>

</html>

<body>
<table id="table" border="2px">
    <thead>
    <tr>
        <th>Eesnimi</th>
        <th>Töö</th>
        <th>Vanus (a)</th>
        <th>Pikkus (cm)</th>
        <th>Kaal (kg)</th>
    </tr>
    </thead>

    <tr>
        <td>Heigo</td>
        <td>Turvamees</td>
        <td>20</td>
        <td>180</td>
        <td>65</td>
    </tr>
    <tr>
        <td>Jaana</td>
        <td>Müüja</td>
        <td>23</td>
        <td>156</td>
        <td>54</td>
    </tr>
    <tr>
        <td>Jorss</td>
        <td>Õpilane</td>
        <td>17</td>
        <td>200</td>
        <td>74</td>
    </tr>
    <tr>
        <td>Stefan</td>
        <td>Rekkajuht</td>
        <td>55</td>
        <td>196</td>
        <td>121</td>
    </tr>
    <tr>
        <td>Juust</td>
        <td>Teetööline</td>
        <td>32</td>
        <td>173</td>
        <td>65</td>
    </tr>

</table>
<script>
    $(function () {
        $("#table").dataTable();
    });
</script>
</body>
</html>