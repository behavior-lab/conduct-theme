<?php

return [
    'sidebar_hover' => 'anomaly.field_type.boolean',
    'navigation'    => [
        'type'       => 'anomaly.field_type.textarea',
        'input_view' => 'behavior_lab.theme.conduct::admin/navigation/preferences',
    ],
    'display'       => [
        'required' => true,
        'type'     => 'anomaly.field_type.select',
        'config'   => [
            'default_value' => 'default',
            'mode'          => 'dropdown',
            'options'       => [
                'default' => 'behavior_lab.theme.conduct::preference.display.option.default',
                'compact' => 'behavior_lab.theme.conduct::preference.display.option.compact',
            ],
        ],
    ],
    'sidebars'      => [
        'required' => true,
        'type'     => 'anomaly.field_type.select',
        'config'   => [
            'options'       => [
                'default' => 'behavior_lab.theme.conduct::preference.sidebars.option.default',
                'static'  => 'behavior_lab.theme.conduct::preference.sidebars.option.static',
            ],
            'default_value' => 'default',
            'mode'          => 'dropdown',
        ],
    ],
];
