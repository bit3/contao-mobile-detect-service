MobileDetect service
====================
[![Version](http://img.shields.io/packagist/v/contao-community-alliance/mobile-detect-service.svg?style=flat-square)](https://packagist.org/packages/contao-community-alliance/mobile-detect-service)
[![Stable Build Status](http://img.shields.io/travis/contao-community-alliance/mobile-detect-service/master.svg?style=flat-square&label=stable build)](https://travis-ci.org/contao-community-alliance/mobile-detect-service)
[![Upstream Build Status](http://img.shields.io/travis/contao-community-alliance/mobile-detect-service/develop.svg?style=flat-square&label=dev build)](https://travis-ci.org/contao-community-alliance/mobile-detect-service)
[![License](http://img.shields.io/packagist/l/contao-community-alliance/mobile-detect-service.svg?style=flat-square)](http://spdx.org/licenses/LGPL-3.0+)
[![Downloads](http://img.shields.io/packagist/dt/contao-community-alliance/mobile-detect-service.svg?style=flat-square)](https://packagist.org/packages/contao-community-alliance/mobile-detect-service)

Provides [MobileDetect](https://github.com/serbanghita/Mobile-Detect) as a service in the contao dependency container.

```php
/** @var \Mobile_Detect $mobileDetect */
$mobileDetect = $container['mobile-detect'];
```
