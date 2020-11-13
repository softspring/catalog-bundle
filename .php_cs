<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        'full_opening_tag' => false,
    ])
    ->setFinder($finder)
;