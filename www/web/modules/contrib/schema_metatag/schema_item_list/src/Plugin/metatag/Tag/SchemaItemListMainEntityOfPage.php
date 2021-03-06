<?php

namespace Drupal\schema_item_list\Plugin\metatag\Tag;

use \Drupal\schema_metatag\Plugin\metatag\Tag\SchemaMainEntityOfPageBase;

/**
 * Provides a plugin for the 'schema_item_list' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_item_list_main_entity_of_page",
 *   label = @Translation("mainEntityOfPage"),
 *   description = @Translation(""),
 *   name = "mainEntityOfPage",
 *   group = "schema_item_list",
 *   weight = 10,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaItemListMainEntityOfPage extends SchemaMainEntityOfPageBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
