<?php

namespace block_apvaardig_digitap\automapper_plus\NameConverter\NamingConvention;

/**
 * Class SnakeCaseNamingConvention
 *
 * @package AutoMapperPlus\NameConverter\NamingConvention
 */
class SnakeCaseNamingConvention extends BaseNamingConvention
{
    /**
     * @inheritdoc
     */
    public function toParts(string $name): array
    {
        return explode('_', $name);
    }

    /**
     * @inheritdoc
     */
    public function fromParts(array $parts): string
    {
        return implode('_', $parts);
    }

}