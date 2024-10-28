<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 이메일 설정
    $to = "rlaghkfd09@naver.com"; // 수신자 이메일
    $subject = "문의가 도착했습니다: $first_name $last_name";
    $body = "이름: $first_name $last_name\n";
    $body .= "이메일: $email\n\n";
    $body .= "문의 내용:\n$message\n";

    // 이메일 헤더
    $headers = "From: $to\r\n"; // 발신자와 수신자를 동일하게 설정

    // 메일 전송
    if (mail($to, $subject, $body, $headers)) {
        echo "메일이 성공적으로 전송되었습니다.";
    } else {
        echo "메일 전송에 실패했습니다.";
    }
} else {
    echo "잘못된 요청입니다.";
}
?>
