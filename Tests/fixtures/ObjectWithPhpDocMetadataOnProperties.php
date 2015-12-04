<?php

namespace Lucaszz\SymfonyFormGeneratorBundle\Tests\fixtures;

use Money\Money;
use Ramsey\Uuid\UuidInterface;

class ObjectWithPhpDocMetadataOnProperties
{
    /** @var int */
    public $propertyInteger;
    /** @var string */
    public $propertyString;
    /** @var \DateTime */
    public $propertyDateTime;
    /** @var UuidInterface */
    public $propertyUuid;
    /** @var Money */
    public $propertyMoney;

    public function __construct($propertyInteger, $propertyString, $propertyDateTime, $propertyUuid, $propertyMoney)
    {
        $this->propertyInteger  = $propertyInteger;
        $this->propertyString   = $propertyString;
        $this->propertyDateTime = $propertyDateTime;
        $this->propertyUuid     = $propertyUuid;
        $this->propertyMoney    = $propertyMoney;
    }
}
