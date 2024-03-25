<?php

declare(strict_types=1);

namespace Potter\Link\Provider\Evolvable;

use \Psr\Link\{
    EvolvableLinkProviderInterface as PsrEvolvableLinkProviderInterface,
    LinkInterface
};

interface EvolvableLinkProviderInterface extends PsrEvolvableLinkProviderInterface
{
    public function withLink(LinkInterface $link): static;
    public function withoutLink(LinkInterface $link): static;
}
