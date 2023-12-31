<?php
/**
 * @copyright Copyright © 2023 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\IBAN;

interface IbanDataInterface
{
    /**
     * @return array ISO 3116 alpha-2 codes of supported countries
     */
    public function getCountries(): array;

    /**
     * @return bool Whether the country is in the list of supported countries
     */
    public function hasCountry(string $country): bool;

    /**
     * @param string $country ISO 3116 alpha-2 country code
     * @return string Regex to match the IBAN format for the country
     */
    public function getPattern(string $country): string;

    /**
     * @param string $country ISO 3116 alpha-2 country code
     * @return array Names of fields in the country's IBAN.
     * The order is that of the matching groups in the IBAN pattern, e.g. $fields[0] is the IBAN check digits
     */
    public function getFields(string $country): array;
}
