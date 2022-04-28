<?php

namespace My\Site\Eel;

use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;

/**
 * @Flow\Proxy(false)
 */
class JokeHelper implements ProtectedContextAwareInterface
{
    public function makeAJoke(int $number): string
    {
        return 'Knock ' . $number . ' times!';
    }

    public function allowsCallOfMethod($methodName): bool
    {
        return true;
    }
}
