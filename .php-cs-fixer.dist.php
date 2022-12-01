<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('storage')
    ->exclude('bootstrap')
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR12' => true,
    ])
    ->setFinder($finder)
;