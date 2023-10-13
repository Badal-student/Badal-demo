<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File handling</title>
</head>
<body>
    <table border="1">
            <tr>
                <!-- <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Address</th>
                <th>Date</th> -->
            </tr>
            <?php
            $f=fopen("us_treap.csv","r+");
            while(!feof($f))
            {
            $data=fgets($f);
            $d=explode(",",$data);
            if($d[0]!="")
            {         
            ?>
            <tr>
                <td><?php echo $d['0'];?></td>
                <td><?php echo $d['1'];?></td>
                <td><?php echo $d['2'];?></td>
                <td><?php echo $d['3'];?></td>
                <td><?php echo $d['4'];?></td>
                <td><?php echo $d['5'];?></td>
                <td><?php echo $d['6'];?></td>
            </tr>
            <?php
            }
        }
            ?>
    </table>
</body>
</html>
