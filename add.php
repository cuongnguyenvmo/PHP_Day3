<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            button{
                margin-right: 10px;
                padding: 3px;
                border-radius: 7px;
                width: 70px;
                margin-top: 20px;
            }
            form{
                width: 600px;
                margin: auto;
                text-align: center;
            }
            div.form-group{
                width: 90%;
                height: 24px;
                margin: 5px;
            }
            div.form-group input{
                float: right;
                height: 20px;
                width: 400px;
            }
            span{
                font: 18px bold;
                font-weight: bold;
                /* float: right; */
                margin-right: 10px; 
            }
            h1{
                text-align: center;
            }
            input{
                margin-top: 10px;
            }
            select{
                margin-top: 10px;
            }
        </style>
</head>
<body>
<form action="process.php" method="POST">
            <h1>Thêm Nhân Viên<nav></nav></h1>
            <table border= 0 cellspacing = 0 cellpadding = 0>
                <tr>
                    <td><span>Tên nhân viên :</span></td>
                    <td><input type="text" name="fullname"></td>
                </tr>
                <tr>
                    <td><span>DOB :</span></td>
                    <td><input type="datetime" name="dob"></td>
                </tr>
                <tr>
                    <td><span>Vị trí :</span></td>
                    <td>
                        <select name="position" id="">
                            <option>Fresher</option>
                            <option>Junior</option>
                            <option>Senior</option>
                            <option>PM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><span>Dạng lương :</span></td>
                    <td><select name="salary" id="">
                            <option>NET</option>
                            <option>GROS</option>
                            
                        </select></td>
                </tr>

            </table>
            <div class="form-group">
                <button type="submit">Thêm</button>
                <button type="reset">Reset</button>
                <a href="index.php"><button type="button">Cancel</button></a>
            </div>
        </form>
</body>
</html>