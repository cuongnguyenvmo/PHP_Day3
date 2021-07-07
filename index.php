<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            table{
                width: 800px;
                margin: auto;
                text-align: center;
            };
            tr {
                border: 1px solid;
            };
            th {
                border: 1px solid;
            };
            td {
                border: 1px solid;
            };
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            };
    </style>
</head>
<body>
            <?php 
                $conn = mysqli_connect('localhost',"admin","1","ql_nvvp");
                mysqli_set_charset($conn, 'utf8');
                $sql = "SELECT * FROM staff ORDER BY staff_id";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                };
                $html = '';
            foreach ($data as $value) {
                 $html .= '
                    <tr role="row">
                    <td>'.$value['staff_id'].'</td>
                    <td>'.$value['staff_name'].'</td>
                    <td>'.$value['staff_dob'].'</td>
                    <td>'.$value['staff_position'].'</td>
                    <td>'.$value['staff_salary'].'</td>
                    <td><a href="edit.php?id='.$value['staff_id'].'">Edit</a></td>
                    <td><a href="delete.php?id='.$value['staff_id'].'"> Delete</a></td>
                    </tr>';
                        }
            ?>


            <table id="datatable" style="border:1px solid"; cellspacing = 1; cellpadding = 2;>
            <h1 style="text-align:center">Quản lý nhân viên công ty</h1>
            <thead>
                <tr role="row">
                    <th>ID</th>
                    <th>Tên Nhân Viên</th>
                    <th>Date of Birth</th>
                    <th>Vị Trí</th>
                    <th>Dạng Lương</th>
                    <th style="width: 10%;">Edit</th>
                    <th style="width: 10%;">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $html; ?>
                
                
                </tbody>
            <tfoot>
                <tr>
                    <td colspan="8">
                        <a href="add.php"><button id="button">Thêm nhân viên mới</button></a>
                    </td>
                </tr>
            </tfoot>

            </table>
</body>
</html>