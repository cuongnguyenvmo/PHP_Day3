<?php
    $data = $_POST;
    $errors = [];
    function validateDate ($date,$format = 'd-m-Y'){
        $d = DateTime::createFromFormat($format,$date);
        return $d && $d->format($format)== $date
    }
  
    //Validate name
    if (!is_string($data['fullname']) || strlen($data['fullname']) < 5 
        || strlen($data['fullname']) > 55) {
         $errors['fullname'] = $data['fullname'] . "Tên nhân viên không hợp lệ!";
    }
    //Validate age
    if (!is_numeric($data['dob']) || $data['dob'] < 0 || $data['dob'] > 150) {
        $errors['dog'] = "Thông tin không hợp lệ!";
    }
    //Validate national
    if (!is_string($data['national']) || strlen($data['national']) < 2 
        || strlen($data['national']) > 55) {
        $errors['national'] = "Quốc tịch không hợp lệ!";
    }
    //Validate position
    if (!is_string($data['position']) || strlen($data['position']) < 2 
        || strlen($data['position']) > 10) {
        $errors['position'] = "Vị trí không hợp lệ!";
    }
    //Validate salary
    if (!is_numeric($data['salary']) || $data['salary'] < 0 || $data['salary'] > 1000000) {
        $errors['salary'] = "Lương không hợp lệ!";
    }
    if (count($errors) > 0) {
        $err_str = '<ul>';
        foreach ($errors as $err) {
            $err_str .= '<li>'.$err.'</li>';
        }   
        $err_str .= '</ul>';
        echo  $err_str;
    }else{
        //Kết nối databse
        $con = mysqli_connect('localhost', 'root', '', 'demo');
        //Viết câu SQL lấy tất cả dữ liệu trong bảng players
        $sql = "INSERT INTO `players` 
                (`name`, `age`, `national`, `position`, `salary`) 
                VALUES ('".$data['name']."', '".$data['age']."',
                '".$data['national']."', '".$data['position']."', '".$data['salary']."');";
        //Chạy câu SQL
        if ($result = mysqli_query($con,$sql)) {
            echo "<h1>Thêm mới cầu thủ thành công Click vào 
            <a href='index.php'>đây</a> để về trang danh sách</h1>";
        }else{
            echo "<h1>Có lỗi xảy ra Click vào 
            <a href='index.php'>đây</a> để về trang danh sách</h1>";
        }
  
    }
?>