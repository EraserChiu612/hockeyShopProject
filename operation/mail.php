<?php

if (isset($_POST["submit"])) {


  $name = $_POST["name"];
  $age = $_POST["age"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $exp = $_POST["exp"];
  $level = $_POST["level"];


  //empty 驗證是否為空
  if (empty($name) || empty($age) || empty($phone) || empty($email) || empty($exp) || empty($level)) {

    echo "<span class='form-error'>請填寫所有欄位</span>";
  } else {
    $mailto = "roam_dog@hotmail.com";
    $mailFromName = $name;
    // $mailFrom = "=?UTF-8?B?" . base64_encode($_POST["email"]) . "?= <" . $email . ">";
    $mailSubject = "活動報名表單";
    $mailContent = "報名人姓名: " . $name . "
    年齡: " . $age . "連絡電話: " . $phone . "連絡信箱: " . $email . "溜冰經驗: " . $exp . "報名課程: " . $level;
    $mailHeader = "From:" . $email . "\r\n";
    $mailHeader .= "Content-type:text/html;charset=UTF-8";
    //mail(收件者, 主旨, 內容, 信件標頭)
    if (mail($mailto, $mailSubject, $mailContent, $mailHeader)) {
      echo "<span class='form-success'>郵件已經成功發送.</span>";
      exit();
    } else {
      echo "<span class='form-error'>郵件發送失敗.</span>";
    }
  }
} else {
  echo "<span>網路錯誤，請稍後再試</span>";
}
