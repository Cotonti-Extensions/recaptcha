<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.register.add.first
[END_COT_EXT]
==================== */

/**
 * reCAPTCHA validate
 *
 * @package recaptcha
 * @author esclkm, Andrey Matsovkin, Kalnov Alexey <kalnovalexey@yandex.ru>
 */

defined('COT_CODE') or die('Wrong URL.');

if (Cot::$cfg['captchamain'] === 'recaptcha' && Cot::$usr['id'] === 0) {
	$response = cot_import('g-recaptcha-response', 'P', 'TXT');
	if (!cot_captcha_validate($response)) {
		cot_error('recaptcha_verification_failed', 'response');
	}
}
