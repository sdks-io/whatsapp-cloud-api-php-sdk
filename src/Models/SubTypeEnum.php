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

class SubTypeEnum
{
    /**
     * Refers to a previously created quick reply button that allows for the customer to return a
     * predefined message.
     */
    public const QUICKREPLY = 'quick_reply';

    /**
     * Refers to a previously created button that allows the customer to visit the URL generated by
     * appending the text parameter to the predefined prefix URL in the template.
     */
    public const URL = 'url';

    private const _ALL_VALUES = [self::QUICKREPLY, self::URL];

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
        throw new Exception("$value is invalid for SubTypeEnum.");
    }
}