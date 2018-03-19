[![Latest Stable Version](https://poser.pugx.org/halfpastfouram/satis-generator/version)](https://packagist.org/packages/halfpastfouram/satis-generator)
[![Maintainability](https://api.codeclimate.com/v1/badges/a5a280e09dd75c47c89b/maintainability)](https://codeclimate.com/github/halfpastfouram/satis-generator/maintainability)
[![composer.lock available](https://poser.pugx.org/halfpastfouram/satis-generator/composerlock)](https://packagist.org/packages/halfpastfouram/satis-generator)
[![License](https://poser.pugx.org/halfpastfouram/satis-generator/license)](https://packagist.org/packages/halfpastfouram/satis-generator)
[![Total Downloads](https://poser.pugx.org/halfpastfouram/satis-generator/downloads)](https://packagist.org/packages/halfpastfouram/satis-generator)

# Satis.json Generator
A satis.json generator to use with composer/satis

## Installation

Install using composer:

```shell
composer require halfpastfouram/satis-generator
```

## Implementation

```php
<?php

$settings = new \Halfpastfour\SatisGenerator\SatisSettings();
$settings->setName('My Packages');

// Add a repository
$repository = new \Halfpastfour\SatisGenerator\Model\Repository();
$repository->setType('vcs')
           ->setUrl('https://github.com/someuser/somerepo.git');

$settings->getRepositories()->append($repository);

// Add a requirement/dependency
$requirement = new \Halfpastfour\SatisGenerator\Model\Requirement();
$requirement->setPackage('namespace/package');

$settings->getRequirements()->append($requirement);

// Provide generator with settings and generoute the file
$generator = new \Halfpastfour\SatisGenerator\SatisGenerator($settings);
$output    = $generator->generate();

header('content-type: application/json');
echo $output;
```