# drupal-entity-enhancements
DX improvements for creating entity types


## Annotation usage

```php
<?php

declare(strict_types=1);

namespace Drupal\mymodule\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\user\EntityOwnerInterface;

/**
 * @\EntityEnhancements\Annotation\Model(
 *  id = "my_custom_entity",
 *  owner_entity_access = true,
 *  admin_ui_routes = false,
 * )
 */
final class MyCustomEntity extends ContentEntityBase implements EntityOwnerInterface {
```
