<?php

namespace DennisDigital\Behat\Drupal\ReferencesGenerator\Generator\Drupal8\Reference;

use Drupal\Driver\Fields\Drupal8\AbstractHandler;
use DennisDigital\Behat\Drupal\ReferencesGenerator\Context\ReferencesGeneratorContext;
use DennisDigital\Behat\Drupal\ReferencesGenerator\Generator\Reference\GeneratorInterface;

abstract class AbstractGenerator extends AbstractHandler implements GeneratorInterface {
  /**
   * @var ReferencesGeneratorContext
   */
  protected $referencesGeneratorContext;

  /**
   * {@inheritdoc}
   */
  public function __construct(\stdClass $entity, $entity_type, $field_name) {
    parent::__construct($entity, $entity_type, $field_name);
  }

  /**
   * @param ReferencesGeneratorContext $drupalContext
   */
  public function setReferencesContext(ReferencesGeneratorContext $referencesGeneratorContext) {
    $this->referencesGeneratorContext = $referencesGeneratorContext;
  }

  /**
   * {@inheritdoc}
   */
  public function expand($values) {
  }

  /**
   * {@inheritdoc}
   */
  public function referenceExists($value) {
  }
}
