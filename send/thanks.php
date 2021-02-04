<?php

// Template name: Страница спасибо

// ini_set('display_errors','On');
// error_reporting('E_ALL');

// Добавленное

if ( !empty($_POST) && count($_POST) > 0 ) {

  // Файлы phpmailer

  require 'phpmailer/PHPMailer.php';

  require 'phpmailer/SMTP.php';

  require 'phpmailer/Exception.php';

  // Переменные, которые отправляет пользователь



  function clean($value = "") {

     $value = trim($value);

     $value = stripslashes($value);

     $value = strip_tags($value);

     $value = htmlspecialchars($value);

     

     return $value;

  }


  $file_name = './wp-content/themes/roller-shut/send/orderNum.txt';
  $number = file_get_contents($file_name);
  $number++;

  file_put_contents($file_name, $number);


  
  $email_message = '';

  if (!empty($_POST['project_name']) && trim($_POST['project_name']) != '') {$email_message .= '<b>Название проекта:</b> ' . clean($_POST["project_name"]) . '<br>' . "\n";}

  if (!empty($_POST['admin_email']) && trim($_POST['admin_email']) != '') {$email_message .= '<b>E-mail администратора:</b> ' . clean($_POST["admin_email"]) . '<br>' . "\n";}

  if (!empty($_POST['form_subject']) && trim($_POST['form_subject']) != '') {$email_message .= '<b>Форма, с которой пришла заявка:</b> ' . clean($_POST["form_subject"]) . '<br> <br>' . "\n";}


  if (!empty($_POST['Телефон']) && trim($_POST['Телефон']) != '') {$email_message .= '<b>Телефон:</b> ' . clean($_POST["Телефон"]) . '<br>' . "\n";}

  if (!empty($_POST['Вопрос_клиента']) && trim($_POST['Вопрос_клиента']) != '') {$email_message .= '<b>Вопрос клиента:</b> ' . clean($_POST["Вопрос_клиента"]) . '<br>' . "\n";}

  if (!empty($_POST['Описание проекта']) && trim($_POST['Описание проекта']) != '') {$email_message .= '<b>Описание проекта:</b> ' . clean($_POST["Описание проекта"]) . '<br>' . "\n";}

  // для калькулятора

  if (!empty($_POST['metraj']) && trim($_POST['metraj']) != '') {$email_message .= '<b>Площадь:</b> ' . clean($_POST["metraj"]) . '<br>' . "\n";}

  if (!empty($_POST['floor']) && trim($_POST['floor']) != '') {$email_message .= '<b>Тип роллет:</b> ' . clean($_POST["floor"]) . '<br>' . "\n";}

  if (!empty($_POST['variant']) && trim($_POST['variant']) != '') {$email_message .= '<b>Тип управления:</b> ' . clean($_POST["variant"]) . '<br>' . "\n";}

  if (!empty($_POST['decoration_1']) && trim($_POST['decoration_1']) != '' || !empty($_POST['decoration_2']) && trim($_POST['decoration_2']) != '' ){
    $email_message .= '<b>Подарок:</b> ' . clean($_POST["decoration_1"]) . '   ' . clean($_POST["decoration_2"]) . '<br>' . "\n";
  }


  $mail = new PHPMailer\PHPMailer\PHPMailer();

  try {

      $msg = "ok";

      $mail->isSMTP();   

      $mail->CharSet = "UTF-8";                                          

      $mail->SMTPAuth   = true;

      // Настройки почты, с которой будут отправляться письма

      $mail->Host       = 'ssl://smtp.yandex.ru'; // SMTP сервера 

      $mail->Username   = 'example@yandex.ru'; // Логин на почте
         $mail->Password   = 'example'; // Пароль на почте
         $mail->SMTPSecure = 'ssl';
         $mail->Port       = 465;
         $mail->setFrom('example@yandex.ru', 'Название сайта'); // Адрес самой почты и имя отправителя
         // Получатель письма

      // Получатель письма\

      $emailsArr = get_field('emails');

      $email1 = $emailsArr['e-mail-1'];
      $email2 = $emailsArr['e-mail-2'];
      $email3 = $emailsArr['e-mail-3'];

      $mail->addAddress($email1); // Ещё один адрес кому отправить, если нужен
      $mail->addAddress($email2); // Ещё один адрес кому отправить, если нужен
      $mail->addAddress($email3); // Ещё один адрес кому отправить, если нужен
      // $mail->addAddress('wantedmoney@yandex.ru'); // Ещё один адрес кому отправить, если нужен




      $fileSize = $_FILES['photo']['size'];
      $fileError = $_FILES['photo']['error'];
      $fileType = $_FILES['photo']['type'];
  
      
  
      if (($fileType === 'image/jpeg' || $fileType === 'image/png') &&  $fileSize <= 2000000 && $fileError === 0){
  
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['photo']['name']));
        $filename = $_FILES['photo']['name'];
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {              
          $mail->addAttachment($uploadfile, $filename);
          $email_message .= "Было прикреплено фото объекта клиента. Файл в приложении к данному письму.";
        } else {
          $msg = 'Не удалось прикрепить файл ' . $uploadfile;
        }
  
      }


          // Само письмо

          // -----------------------

          $mail->isHTML(true);

      

          $mail->Subject = 'Заявка №' . $number .' с сайта ' . $_SERVER['HTTP_HOST']; ;

          $mail->Body    = $email_message;



    // Проверяем отравленность сообщения

    if ($mail->send()) {

      echo "";

    } else {

      echo "Форма не отправлена. Ошибка в настройках почты сайта";

      

    }

  } catch (Exception $e) {

     echo "Форма не отправлена. Причина ошибки: {$mail->ErrorInfo}";

  }



}



 ?>
