<?php

declare(strict_types=1);

namespace mglaman\DrupalEnhancedEntity;

use mglaman\DrupalEnhancedEntity\Entity\ModelEntityType;
use Drupal\Core\Entity\Annotation\ContentEntityType;

/**
 * @Annotation
 *
 * @phpcs:disable Drupal.NamingConventions.ValidVariableName.LowerCamelName
 */
final class Model extends ContentEntityType
{
  /**
   * @phpstan-var class-string
   */
    public $entity_type_class = ModelEntityType::class;

    public bool $enhanced_entity_access = true;

    public bool $owner_entity_access = false;

    public bool $has_ui = true;

    public bool $admin_ui_routes = true;

    public bool $provide_tasks = true;

  /**
   * @phpstan-var array<string, string>
   */
    public array $links = [];
}
