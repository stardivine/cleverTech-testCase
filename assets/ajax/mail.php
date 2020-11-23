<?php
$data = $_REQUEST;
if(!empty($data)){
    mail($data['email'], 'Здравствуйте, '.$data['surname'].' '.$data['name'],'Вы только что отправили письмо с тестового сайта!');
    $result['message'] = 'Письмо отправлено успешно';
    echo json_encode($result);
} else {
    $result['message'] = 'Что то пошло не так...';
    echo json_encode($result);
}