<?php

return [
    'features_cryptogram_list' => [
        'wp_editor_widget',
        [
            'title'        => 'Features Cryptogram List',
            'output_title' => false,
            'content'      => file_get_contents(
                __DIR__ . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'features_cryptogram_list.html'
            ),
        ],
    ],
];
