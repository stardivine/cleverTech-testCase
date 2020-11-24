<?php

function getFormData() {

    $data = array();
    $exploded = explode('&', file_get_contents('php://input'));

    foreach($exploded as $pair) {
        $item = explode('=', $pair);
        if (count($item) == 2) {
            $data[urldecode($item[0])] = urldecode($item[1]);
        }
    }

    return $data;
}

$data = getFormData();

if(!empty($data)){
   $mail = mail($data['email'], 'Здравствуйте, '.$data['surname'].' '.$data['name'],'Вы только что отправили письмо с тестового сайта!');
} else {
    $mail = mail($data['email'], 'Здравствуйте, '.$data['surname'].' '.$data['name'],'Вы только что отправили письмо с тестового сайта!');
}
if($mail){
    $result = 'Письмо отправлено успешно';
} else {
    $result = 'Что то пошло не так';
}
echo json_encode($result);