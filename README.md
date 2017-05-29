# PipSqueek Telegram Bundle

[![Latest Stable Version](https://poser.pugx.org/richard4339/pipsqueek-telegrambundle/v/stable)](https://packagist.org/packages/richard4339/pipsqueek-telegrambundle)
[![Total Downloads](https://poser.pugx.org/richard4339/pipsqueek-telegrambundle/downloads)](https://packagist.org/packages/richard4339/pipsqueek-telegrambundle)
[![Latest Unstable Version](https://poser.pugx.org/richard4339/pipsqueek-telegrambundle/v/unstable)](https://packagist.org/packages/richard4339/pipsqueek-telegrambundle)
[![License](https://poser.pugx.org/richard4339/pipsqueek-telegrambundle/license)](https://packagist.org/packages/richard4339/pipsqueek-telegrambundle)
[![composer.lock](https://poser.pugx.org/richard4339/pipsqueek-telegrambundle/composerlock)](https://packagist.org/packages/richard4339/pipsqueek-telegrambundle)
[![Build Status](https://travis-ci.org/richard4339/pipsqueek-telegrambundle.svg?branch=master)](https://travis-ci.org/richard4339/pipsqueek-telegrambundle)

A Symfony 3.2 Bundle for pushing a message through a Telegram bot

## Command Line Usage
Usage is special because of the chatID being a number which the Symfony CLI does not support out of the box. An additional -- is required before the first argument
```
php bin/console -- -12345 This is a test message
```

## Installation
### Using Composer
```
composer require richard4339/pipsqueek-telegrambundle
```

### Requirements
Bundle is written specifically for Symfony 3.2.8, but may work with other versions. Testing is occurring in PHP 7 only, but should work with PHP 5.6+
