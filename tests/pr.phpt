<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @outputmatchfile pr.expected
 *
 * @link        https://github.com/webino/develop
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

Tester\Environment::setup();


$a = ['A', 'B'];


echo pr($a);
