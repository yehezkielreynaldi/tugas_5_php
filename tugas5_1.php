<html>

<head>
    <title>Tugas 5 PHP - Niomic</title>
</head>

<body>
    <caption align="left">Tabel Logika 1111</caption>
    <table border="1">

        <tr>
            <td>Input true </td>
            <td>Input 2</td>
            <td>AND</td>
            <td>OR</td>
        </tr>
        <tr>
            <td>false</td>
            <td>false</td>
            <td><?php echo (0 & 0); ?></td>

            <td><?php echo (0 & 0); ?></td>
        </tr>
        <tr>
            <td>false</td>
            <td>true</td>
            <td><?php echo (0 & 1); ?></td>
            <td><?php echo (0 || 1); ?></td>
        </tr>
        <tr>
            <td>true</td>
            <td>false</td>
            <td><?php echo (1 & 0); ?></td>
            <td><?php echo (1 || 0); ?> </td>
        </tr>
        <tr>
            <td>true</td>
            <td>true</td>
            <td><?php echo (1 & 1); ?></td>
            <td><?php echo (1 || 1); ?></td>
        </tr>

    </table>
</body>


</html>