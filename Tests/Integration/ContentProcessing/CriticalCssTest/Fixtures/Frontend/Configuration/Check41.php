<?php
return [
    'accelerator' => [
        'criticalCss' => [
            'enable' => true,
            'filesForPath' => [
                '^/test/.+$' => [
                    'EXT:accelerator/Tests/Integration/ContentProcessing/CriticalCssTest/Fixtures/Frontend/Files/Global/criticalOne.css',
                    'EXT:accelerator/Tests/Integration/ContentProcessing/CriticalCssTest/Fixtures/Frontend/Files/Global/criticalTwo.css'
                ]
            ],
        ]
    ]
];
