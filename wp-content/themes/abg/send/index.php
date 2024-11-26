<?php
// https://github.com/vlucas/valitron
include 'valitron/Validator.php';
use Valitron\Validator as V;
//
include 'mail.php';

class SendEmail {
    private $errors = [];

    public function index($post){
        $json = [];
        $data = [];

        foreach ($post as $index => $item) {
            if(isset($item['telephone'])){
                $data[$index] = preg_replace('/[^0-9]/', '', $item['telephone']);
            }else{
                $data[$index] = $item;
            }
        }

        $this->validate($data);

        if(!$this->errors){
            if(isset($data['ip'])){
                $location = $this->ip_api($data['ip'], $data['language_code']);
                if($location){
                    if(isset($location['country'])){
                        $data['country'] = $location['country'];
                    }
                    if(isset($location['city'])){
                        $data['city'] = $location['city'];
                    }
                }
            }

            $message = $this->array_to_ul($data);

            $mail = new Mail;

            // От кого.
            $mail->from('localhost@localhost.localhost', $data['name']);

            // Кому, можно указать несколько адресов через запятую.
            $mail->to('abginfo1@gmail.com', 'Сайт');

            // Тема письма.
            $mail->subject = 'Заявка c сайта';

            // Текст.
            $mail->body = $message;

            // Отправка.
            $mail->send();

            $json['success'] = true;
        }else{
            $json['errors'] = $this->errors;
        }

      return json_encode($json, JSON_UNESCAPED_UNICODE);
    }

    // Проверка форм на ошибки заполнения.
    protected function validate($data){
        V::langDir('valitron/lang/');

        if($data['language_code'] == 'ru_RU'){
            V::lang('ru');
        }elseif ($data['language_code'] == 'uk'){
            V::lang('uk');
        }

        $v = new Valitron\Validator($data);

        $v->rule('required', ['name', 'telephone']);
        $v->rule('lengthMin', 'name', 3);
        $v->rule('lengthMax', 'name', 20);
        $v->rule('regex', 'telephone', '/(380)([0-9]{9})$/');

        if(!$v->validate()) {
            $this->errors = $v->errors();
        }
    }

    // Узнаем местоположение
    private function ip_api($ip, $lang){
        $ch = curl_init('https://ip-api.com/json/' . $ip . '?lang='.$lang);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $res = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($res, true);

        return $res;
    }

    //
    private function array_to_ul($array){
        $message = '';

        if(isset($array)){
            $data = array_diff($array, array(''));

            $message = '<ul>';
            foreach ($data as $index => $datum) {
                $message .= '<li>'. '<b>'.$index.': </b>' . $datum . '</li>';
            }
            $message .= '</ul>';
        }

        return $message;
    }
}

$class = new SendEmail();

echo $class->index($_POST);

?>