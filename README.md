<p align="center">
  <img src="https://www.seven.io/wp-content/uploads/Logo.svg" width="250" alt="seven logo" />
</p>

<h1 align="center">seven SMS for Open Source POS</h1>

<p align="center">
  SMS gateway implementation for <a href="https://opensourcepos.org/">OSPOS</a> - drop-in replacement for the default <code>Sms_lib.php</code>.
</p>

<p align="center">
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-teal.svg" alt="MIT License" /></a>
  <img src="https://img.shields.io/badge/OSPOS-3.x-blue" alt="OSPOS 3.x" />
  <img src="https://img.shields.io/badge/PHP-7.4%2B-purple" alt="PHP 7.4+" />
</p>

---

## Features

- **SMS Gateway Replacement** - Replaces the bundled `Sms_lib.php` with a seven-backed implementation
- **Custom Sender ID** - Configure via the OSPOS admin
- **Saved Templates** - Use OSPOS's built-in `Saved Text Message` field for predefined messages

## Prerequisites

- An [OSPOS](https://opensourcepos.org/) installation
- A [seven account](https://www.seven.io/) with API key ([How to get your API key](https://help.seven.io/en/developer/where-do-i-find-my-api-key))

## Installation

Replace the OSPOS SMS library with [`Sms_lib.php`](Sms_lib.php) from this repo:

```bash
cp Sms_lib.php /path/to/ospos/application/libraries/Sms_lib.php
```

## Configuration

1. Log in to the OSPOS dashboard.
2. Go to **Configuration > Setup & Conf > Message**.
3. Set:

| Field | Value |
|-------|-------|
| SMS-API Username | Any non-empty value (unused but required) |
| SMS-API Password | Your seven API key |
| SMS-API Sender ID | Optional. Up to 11 alphanumeric or 16 numeric characters. Country-specific restrictions may apply. |
| Saved Text Message | Optional message template |

4. Click **Submit** to save.

See [`configuration.png`](configuration.png) for an example screenshot.

## Support

Need help? Feel free to [contact us](https://www.seven.io/en/company/contact/) or [open an issue](https://github.com/seven-io/opensourcepos/issues).

## License

[MIT](LICENSE)
