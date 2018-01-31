<?php

/**
 * @file
 * Contains \Drupal\linkit\Plugin\Linkit\Matcher\EntityMatcher.
 */

namespace Drupal\tieto_linkit\Plugin\Linkit\Matcher;

use Drupal\linkit\Plugin\Linkit\Matcher\EntityMatcher;

/**
 * @Matcher(
 *   id = "entity",
 *   label = @Translation("Entity"),
 *   deriver = "\Drupal\linkit\Plugin\Derivative\EntityMatcherDeriver"
 * )
 */
class TietoEntityMatcher extends EntityMatcher {

  /**
   * Builds the path string used in the match array.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *    The matched entity.
   *
   * @return string
   *   The URL for this entity.
   */
  protected function buildPath($entity) {
    return '/' . $entity->getEntityTypeId() . '/' . $entity->id();
  }

}
