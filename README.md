# PHP Library Starter Kit

Starter kit for creating composer compatible library

[![Total Downloads](http://img.shields.io/packagist/dt/sokil/php-library-starter-kit.svg)](https://packagist.org/packages/sokil/php-library-starter-kit)
[![Build Status](https://travis-ci.org/sokil/php-library-starter-kit.png?branch=master&2)](https://travis-ci.org/sokil/php-library-starter-kit)
[![Coverage Status](https://coveralls.io/repos/sokil/php-library-starter-kit/badge.png)](https://coveralls.io/r/sokil/php-library-starter-kit)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sokil/php-library-starter-kit/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sokil/php-library-starter-kit/?branch=master)
[![Code Climate](https://codeclimate.com/github/sokil/php-library-starter-kit/badges/gpa.svg)](https://codeclimate.com/github/sokil/php-library-starter-kit)

## Creating new project

Begin your new library with starter kit. Just create project:

```
composer create-project sokil/php-library-starter-kit my-php-library --prefer-source
```

Or you can just clone repo:

```
git clone https://github.com/sokil/php-library-starter-kit.git my-php-library

```

## External tools

There are some usefull tools for library development, but they written on PHP > 7.0 and this library by default configured for PHP ">=5.3 || ^7.0". So this tools only suggested to be installed or may be installed globally as phar packages or global composer requirement.

### PHPBench

Read more at http://phpbench.readthedocs.io. There is some configuration in `phpbench.json`. Also there is composer script to run infection: `composer bench`

### Infection

Read more at https://infection.github.io. There is some configuration in `infection.json.dist`. Also there is composer script to run infection: `composer infection`
