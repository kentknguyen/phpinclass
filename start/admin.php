<?php ?>

<html>

<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table,
        td {
            border: 1px solid #000;
        }

        th {
            background: #000;
            color: #fff;
            padding: 10px;
        }

        td {
            padding: 20px;
        }

    </style>
</head>

<body>
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>username</th>
            <th>password</th>
        </tr>

        <?php
    
        $cnt = mysqli_connect('localhost', 'root','', 'fssa');
        
        $qry = "select * from uregs19";
        
        $result = mysqli_query($cnt, $qry);
        
//        print_r($result);
        
        while($row = $result->fetch_assoc()){
//            print_r($row);
//            echo '<br><br>';
            echo '
            <tr>
                <td>'.$row['name'].'</td>
                <td>'.$row['eml'].'</td>
                <td>'.$row['user'].'</td>
                <td>'.$row['pw'].'</td>
            </tr>
            ';
        };
        
        mysqli_close($cnt);
        
        ?>

    </table>
</body>

</html>
