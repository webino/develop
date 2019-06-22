<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @noinspection PhpUnhandledExceptionInspection
 *
 * @link        https://github.com/webino/develop
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

use Tester\Assert;
use Tracy\IBarPanel;

Tester\Environment::setup();


$a = ['A', 'B'];


bd($a);


$panel = Tracy\Debugger::getBar()->getPanel('Tracy:dumps');


Assert::type(IBarPanel::class, $panel);
