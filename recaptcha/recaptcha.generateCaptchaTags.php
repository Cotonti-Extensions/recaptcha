<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=generateCaptchaTags
[END_COT_EXT]
==================== */

/**
 * reCAPTCHA
 * Generate captcha tags
 *
 * @package recaptcha
 * @author Kalnov Alexey <kalnovalexey@yandex.ru>
 *
 * @var array $captchaTags
 */

declare(strict_types=1);


defined('COT_CODE') or die("Wrong URL.");

$captchaTags['VERIFY_INPUT'] = null;