<!DOCTYPE html>
<html>

<head>
	
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
  <title>Ваша заявка принята</title>
  <style>
    body {
      margin: 0;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      line-height: 1.5;
      background-color: rgb(238, 241, 243);
    }

    .thankyou {
      overflow: hidden;
      box-sizing: border-box;
      min-height: 100vh;
      background: url(wp-content/themes/roller-shut/assets/img/thanks-page/thankyou-bg.jpg) center bottom no-repeat #fdfdff;
      text-align: center;
      position: relative;
      padding: 10px;
      font-size: 16px;
    }

    .thankyou__title {
      color: rgb(10, 161, 80);
      font-size: 36px;
    }

    .thankyou__title--error {
      color: #da0000;
    }

    .thankyou__divider {
      max-width: 100%;
    }

    .thankyou__image {
      position: absolute;
      bottom: 0;
      left: 5%;
    }

    .thankyou__notice {
      font-size: 13px;
    }

    .button {
      background: transparent linear-gradient(to bottom, rgb(13, 181, 57) 0%, rgb(0, 144, 67) 100%) repeat scroll 0 0;
      border: none;
      border-bottom: 2px solid rgb(21, 90, 53);
      outline: 0 none;
      padding: 15px 25px;
      text-transform: uppercase;
      color: #fff;
      font-weight: bold;
      border-radius: 4px;
      cursor: pointer;
    }

    .button:hover {
      -webkit-transform: translateY(-1px);
      -moz-transform: translateY(-1px);
      -ms-transform: translateY(-1px);
      -o-transform: translateY(-1px);
      transform: translateY(-1px);
    }

    @media all and (max-width: 600px) {
      .thankyou__title {
        font-size: 30px;
      }
    }

    @media all and (max-height: 500px) {
      .thankyou__image {
        width: 130px;
        height: auto;
      }
    }
  </style>
</head>

<body>
  <div class='thankyou'>

    <h1 class="thankyou__title">Спасибо, заявка принята!</h1>
    <p>
      Менеджер свяжется с Вами в течение 15 минут </p>
    <img class="thankyou__divider" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thanks-page/thankyou-divider.png">
    <p class="thankyou__notice">Если Вы допустили ошибку, вернитесь на страницу заказа и отправьте форму еще раз</p>

    <a href="<?php echo wp_get_referer(); ?>" class="button" style="text-decoration:none;">Вернуться на главную страницу</a>
    <img class="thankyou__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/thanks-page/thankyou-girl.png">
  </div>
  
</body>

</html>
