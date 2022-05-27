<?php

return [
	'ROLES' =>
    [
        'CLIENTE' => [
            'id' => 4,
            'name' => 'cliente'
        ],
        'ADMNISTRADOR' => [
            'id' => 1,
            'name' => 'admnistrador'
        ]
    ],
    'SEXO' =>
    [
        'FEMININO' => 0,
        'MASCULINO' => 1,
        'OUTRO' => 2,
    ],
    'ESTADO_CIVIL' =>
    [
        'CASADO' => 0,
        'SOLTEIRO' => 1,
        'DIVORCIADO' => 2,
        'VIUVO' => 3,
        'OUTRO' => 4,
    ],
    'STATUS_CARTAO' =>
    [
        'ANDAMENTO' => 0,
        'FINALIZADO' => 1,
        'ENTREGUE' => 2,
        'CANCELADO' => 3,
    ],
    'PAGAMENTO' =>
    [
        'PENDENTE' => 0,
        'CONFIRMADO' => 1,
        'CANCELADO' => 2,
        'CORTESIA' => 3,
    ]

];
