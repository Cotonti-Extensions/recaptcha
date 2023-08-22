<?php
/**
 * Russian language file for reCAPTCHA plugin
 *
 * @package recaptcha
 * @author esclkm, Andrey Matsovkin, Kalnov Alexey <kalnovalexey@yandex.ru>
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Body
 */

$L['recaptcha_no_sitekey'] = 'Получите ключ сайта '
    . '<a href="https://www.google.com/recaptcha/admin/" target="_blank">https://www.google.com/recaptcha/admin</a> '
    . 'и заполните его в настройках плагина recaptcha';

$L['recaptcha_verification_failed'] = 'Пройдите повторную проверку reCAPTCHA!';
$L['captcha_verification_failed'] = $L['recaptcha_verification_failed'];

/**
 * Plugin Config
 */

$L['cfg_sitekey'] = 'Ключ сайта';
$L['cfg_sitekey_hint']= 'Установите ключ для данного сайта (' . \Cot::$cfg['mainurl'] . '). ' .
    'Получить ключ можно <a href="https://www.google.com/recaptcha/admin/" target="_blank">здесь</a>. Пока поддерживается reCAPTCHA v2.';
$L['cfg_secretkey'] = 'Секретный ключ';
