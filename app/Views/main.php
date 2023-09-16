<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <form action="/save" method="post">
            <label>studentID</label>
            <input type="text" name="studentID" value="">
            <br>
            <label>FullName</label>
            <input type="text" name="FullName" value="">
            <br>
            <label>YearLevel</label>
            <input type="text" name="YearLevel" value="">
            <br>
            <label>Program</label>
            <input type="text" name="Program" value="">
            <br>
        </form>
    <table border="1">
        <tr>
            <th>studentID</th>
            <th>FullName</th>
            <th>YearLevel</th>
            <th>Program</th>
        </tr>
        <tr>
            <?php foreach ($st as $g): ?>
                <tr>
                    <td><?= $g['studentID']?></td>
                    <td><?= $g['FullName']?></td>
                    <td><?= $g['YearLevel']?></td>
                    <td><?= $g['Program']?></td>
                    <td><a href="delete/<?=$g['id']?>">delete</a></td>
                </tr>
            <?php endforeach; ?>    
        </tr>
    </table>
</body>
</html>