<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=global
[END_COT_EXT]
==================== */

/**
 * reCAPTCHA Plugin
 *
 * @package recaptcha
 * @author esclkm, Andrey Matsovkin, Kalnov Alexey <kalnovalexey@yandex.ru>
 */

defined('COT_CODE') or die('Wrong URL.');

include_once cot_incfile('recaptcha', 'plug');
include_once cot_langfile('recaptcha', 'plug');

$cot_captcha[] = 'recaptcha';
