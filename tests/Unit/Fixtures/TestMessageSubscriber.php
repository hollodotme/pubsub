<?php declare(strict_types = 1);
/**
 * Copyright (c) 2016 Holger Woltersdorf & Contributors
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 */

namespace IceHawk\PubSub\Tests\Unit\Fixtures;

use IceHawk\PubSub\AbstractMessageSubscriber;
use IceHawk\PubSub\Types\Channel;

/**
 * Class TestMessageSubscriber
 * @package IceHawk\PubSub\Tests\Unit\Fixtures
 */
class TestMessageSubscriber extends AbstractMessageSubscriber
{
    protected function whenTestMessageWasPublished( TestMessage $message, Channel $channel )
    {
        echo sprintf(
            'Message named "%s" with ID "%s" was published on channel "%s" with text "%s"',
            $message->getMessageName(),
            $message->getMessageId(),
            $channel,
            $message->getMessageText()
        );
    }
}
