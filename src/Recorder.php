<?php
/*
 * Copyright Jerke Combee. All rights reserved.
 * https://www.jcombee.nl/
 */

declare(strict_types=1);

namespace MageEye\Sdk;

use Magento\Framework\DataObject;

class Recorder
{
    protected static array $entries = [];

    public static function record($handle, DataObject $dataObject): void
    {
        static::$entries[] = [
            'handle' => $handle,
            'data_object' => $dataObject,
        ];
    }

    public static function getEntries(): array
    {
        return static::$entries;
    }
}
