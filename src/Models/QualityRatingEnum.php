<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * For more information relating to quality rating, see [About WhatsApp Business Account Message
 * Quality Rating](https://www.facebook.com/business/help/896873687365001).
 */
class QualityRatingEnum
{
    /**
     * High Quality.
     */
    public const GREEN = 'GREEN';

    /**
     * Medium Quality.
     */
    public const YELLOW = 'YELLOW';

    /**
     * Low Quality.
     */
    public const RED = 'RED';

    /**
     * Quality has not been determined.
     */
    public const NA = 'NA';

    private const _ALL_VALUES = [self::GREEN, self::YELLOW, self::RED, self::NA];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for QualityRatingEnum.");
    }
}
