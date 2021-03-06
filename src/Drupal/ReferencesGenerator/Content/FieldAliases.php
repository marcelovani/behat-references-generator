<?php

namespace Drupal\ReferencesGenerator\Content;

/**
 * Class FieldAliases
 *
 * Provides the Field mapping of Human readable name vs machine name.
 *
 * @package Drupal\ReferencesGenerator\Content
 */
class FieldAliases {

  /**
   * Stores the field aliases.
   */
  protected $fieldAliases;

  /**
   * FieldAliases constructor.
   *
   * @param $type Content type.
   */
  public function __construct($mapping) {
    $this->override($mapping);
  }

  /**
   * Returns the field aliases.
   *
   * @return mixed
   */
  public function getAliases() {
    return $this->fieldAliases;
  }

  /**
   * Returns the default Field mapping of Human readable name vs machine name.
   * @todo call an event to load defaults instead of this array
   *
   * @return array
   */
  private function defaultMapping() {
    return array(
      'Title' => 'title',
      'Body' => 'body',
    );
  }

  /**
   * Reads the overrides from behat.yml and updates the default mapping.
   *
   * @param array $overrides
   *    The array of overrides.
   */
  private function override($overrides = array()) {
    $this->fieldAliases = $this->defaultMapping();
    if (!empty($overrides)) {
      $this->fieldAliases = array_replace_recursive($this->fieldAliases, $overrides);
    }

    return $this->fieldAliases;
  }

}
