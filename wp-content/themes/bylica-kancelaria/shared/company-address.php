<?php

declare(strict_types=1);

/**
 * Company Address Data
 * @package Bylica_Kancelaria
 */

if (!defined('ABSPATH')) {
    exit;
}

class CompanyAddress
{
    public readonly string $street;
    public readonly string $postalCode;
    public readonly string $city;
    public readonly string $country;
    public readonly float $latitude;
    public readonly float $longitude;

    public function __construct()
    {
        $this->street = 'ul. Przykładowa 123';
        $this->postalCode = '43-300';
        $this->city = 'Bielsko-Biała';
        $this->country = 'Polska';
        $this->latitude = 49.828728;
        $this->longitude = 19.043421;
    }

    public function getFormatted(bool $includeCountry = true): string
    {
        $address = $this->street . '<br>' . $this->postalCode . ' ' . $this->city;

        if ($includeCountry) {
            $address .= '<br>' . $this->country;
        }

        return $address;
    }

    public function getSchemaOrg(): array
    {
        return [
            '@type' => 'PostalAddress',
            'streetAddress' => $this->street,
            'addressLocality' => $this->city,
            'postalCode' => $this->postalCode,
            'addressCountry' => 'PL'
        ];
    }
}

function getCompanyAddress(): CompanyAddress
{
    static $address = null;

    if ($address === null) {
        $address = new CompanyAddress();
    }

    return $address;
}
