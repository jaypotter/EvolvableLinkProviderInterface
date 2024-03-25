<?php

declare(strict_types=1);

namespace Potter\Link\Provider\Evolvable;

use \Psr\Link\LinkInterface;

abstract class AbstractEvolvableLinkProvider implements EvolvableLinkProviderInterface
{
    abstract public function withLink(LinkInterface $link): static;
    abstract public function withoutLink(LinkInterface $link): static;
}