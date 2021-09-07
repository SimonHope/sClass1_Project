<?php

    error_reporting(E_ALL); // เปิด Error ทั้งหมด
    //error_reporting(0); //ปิด error ในกรณีที่เราต้องการแสดง error ของเราเอง

    //เชื่อมต่อ Database
    $conn = new mysqli('localhost','root','','blog');
    //$conn = new mysqli('localhost','cjfitnes_blog','ImvVqP2LzR','cjfitnes_blog');
    //ตั้งค่าภาษาให้รองรับภาษาไทย
    $conn->set_charset('utf8');

    if ($conn->connect_errno) { //เช็คว่ามีค่า error code หรือป่าว
        echo "Connect Error : ".$conn->connect_error; //แสดงผล error message
        exit(); //จบการทำงานทุกอย่าง (โปรแกรมจะปิดตัวลง)
    }
    //ถ้าไม่มี error ให้ปล่อยผ่านไม่ต้องแสดงอะไร
    $base_path_blog = 'assets/images/blog/';

    //ตั้งค่า timezone
    date_default_timezone_set('Asia/Bangkok');
    
    
    /*

    บันทึกคำสั่ง

    ***แสดง error เป็นตัวเลข
    $conn->connect_errno;

    ***แสดง error เป็นข้อความ
    $conn->connect_error;

    */

?>