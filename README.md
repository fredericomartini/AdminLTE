# AdminLTE plugin for CakePHP

How to... ?
===========

**Installation**

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

```
composer require fredericomartini/adminlte
```
```php
// in config/bootstrap.php
Plugin::load('AdminLTE');
```

```php
// in your AppController
public function beforeRender(Event $event)
{
    $this->viewBuilder()->theme('AdminLTE');
}
```
---