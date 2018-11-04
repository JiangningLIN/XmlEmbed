<?php
return [
    'file_renderers' => [
        'invokables' => [
            'xml_embed' => 'XmlEmbed\XmlRenderer',
        ],
        'aliases' => [
            'application/xml' => 'xml_embed',
            'xml' => 'xml_embed',
        ],
    ],
];
