# Template

Basit php template kütüphanesi. Spagetti kodlamaya son.

## Kullanımı

```php
<?php
require_once 'Template.php';

$template = new Template;

$template->render('welcome.php', [
    'name' => 'gkxdev'
]);
```

## Örnek Şablon

```php
<?php $this->render('layouts/header.php'); ?>

<p>Welcome, <strong><?=$name?>!</strong></p>

<ul>
    <?php foreach ($skills as $skill): ?>
        <li><?=$skill?></li>
    <?php endforeach; ?>
</ul>

<?php $this->render('layouts/footer.php'); ?>
```

### __construct($dir = './templates/')

Şablon dosyalarının tutulduğu dizinin tanımlandığı yer.

### render($file, array $data = [], $return = false)

- `$file` parametresi ile şablon dosyasının yolu (dizin sonrasını) tanımlanır.
- `$data` parametresi ile şablon dosyasına aktarılacak değişkenler tanımlanır.
- `$return` parametresi ile şablon çıktısının değişkene atanabilirliği ayarlanır.
