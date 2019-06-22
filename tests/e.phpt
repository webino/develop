<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @outputmatch
 *
 * @link        https://github.com/webino/develop
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

Tester\Environment::setup();


use Tester\Assert;
use Webino\DevException;

Assert::exception(function () {

    e('Example');
}, DevException::class);
