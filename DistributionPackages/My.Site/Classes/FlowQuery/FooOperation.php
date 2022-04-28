<?php

namespace My\Site\FlowQuery;

use Neos\ContentRepository\Domain\Projection\Content\TraversableNodeInterface;
use Neos\Eel\FlowQuery\FlowQuery;
use Neos\Eel\FlowQuery\Operations\AbstractOperation;

class FooOperation extends AbstractOperation
{

    protected static $shortName = 'foo';

    public function canEvaluate($context)
    {
        return count($context) === 0 || (isset($context[0]) && ($context[0] instanceof TraversableNodeInterface));
    }

    public function evaluate(FlowQuery $flowQuery, array $arguments)
    {
        return $flowQuery->getContext();
    }
}
