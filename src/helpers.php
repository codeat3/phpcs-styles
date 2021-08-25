<?php

namespace Codeat3;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function styles(Finder $finder, array $rules = []): Config {
  $rules = array_merge(require __DIR__.'/rules.php', $rules);

  $config = new \PhpCsFixer\Config();
  return $config
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setRules($rules);
}
