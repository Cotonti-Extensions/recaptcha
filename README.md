reCAPTCHA
============

Plugin for CMF [Cotonti](https://www.cotonti.com) to protect your site from spam and abuse with a reCAPTCHA.

Authors: [esclkm](https://www.cotonti.com/users/esclkm), [Andrey Matsovkin](https://www.cotonti.com/users/Macik), [Kalnov Alexey](https://www.cotonti.com/users/Alex300)

Plugin page: https://www.cotonti.com/extensions/security-authentication/recaptcha

## Installation

- Unpack to your plugins folder
- Install the plugin in AdminCP
- Visit https://developers.google.com/recaptcha to obtain reCAPTCHA keys and get detailed info
- Configure the plugin (don't forget to add the keys!)
- Add tags to **users.register.tpl**: {USERS_REGISTER_VERIFYIMG}, to **comments.tpl**: {COMMENTS_FORM_VERIFY_IMG}, to **contact.tpl**: {CONTACT_FORM_VERIFY_IMG}
