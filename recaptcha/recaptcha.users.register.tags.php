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

if (Cot::$cfg['captchamain'] === 'recaptcha') {
    $t->assign(cot_generateCaptchaTags(null, null, 'USERS_REGISTER_'));

    if (isset(Cot::$cfg['legacyMode']) && Cot::$cfg['legacyMode']) {
        // @deprecated in 0.9.24
        $captcha = cot_captcha_generate();
        $t->assign([
            'USERS_REGISTER_VERIFYIMG' => $captcha,
        ]);
    }
}
