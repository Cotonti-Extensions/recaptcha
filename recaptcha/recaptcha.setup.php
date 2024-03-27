<?php
/* ====================
[BEGIN_COT_EXT]
Code=recaptcha
Name=reCAPTCHA
Description=Plugin to protect your site from spam and abuse with a reCAPTCHA.
Version=2.1
Date=2024-03-27
Author=esclkm, Andrey Matsovkin, Kalnov Alexey <kalnovalexey@yandex.ru>
Copyright=(c) 2008-2011 Pavel Mikulik and Andrey Matsovkin, 2023-2024 Cotonti Team
Notes=Visit https://developers.google.com/recaptcha to obtain reCAPTCHA keys and get detailed info
SQL=
Auth_guests=R
Lock_guests=12345A
Auth_members=RW
Lock_members=12345A
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
sitekey=01:string:::Site Key
secretkey=02:string:::Secret Key
[END_COT_EXT_CONFIG]
==================== */

/**
 * reCAPTCHA Plugin
 *
 * @package recaptcha
 * @version 2.1
 * @author esclkm, Andrey Matsovkin, Kalnov Alexey <kalnovalexey@yandex.ru>
 * @copyright (c) 2008-2011 Pavel Mikulik and Andrey Matsovkin, 2023-2024 Cotonti Team
 * @license BSD
 */
