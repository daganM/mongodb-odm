<?php

declare(strict_types=1);

namespace Documents\Functional;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\EmbeddedDocument */
class NotSavedEmbedded
{
    /** @ODM\Field(type="string") */
    public $name;

    /** @ODM\Field(notSaved=true) */
    public $notSaved;
}
