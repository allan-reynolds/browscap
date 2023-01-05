<?php

declare(strict_types=1);

return [
    'issue-2542-A' => [
        'ua' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) VonageBusiness/2.9.9 Chrome/87.0.4280.141 Electron/11.3.0 Safari/537.36',
        'properties' => [
            'Comment' => 'Electron 11.3',
            'Platform' => 'Win10',
            'Platform_Description' => 'Windows 10',
            'Platform_Version' => '10.0',
            'Browser' => 'Electron',
            'Browser_Version' => '11.3',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-2542-B' => [
        'ua' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) edu_proxy/3.15.0 Chrome/91.0.4472.164 Electron/13.2.0 Safari/537.36',
        'properties' => [
            'Comment' => 'Electron 13.2',
            'Browser_Version' => 'Electron',
            'Browser_Version' => '13.2',
            'Platform' => 'Linux',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-2542-C' => [
        'ua' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) edu_proxy/3.0.0 Chrome/85.0.4183.98 Electron/10.1.2 Safari/537.36',
        'properties' => [
            'Comment' => 'Electron 10.1',
            'Browser_Version' => 'Electron',
            'Browser_Version' => '10.1',
            'Platform' => 'Linux',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-2542-D' => [
        'ua' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36 OPR/81.0.4196.60',
        'properties' => [
            'Comment' => 'Opera 81',
            'Browser' => 'Opera',
            'Version' => '81',
            'Platform' => 'Win10',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-2542-E' => [
        'ua' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4688.2 Safari/537.36 OPR/83.0.4246.0 (Edition developer)',
        'properties' => [
            'Comment' => 'Opera 83',
            'Browser' => 'Opera',
            'Version' => '83',
            'Platform' => 'macOS',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-2542-F' => [
        'ua' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.85 YaBrowser/21.11.1.932 Yowser/2.5 Safari/537.36',
        'properties' => [
            'Comment' => 'Yandex Browser 21.11',
            'Browser' => 'Yandex Browser',
            'Version' => '21.11',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-2542-G' => [
        'ua' => 'Mozilla/5.0 (Linux; Android 8.1.0; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Mobile Safari/537.36 EdgA/96.0.1054.36',
        'properties' => [
            'Comment' => 'Edge 96.0',
            'Browser' => 'Edge',
            'Version' => '96.0',
            'Platform' => 'Android',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-2542-H' => [
        'ua' => 'Mozilla/5.0 (Linux; Android 11; motorola one 5G UW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Mobile Safari/537.36 EdgA/93.0.961.78',
        'properties' => [
            'Comment' => 'Edge 93.0',
            'Browser' => 'Edge',
            'Version' => '93.0',
            'Platform' => 'Android',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-2542-I' => [
        'ua' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) FxiOS/39.0 Mobile/15E148 Safari/605.1.15',
        'properties' => [
            'Comment' => 'Firefox 39.0 for iOS',
            'Browser' => 'Firefox for iOS',
            'Version' => '39.0',
            'Device_Name' => 'iPhone',
            'Platform' => 'iOS',
            'Platform_Version' => '15.1',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-2542-J' => [
        'ua' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_7_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) FxiOS/34.2 Mobile/15E148 Safari/605.1.15',
        'properties' => [
            'Comment' => 'Firefox 34.2 for iOS',
            'Browser' => 'Firefox for iOS',
            'Version' => '34.2',
            'Device_Name' => 'iPhone',
            'Platform' => 'iOS',
            'Platform_Version' => '14.7',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
];
