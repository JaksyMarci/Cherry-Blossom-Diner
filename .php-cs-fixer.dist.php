<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('storage')
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR12' => true,
    ])
    ->setFinder($finder)
;