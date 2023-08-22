reCAPTCHA
============

Plugin for CMF [Cotonti](https://www.cotonti.com) to protect your site from spam and abuse with a reCAPTCHA.

reCAPTCHA **v2** is currently supported.

Authors: [esclkm](https://www.cotonti.com/users/esclkm), [Andrey Matsovkin](https://www.cotonti.com/users/Macik), [Kalnov Alexey](https://www.cotonti.com/users/Alex300)

Plugin page: https://www.cotonti.com/extensions/security-authentication/recaptcha

## Installation

- Unpack to your plugins folder
- Install the plugin in AdminCP
- Visit https://developers.google.com/recaptcha to obtain reCAPTCHA keys and get detailed info
- Configure the plugin (don't forget to add the keys!)
- Add tags to **users.register.tpl**: `{USERS_REGISTER_VERIFYIMG}`, to **comments.tpl**: `{COMMENTS_FORM_VERIFY_IMG}`, to **contact.tpl**: `{CONTACT_FORM_VERIFY_IMG}`

## Developers API

Use this function to generate CAPTCHA in your extensions:
```php
$t->assign([
  'SOMETHING_CAPTCHA' => cot_captcha_generate(),
]);
```
Then check CAPTCHA on form processing:
```php
$response = cot_import('g-recaptcha-response', 'P', 'TXT');
if (!cot_captcha_validate($response)) {
  cot_error('recaptcha_verification_failed', 'response');
}
```

Example:
![Снимок экрана 2023-08-22 142809](https://github.com/Cotonti-Extensions/recaptcha/assets/1021886/78c42ed3-7545-4f8c-af22-bb7681978e13)
