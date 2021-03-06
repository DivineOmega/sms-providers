<?php

namespace DivineOmega\SmsProviders\Providers;

use DivineOmega\SmsProviders\Interfaces\ProviderInterface;

class Twilio extends BaseProvider implements ProviderInterface
{
    protected $destinationCountryNames = [
        'Anguilla',
        'Antigua and Barbuda',
        'Aruba',
        'Bahamas',
        'Barbados',
        'Belize',
        'Bermuda',
        'Canada',
        'Cayman Islands',
        'Costa Rica',
        'Cuba',
        'Dominica',
        'Dominican Republic',
        'El Salvador',
        'Grenada',
        'Guadeloupe',
        'Guatemala',
        'Haiti',
        'Honduras',
        'Jamaica',
        'Martinique',
        'Mexico',
        'Montserrat',
        'Nicaragua',
        'Panama',
        'Puerto Rico',
        'St Kitts and Nevis',
        'St Lucia',
        'St Pierre and Miquelon',
        'St Vincent Grenadines',
        'Trinidad and Tobago',
        'Turks and Caicos Islands',
        'United States',
        'Virgin Islands, British',
        'Virgin Islands, U.S.',
        'Argentina',
        'Bolivia',
        'Brazil',
        'Chile',
        'Colombia',
        'Ecuador',
        'Falkland Islands',
        'French Guiana',
        'Guyana',
        'Paraguay',
        'Peru',
        'Suriname',
        'Uruguay',
        'Venezuela',
        'Albania',
        'Andorra',
        'Armenia',
        'Austria',
        'Belarus',
        'Belgium',
        'Bosnia and Herzegovina',
        'Bulgaria',
        'Croatia',
        'Cyprus',
        'Czech Republic',
        'Denmark',
        'Estonia',
        'Faroe Islands',
        'Finland',
        'France',
        'Germany',
        'Gibraltar',
        'Greece',
        'Greenland',
        'Guernsey',
        'Hungary',
        'Iceland',
        'Ireland',
        'Italy',
        'Jersey',
        'Latvia',
        'Liechtenstein',
        'Lithuania',
        'Luxembourg',
        'Macedonia',
        'Malta',
        'Moldova',
        'Monaco',
        'Montenegro',
        'Netherlands',
        'Netherlands Antilles',
        'Norway',
        'Poland',
        'Portugal',
        'Romania',
        'San Marino',
        'Serbia',
        'Slovakia',
        'Slovenia',
        'Spain',
        'Sweden',
        'Switzerland',
        'Ukraine',
        'United Kingdom',
        'Afghanistan',
        'Azerbaijan',
        'Bangladesh',
        'Bhutan',
        'Brunei',
        'Cambodia',
        'China',
        'East Timor',
        'Georgia',
        'Hong Kong',
        'India',
        'Indonesia',
        'Japan',
        'Korea Republic of',
        'Kyrgyzstan',
        'Laos PDR',
        'Macau',
        'Malaysia',
        'Maldives',
        'Mongolia',
        'Myanmar',
        'Nepal',
        'Pakistan',
        'Philippines',
        'Russia',
        'Singapore',
        'Sri Lanka',
        'Taiwan',
        'Tajikistan',
        'Thailand',
        'Turkmenistan',
        'Uzbekistan',
        'Vietnam',
        'American Samoa',
        'Australia',
        'Cook Islands',
        'Fiji',
        'French Polynesia',
        'Guam',
        'Marshall Islands',
        'Micronesia',
        'New Caledonia',
        'New Zealand',
        'Norfolk Islands',
        'Niue',
        'Palau',
        'Papua New Guinea',
        'Samoa',
        'Solomon Islands',
        'Tonga',
        'Tuvalu',
        'Vanuatu',
        'Algeria',
        'Angola',
        'Bahrain',
        'Benin',
        'Botswana',
        'Burkina Faso',
        'Burundi',
        'Cameroon',
        'Cape Verde',
        'Central Africa',
        'Chad',
        'Comoros',
        'Congo',
        'Djibouti',
        'DR Congo',
        'Egypt',
        'Equatorial Guinea',
        'Ethiopia',
        'Eritrea',
        'Gabon',
        'Gambia',
        'Ghana',
        'Guinea',
        'Guinea-Bissau',
        'Iran',
        'Iraq',
        'Israel',
        'Ivory Coast',
        'Jordan',
        'Kenya',
        'Kuwait',
        'Lebanon',
        'Lesotho',
        'Liberia',
        'Libya',
        'Madagascar',
        'Malawi',
        'Mali',
        'Mauritania',
        'Mauritius',
        'Morocco',
        'Mozambique',
        'Namibia',
        'Niger',
        'Nigeria',
        'Oman',
        'Palestinian Territory',
        'Qatar',
        'Reunion/Mayotte',
        'Rwanda',
        'Sao Tome and Principe',
        'Saudi Arabia',
        'Senegal',
        'Seychelles',
        'Sierra Leone',
        'Somalia',
        'South Africa',
        'South Sudan',
        'Sudan',
        'Swaziland',
        'Syria',
        'Tanzania',
        'Togo',
        'Tunisia',
        'Turkey',
        'Uganda',
        'United Arab Emirates',
        'Yemen',
        'Zambia',
        'Zimbabwe',
    ];

}