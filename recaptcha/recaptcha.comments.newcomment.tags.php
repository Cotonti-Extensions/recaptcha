<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=comments.newcomment.tags
Tags=comments.tpl: {COMMENTS_FORM_VERIFY_IMG}
[END_COT_EXT]
==================== */

/**
 * reCAPTCHA new comment tags
 *
 * @package recaptcha
 * @author esclkm, Andrey Matsovkin, Kalnov Alexey <kalnovalexey@yandex.ru>
 *
 * @var XTemplate $t
 */

defined('COT_CODE') or die("Wrong URL.");

if (\Cot::$usr['id'] === 0 && \Cot::$cfg['captchamain'] === 'recaptcha') {
	$t->assign([
		'COMMENTS_FORM_VERIFYIMG' => cot_captcha_generate(),
	]);
}
