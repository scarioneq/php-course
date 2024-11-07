<?php
$listpc = [
    'pc1' => [
        'videocard' => [
            'name' => 'RTX3070',
            'video_memory' => '8gb'
        ],
        'cpu' => 'r5-3600x',
        'ram' => '32gb'
    ]
];
$listpc['pc1']['videocard'] = ['bus_frequency' => '256'];
echo $listpc['pc1']['videocard']['bus_frequency'];
