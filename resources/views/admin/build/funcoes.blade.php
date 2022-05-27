<?php

// Sexo
const GERAL_SEXO = [
    '0' => 'Feminino',
    '1' => 'Masculino',
    '2' => 'Outro'
];

// Estado civil
const CLIENTE_ESTADO_CIVIL = [
    '0' => 'Casado',
    '1' => 'Solteiro',
    '2' => 'Divorciado',
    '3' => 'Viuvo',
    '4' => 'Outro',
];

// Como conheceu? usuários clientes
const CLIENTE_COMO_CONHECEU = [
    '0'=> 'Campanha de indicação',
    '1' => 'Facebook',
    '2' => 'Google',
    '3' => 'Instagram',
    '4' => 'Outdoor',
    '5' => 'Panfletagem',
    '6' => 'Rádios',
    '7' => 'Clínicas',
    '8' => 'Indicação',
    '9' => 'Outros',
];

// Renda usuários clientes
const CLIENTE_RENDA = [
    '0' => 'Até 01 (um) salário',
    '1' => 'Até 02 (dois) salários',
    '2' => 'Até 03 (três) salários',
    '3' => 'Até 04 (quatro) salários',
    '4' => 'Até 05 (cinco) salários',
];

// Parentesco usuários dependentes
const DEPENDENTE_PARENTESCO = [
    '0' => 'Filho(a)',
    '1' => 'Pai',
    '2' => 'Mãe',
    '3' => 'Irmã(o)',
    '4' => 'Outro',
];

// Situação do cartão
const CARTAO_STATUS = [
    '0' => "<p class='cartao-status bg-warning text-white'>Em andamento</p>",
    '1' => "<p class='cartao-status bg-primary text-white'>Aguardando Retirada</p>",
    '2' => "<p class='cartao-status bg-success text-white'>Entregue</p>",
    '3' => "<p class='cartao-status bg-danger text-white'>Cancelado</p>",
];

// Situação do pagamento
const PAGAMENTO_STATUS_EL = [
    '0' => "<p class='pagamento-status text-white bg-warning'>Pendente</p>",
    '1' => "<p class='pagamento-status text-white bg-success'>Confirmado</p>",
    '2' => "<p class='pagamento-status text-white bg-danger'>Cancelado</p>",
    '3' => "<p class='pagamento-status text-white bg-primary'>Cortesia</p>",
];

?>
