Charcoal ContentBuilder
===============

[![License][badge-license]][charcoal-contrib-content-builder]
[![Latest Stable Version][badge-version]][charcoal-contrib-content-builder]
[![Code Quality][badge-scrutinizer]][dev-scrutinizer]
[![Coverage Status][badge-coveralls]][dev-coveralls]
[![Build Status][badge-travis]][dev-travis]

A [Charcoal][charcoal-app] service provider content builder.



## Table of Contents

-   [Installation](#installation)
    -   [Dependencies](#dependencies)
-   [Configuration](#configuration)
-   [Usage](#usage)
-   [Development](#development)
    -  [API Documentation](#api-documentation)
    -  [Development Dependencies](#development-dependencies)
    -  [Coding Style](#coding-style)
-   [Credits](#credits)
-   [License](#license)



## Installation

The preferred (and only supported) method is with Composer:

```shell
$ composer require locomotivemtl/charcoal-contrib-content-builder
```


### Dependencies

- [Charcoal-core](https://github.com/locomotivemtl/charcoal-core) ~0.3
- [Charcoal-cms](https://github.com/locomotivemtl/charcoal-cms) ~0.5
- [Charcoal-attachment](https://github.com/locomotivemtl/charcoal-attachment) ~0.9



#### Required

-   [**PHP 5.6+**](https://php.net): _PHP 7_ is recommended.



## Configuration

Use the `ContentBuilderInterface` on a model or an instance of `TemplateableInterface`.
Configure Attachment groups use the usual method. ex : 

```json
    {
        "attachables": {
            "exemple/attachments/object/text": {
                "label": {
                    "en": "Text",
                    "fr": "Texte"
                }
            }
        },
        "groups": {
            "content": [
                "exemple/attachments/object/text"
            ]
        },
        "widgets": {
            "content": {
                "title": {
                    "en": "Content",
                    "fr": "Contenu"
                },
                "show_title": true,
                "show_header": true,
                "icon": "edit",
                "template": "charcoal/admin/widget/form-group/attachment",
                "group": "content",
                "attachment_heading": "{{ ident }}",
                "show_attachment_heading": false,
                "show_attachment_preview": true,
                "attachment_options": {
                    "show_preview": true,
                    "show_heading": false
                },
                "priority": 100,
                "attachable_objects": "content"
            }
        }
    }
```



## Usage

Attach any interfaces that are based on this structural model : 

```json
    {
        "attachments": {
            "widgets": {
                "content": {
                    "type": "charcoal/admin/widget/form-group/attachment",
                    "preset": "content"
                }
            }
        }
    }
```

This will dynamically add an attachment group to the model.
You can provide the interface to the template controller if the model implements `TemplateableInterface`.
This will dynamically add attachments groups on the model depending of the template context.
This can be very useful for `section` object, for example, to allow different attachments groups easily based on the template.



## Development

To install the development environment:

```shell
$ composer install
```

To run the scripts (phplint, phpcs, and phpunit):

```shell
$ composer test
```



### API Documentation

-   The auto-generated `phpDocumentor` API documentation is available at:  
    [https://locomotivemtl.github.io/charcoal-contrib-content-builder/docs/master/](https://locomotivemtl.github.io/charcoal-contrib-content-builder/docs/master/)
-   The auto-generated `apigen` API documentation is available at:  
    [https://codedoc.pub/locomotivemtl/charcoal-contrib-content-builder/master/](https://codedoc.pub/locomotivemtl/charcoal-contrib-content-builder/master/index.html)



### Development Dependencies

-   [php-coveralls/php-coveralls][phpcov]
-   [phpunit/phpunit][phpunit]
-   [squizlabs/php_codesniffer][phpcs]



### Coding Style

The charcoal-contrib-content-builder module follows the Charcoal coding-style:

-   [_PSR-1_][psr-1]
-   [_PSR-2_][psr-2]
-   [_PSR-4_][psr-4], autoloading is therefore provided by _Composer_.
-   [_phpDocumentor_](http://phpdoc.org/) comments.
-   [phpcs.xml.dist](phpcs.xml.dist) and [.editorconfig](.editorconfig) for coding standards.

> Coding style validation / enforcement can be performed with `composer phpcs`. An auto-fixer is also available with `composer phpcbf`.



## Credits

-   [Locomotive](https://locomotive.ca/)



## License

Charcoal is licensed under the MIT license. See [LICENSE](LICENSE) for details.



[charcoal-contrib-content-builder]:  https://packagist.org/packages/locomotivemtl/charcoal-contrib-content-builder
[charcoal-app]:                      https://packagist.org/packages/locomotivemtl/charcoal-app

[dev-scrutinizer]:    https://scrutinizer-ci.com/g/locomotivemtl/charcoal-contrib-content-builder/
[dev-coveralls]:      https://coveralls.io/r/locomotivemtl/charcoal-contrib-content-builder
[dev-travis]:         https://travis-ci.org/locomotivemtl/charcoal-contrib-content-builder

[badge-license]:      https://img.shields.io/packagist/l/locomotivemtl/charcoal-contrib-content-builder.svg?style=flat-square
[badge-version]:      https://img.shields.io/packagist/v/locomotivemtl/charcoal-contrib-content-builder.svg?style=flat-square
[badge-scrutinizer]:  https://img.shields.io/scrutinizer/g/locomotivemtl/charcoal-contrib-content-builder.svg?style=flat-square
[badge-coveralls]:    https://img.shields.io/coveralls/locomotivemtl/charcoal-contrib-content-builder.svg?style=flat-square
[badge-travis]:       https://img.shields.io/travis/locomotivemtl/charcoal-contrib-content-builder.svg?style=flat-square

[psr-1]:  https://www.php-fig.org/psr/psr-1/
[psr-2]:  https://www.php-fig.org/psr/psr-2/
[psr-3]:  https://www.php-fig.org/psr/psr-3/
[psr-4]:  https://www.php-fig.org/psr/psr-4/
[psr-6]:  https://www.php-fig.org/psr/psr-6/
[psr-7]:  https://www.php-fig.org/psr/psr-7/
[psr-11]: https://www.php-fig.org/psr/psr-11/