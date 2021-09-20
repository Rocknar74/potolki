<?php
function validate_consultation_form($data)
{
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

        $arr_responce = [
            "name" => true,
            "phone" => true,
            "success" => false,
        ];
        if ($data) {
            $name = trim($data['name']);
            $phone = trim($data['phone']);

            if (!empty($name) && !empty($phone)) {
                if (strlen($name) <= 60) {
                    if (preg_match(pattern(), $phone)) {
                        $post_data = array(
                            'post_status'   => 'private',
                            'post_title' => $name,
                            'post_content' => $phone,
                            'post_type'     => 'clients_consultaion',
                            'meta_input'    => ['name_client' => $name, 'phone_client' => $phone],
                        );
                        wp_insert_post(wp_slash($post_data));
                        $arr_responce["success"] = true;
                    } else $arr_responce["phone"] = false;
                } else $arr_responce["name"] = false;
            } else {
                $arr_responce["name"] = false;
                $arr_responce["phone"] = false;
            }
        }
    }
    return json_encode($arr_responce);
}
function check_phone($phone)
{
    // $phone = trim($data['phone']);
    if (preg_match(pattern(), $phone)) return json_encode(true);
    else return 'Некоректный формат номера';
}
function pattern()
{
    return '/^([+][7]|8)\s[(][0-9]{3}[)]\s[0-9]{3}[-][0-9]{2}[-][0-9]{2}$/';
}
