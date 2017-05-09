# Affinity4/Concat

Concatenate files with PHP. Can be used to concatenate CSS, JS or various files into a new format.

## Features
- Concatenate one or more files with the same extension into a new file.
- Concatenate one or more files with varying extebsions into a new file.

## Installation

Affinity4/Concat is available via composer:

```
composer require affinity4/concat
```

or

```
{
	"require": {
		"affinity4/file": "^1.0"
	}
}
```

## Usage

Assuming you have the following files:

```
src
  |
  |-- css
  |    |-- normailize.css
  |    |-- animate.css
  |    |-- styles.css
  |
  |-- js
  |    |-- jquery.js
  |    |-- main.js
  |
dist
  |-- css
  |-- js
  |
index.php
```

Concatenate multiple CSS files into one CSS file:
```
<?php
require_once __DIR__ . '/vendor/autoload.php';
```

