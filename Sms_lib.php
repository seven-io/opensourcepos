<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * SMS library
 * Library with utilities to send texts via SMS Gateway (requires proxy implementation)
 */
class Sms_lib {
    private $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    /*
     * SMS sending function
     * Example of use: $response = sendSMS('4477777777', 'My test message');
     */
    public function sendSMS($to, $text) {
        $password = $this->CI->encryption->decrypt($this->CI->config->item('msg_pwd'));
        $from = $this->CI->config->item('msg_src');
        $response = false;

        if (!empty($password) && !empty($to) && !empty($text) && !empty($from)) {
            $ch = curl_init('https://gateway.seven.io/api/sms');
            $options = [
                CURLOPT_HTTPHEADER => [
                    'Accept: application/json',
                    'Content-Type: application/json',
                    'X-Api-Key: ' . $password,
                ],
                CURLOPT_POSTFIELDS => json_encode(compact('from', 'text', 'to')),
                CURLOPT_RETURNTRANSFER => true,
            ];
            curl_setopt_array($ch, $options);
            $response = curl_exec($ch);
            curl_close($ch);
        }

        return $response;
    }
}
