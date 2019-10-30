<?php
require '../core/functions/file.php';
require '../bootloader.php';
require('../core/functions/form/core.php');
require('../core/functions/html/generators.php');
$alus = [
    'name' => 'alus',
    'amount' => 500,
    'abarot' => 5,
    'image' => 'url()',
    'id' => 1236,
];
$sultys = [
    'name' => 'sultys',
    'amount' => 300,
    'abarot' => 5,
    'image' => 'url()',
    'id' => 1244,
];
$fileDB = new \Core\FileDB(DB_FILE);
$modelDrinks = new \App\Drinks\Model($fileDB);
//$sultys_drink = new\App\Drinks\Drink($sultys);
//$alus_drink = new\App\Drinks\Drink($alus);
//
//
//$modelDrinks->insert($sultys_drink);
//$modelDrinks->insert($alus_drink);
//var_dump($modelDrinks);
// Inputs form array
$form = [
    'attr' => [],
    'fields' => [
        'name' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'name',
                ],
            ],
            'validate' => [
                'validate_not_empty',
//                'validate_email_unique',
            ]
        ],
        'amount' => [
            'type' => 'number',
            'extra' => [
                'attr' => [
                    'placeholder' => 'amount',
                ]
            ],
            'validate' => [
                'validate_not_empty',
            ]
        ],
        'abarot' => [
            'type' => 'number',
            'extra' => [
                'attr' => [
                    'placeholder' => 'abarotai',
                ]
            ],
            'validate' => [
                'validate_not_empty',
            ]
        ],
        'image' => [
            'type' => 'url',
            'extra' => [
                'attr' => [
                    'placeholder' => 'picture url',
                ]
            ],
            'validate' => [
                'validate_not_empty',
            ]
        ],
    ],
    'buttons' => [
        'submit' => [
            'name' => 'action',
            'value' => 'submit',
            'type' => 'submit',
        ],
        'delete' => [
            'name' => 'action',
            'value' => 'delete',
            'type' => 'submit',
        ],
    ],
    'validators' => [],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ],
];
$filtered_input = get_filtered_input($form);
$result = get_form_action();
var_dump($result);
if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}
function form_success($filtered_input, $form) {
    $modelDrinks = new \App\Drinks\Model();
    $drink = new \App\Drinks\Drink($filtered_input);
    var_dump($modelDrinks->insert($drink));
}
function form_fail($filtered_input, &$form) {
    
}
var_dump($modelDrinks->get());
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../public_html/media/style.css">  
    </head>
    <style>
        .img {
            width: 150px;
            height: 205px;
        }
        .drinks-container {
            display: flex;
        }
        .drink-container {
            display: block;
            margin: 0 auto;
        }
        .center {
            text-align: center;
        }
    </style>
    <body>
        <div class="drinks-container">
            <?php foreach ($modelDrinks->get() as $drink_id => $drink): ?>
                <div class="drink-container">
                        <img  class ="img" alt="<?php $drink->getName(); ?>" src="<?php print $drink->getImage(); ?>">
                        <div class='name'><?php print "Pavadinimas: {$drink->getName()}"; ?></div>
                        <div class="abarot"><?php print"Laipsniai: {$drink->getAbarot()} %"; ?></div>
                        <div class="Amount"><?php print "Turis {$drink->getAmount()} ml"; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="form-container"> <?php require('../core/templates/form.tpl.php'); ?></div>
    </body>
</html>