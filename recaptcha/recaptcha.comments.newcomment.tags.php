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

if (Cot::$usr['id'] === 0 && Cot::$cfg['captchamain'] === 'recaptcha') {
    // After 0.9.25 release
    //$t->assign(cot_generateCaptchaTags(null, null, 'COMMENTS_FORM_'));

    $captcha = cot_captcha_generate();
    $t->assign([
        'COMMENTS_FORM_VERIFY_IMG' => $captcha,
    ]);

    if (isset(Cot::$cfg['legacyMode']) && Cot::$cfg['legacyMode']) {
        // @deprecated in 0.9.24
        $t->assign([
            'COMMENTS_FORM_VERIFYIMG' => $captcha,
        ]);
    }
}
