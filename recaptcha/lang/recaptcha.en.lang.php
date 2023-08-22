<?php
/**
 * English language file for reCAPTCHA plugin
 *
 * @package recaptcha
 * @author esclkm, Andrey Matsovkin, Kalnov Alexey <kalnovalexey@yandex.ru>
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Body
 */

$L['recaptcha_no_sitekey'] = 'Get the site key '
    . '<a href="https://www.google.com/recaptcha/admin/" target="_blank">https://www.google.com/recaptcha/admin</a> '
    . 'and fill it in the recaptcha plugin settings. reCAPTCHA v2 is currently supported.';

$L['recaptcha_verification_failed'] = 'Go re-check reCAPTCHA!';
$L['captcha_verification_failed'] = $L['recaptcha_verification_failed'];

/**
 * Plugin Config
 */

$L['cfg_sitekey'] = 'Site Key';
$L['cfg_sitekey_hint']= 'Set key for current domain (' . \Cot::$cfg['mainurl'] . '). ' .
    'You can obtain it <a href="https://www.google.com/recaptcha/admin/" target="_blank">here</a>.';
$L['cfg_secretkey'] = 'Secret Key';
