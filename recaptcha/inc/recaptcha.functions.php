<?php
/**
 * reCAPTCHA Plugin
 *
 * @package recaptcha
 * @author esclkm, Andrey Matsovkin, Kalnov Alexey <kalnovalexey@yandex.ru>
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Generates captcha
 * This function is used by cot_captcha_generate()
 * @return string
 * @see cot_captcha_generate()
 */
function recaptcha_generate()
{
    if (empty(Cot::$cfg['plugin']['recaptcha']['sitekey'])) {
        return Cot::$L['recaptcha_no_sitekey'];
    } else {
        $result = '<script src="https://www.google.com/recaptcha/api.js"></script>';
        $result .= '<div class="g-recaptcha" data-sitekey="' . Cot::$cfg['plugin']['recaptcha']['sitekey'] . '"></div>';
        return $result;
    }
}

/**
 * Validates captcha
 * This function is used by cot_captcha_generate()
 * @param ?string $response
 * @return bool
 * @see cot_captcha_validate()
 */
function recaptcha_validate($response)
{
    Cot::$L['captcha_verification_failed'] = Cot::$L['recaptcha_verification_failed'];

    if (empty($response)) {
        $response = cot_import('g-recaptcha-response', 'P', 'TXT');
    }

    if (empty($response)) {
        return false;
    }

    try {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => Cot::$cfg['plugin']['recaptcha']['secretkey'],
            'response' => $response,
            'remoteip' => Cot::$usr['ip'],
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

//        if (version_compare(PHP_VERSION, '7.1', '<') && empty($result)) {
//            $options['ssl'] = [
//                'verify_peer' => false,
//                //'verify_peer_name' => false,
//            ];
//            $context = stream_context_create($options);
//            $result = file_get_contents($url, false, $context);
//        }

        if (empty($result)) {
            return false;
        }

        $result = json_decode($result, true);

        if (empty($result) || !is_array($result)) {
            return false;
        }

        return isset($result['success']) ? $result['success'] : false ;

    } catch (Exception $e) {
        return false;
    }
}
