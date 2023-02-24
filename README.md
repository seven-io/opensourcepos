![](https://www.seven.io/wp-content/uploads/Logo.svg "seven Logo")

# seven SMS for Open Source Point of Sale

This code implements seven as SMS gateway for sending messages via OSPOS.

## Prerequisites

- An [API key](https://help.seven.io/en/api-key-access) from [seven](https://www.seven.io) - you can create on in
  your [developer dashboard](https://app.seven.io/developer).
- An existing [OSPOS](https://opensourcepos.org/) installation.

## Installation

The procedure for installing is very simple. You just need access to the installation path
of OSPOS for replacing `/application/libraries/Sms_lib.php`
with [Sms_lib.php](Sms_lib.php).

## Setup

1. Log in to your OSPOS dashboard.
2. Go to `Configuration -> Setup & Conf -> Message`.
3. Set `SMS-API Username` to any value, as the field is not used. Just make sure it's not
   empty.
4. Set `SMS-API Password` to your seven [API key](https://help.seven.io/en/api-key-access).
5. Set `SMS-API Sender ID` to your sender identifier of choice with a maximum length of 11
   alphanumeric or 16 numeric characters. This value gets displayed as the sender in the
   receivers phone device. Please notice that country specific restrictions may apply,
   e.g. some countries don't allow setting those at all.
6. Optionally set `Saved Text Message` to a predefined message template.
7. The last step is to save your configuration by clicking `Submit`.

See the [screenshot](configuration.png) for an example configuration.

## Support

Feel free to [contact us](https://www.seven.io/en/company/contact/) in case you need any
assistance.

[![MIT](https://img.shields.io/badge/License-MIT-teal.svg)](LICENSE)
