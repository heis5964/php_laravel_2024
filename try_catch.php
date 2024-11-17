<h3>Try Catch</h3>

<?php

try {
    //code that might throw and exception
    $x = 10 / 0;
} catch (DivisionByZeroError $e) {
    echo "เกิดข้อผิดพลาด: ไม่สามารถหารด้วยศูนย์ได้";
    //หรือแสดงข้อความ error จริงๆ
    //echo $e->getMessage();
} catch (Throwable $e) {
    //ตัก error อื่นๆ ที่อาจเกิดขึ้น
    echo "เกิดข้อผิดพลาดอื่นๆ: " . $e->getMessage();
}

?>