# sep-refund

[![](https://img.shields.io/github/release/mehrdadmehralian/php-sep-refund.svg)](https://github.com/mehrdadmehralian/php-sep-refund/releases/)
[![](https://img.shields.io/github/license/mehrdadmehralian/php-sep-refund.svg)](https://github.com/mehrdadmehralian/php-sep-refund/blob/master/LICENSE)
[![](https://img.shields.io/travis/mehrdadmehralian/php-sep-refund.svg)](https://travis-ci.org/mehrdadmehralian/php-sep-refund/)
[![](https://img.shields.io/packagist/dt/mehrdadmehralian/php-sep-refund.svg)](https://github.com/mehrdadmehralian/php-sep-refund/releases/)

> SEP Refund Service
>
> Built on top of [goetas-webservices/xsd2php][xsd2php].

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)

---

### Installation

To install PHP Sep Refund, simply:

    $ composer require mehrdadmehralian/php-sep-refund

For latest commit version:

    $ composer require mehrdadmehralian/php-sep-refund @dev

### Requirements

PHP Curl Class works with PHP 5.3, 5.4, 5.5, 5.6, 7.0, 7.1, and HHVM.

### Quick Start and Examples

```php
require __DIR__ . '/vendor/autoload.php';

use \SepRefund\Parser;

$parser = new Parser();
```
