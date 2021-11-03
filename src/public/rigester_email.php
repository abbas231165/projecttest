<?php
require_once '/xampp2/htdocs/test/vendor/autoload.php';

use App\filter\Filter;

$errors = [];

if (is_method_request_post()) {

    $result = new Filter($_POST['email']);

    if ($result->result()) {

        header('location:./../../index.php');
    } else {
        $errors['email'] = $result->result();
    }
}


view('Header', ['title' => 'صفحه ثبت ایمیل']);
?>


<form action="./rigester_email.php" method="POST">
    <div id="d_email">
        <label for="eml">Email</label>
        <input type="email" name="email" value="">
        <small><?= $errors['email'] ?></small>
    </div>
    <div id="d_button">
        <input type="checkbox" value="yes" id="chbx"><small>با<a href="./../../index.php"> شرایط </a>سایت موافقم</small>
        <button type="submit">ثبت</button>
    </div>

</form>

<?php

view('Footer');
?>