<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.register.tags
Tags=users.register.tpl:{USERS_REGISTER_VERIFYIMG}
[END_COT_EXT]
==================== */

/**
 * reCAPTCHA user registration tags
 *
 * @package recaptcha
 * @author esclkm, Andrey Matsovkin, Kalnov Alexey <kalnovalexey@yandex.ru>
 *
 * @var XTemplate $t
 */

defined('COT_CODE') or die('Wrong URL');

if (\Cot::$cfg['captchamain'] === 'recaptcha') {
	$t->assign([
		'USERS_REGISTER_VERIFYIMG' => cot_captcha_generate(),
	]);
}
