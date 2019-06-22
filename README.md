# Webino Develop

Developer utilities.

[![Build Status](https://img.shields.io/travis/webino/develop/master.svg?style=for-the-badge)](http://travis-ci.org/webino/develop "Master Build Status")
[![Coverage Status](https://img.shields.io/coveralls/github/webino/develop/master.svg?style=for-the-badge)](https://coveralls.io/github/webino/develop?branch=master "Master Coverage Status")
[![Code Quality](https://img.shields.io/scrutinizer/g/webino/develop/master.svg?style=for-the-badge)](https://scrutinizer-ci.com/g/webino/develop/?branch=master "Master Code Quality")
[![Latest Stable Version](https://img.shields.io/github/tag/webino/develop.svg?label=STABLE&style=for-the-badge)](https://packagist.org/packages/webino/develop)

## Recommended Usage

Do use utility functions only for development usage.


## Setup
[![PHP from Packagist](https://img.shields.io/packagist/php-v/webino/develop.svg?style=for-the-badge)](https://php.net "Required PHP version")

```bash
composer require webino\develop
```


## Quick Use

Utility functions, development only:
```php
d($foo);  // var_dump();
dd($foo); // var_dump();exit;
p($foo);  // print_r();
pd($foo); // print_r();exit;
pr($foo); // return print_r();
e();  // throw new \Webino\DevException;
```

## API

- *void* d(*mixed* $subject) <br>
  Var dumping the subject.
  
- *void* d(*mixed* $subject) <br>
  Dying var dumping the subject.

- *void* p(*mixed* $subject) <br>
  Enhanced subject print scream.

- *void* pd(*mixed* $subject) <br>
  Dying enhanced subject print scream.

- *string* pr(*mixed* $subject) <br>
  Enhanced subject print return.

- *void* bd(*mixed* $subject) <br>
  Debugger bar var dumping the subject.

- *void* e(*string* $msg = '') <br>
  Development exception.


## Development

[![Build Status](https://img.shields.io/travis/webino/develop/develop.svg?style=for-the-badge)](http://travis-ci.org/webino/develop "Develop Build Status")
[![Coverage Status](https://img.shields.io/coveralls/github/webino/develop/develop.svg?style=for-the-badge)](https://coveralls.io/github/webino/develop?branch=develop "Develop Coverage Status")
[![Code Quality](https://img.shields.io/scrutinizer/g/webino/develop/develop.svg?style=for-the-badge)](https://scrutinizer-ci.com/g/webino/develop/?branch=develop "Develop Code Quality")
[![Latest Unstable Version](https://img.shields.io/github/tag-pre/webino/develop.svg?label=PREVIEW&style=for-the-badge)](https://packagist.org/packages/webino/develop "Packagist")


Static analysis:
```bash
composer analyse
```

Coding style check:
```bash
composer check
```

Coding style fix:
```bash 
composer fix
```

Testing:
```bash
composer test
```

Git pre-commit setup:
```bash
ln -s ../../pre-commit .git/hooks/pre-commit
```


## Addendum

[![License](https://img.shields.io/packagist/l/webino/develop.svg?style=for-the-badge)](https://github.com/webino/develop/blob/master/LICENSE.md "BSD-3-Clause License")
[![Total Downloads](https://img.shields.io/packagist/dt/webino/develop.svg?style=for-the-badge)](https://packagist.org/packages/webino/develop "Packagist") 
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/webino/develop.svg?style=for-the-badge)


  Please, if you are interested in this library report any issues and don't hesitate to contribute.
  We will appreciate any contributions on development of this library.

[![GitHub issues](https://img.shields.io/github/issues/webino/develop.svg?style=for-the-badge)](https://github.com/webino/develop/issues)
[![GitHub forks](https://img.shields.io/github/forks/webino/develop.svg?label=Fork&style=for-the-badge)](https://github.com/webino/develop)
