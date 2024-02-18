# Aforizma

A goofy hungarian alternative to Laravel's built in Inspiring command. Built as a way to test Laravel package development.

## Install

```shell
composer require ahurkatolto/aforizma:dev-main
```

If composer complains, edit your project's composer.json as so:

```json
"minimum-stability": "dev",
"prefer-stable": true
```

## Usage

1. Dependency injection

```php
class AforizmaTestController extends Controller
{
    public function random(Aforizma $aforizma)
    {
        return view('aforizma', [
            'quote' => $aforizma->quote,
            'author' => $aforizma->author,
        ]);
    }
}
```

2. Helper function

```php
$aforizma = aforizma();
```

3. Statically through the class itself

```php
$aforizma = \Ahurkatolto\Aforizma\Aforizma::random();
```
