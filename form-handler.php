<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Bu noktada verileri işlemek veya bir veritabanına kaydetmek istediğiniz işlemleri gerçekleştirebilirsiniz

    echo "İletiniz alındı, teşekkür ederiz!";
}
?>
