<?php

/*
 * @file
 * Article wrapper class.
 */

namespace Drupal\ddc_custom\EntityWrapper\Node;

use \EntityDrupalWrapper;

/**
 * Wraps node of type article with additional functionality.
 */
class ArticleWrapper extends EntityDrupalWrapper {

  /**
   * Wraps a node object
   *
   * @param int|object $data
   *  A nid or node object.
   */
  public function __construct($data) {
    parent::__construct('node', $data);
  }

  /**
   * Checks if article publication date has passed.
   *
   * @return boolean
   */
  public function isPublished() {
    if (user_is_anonymous() && $this->getBundle() == 'article') {
      $publication_date = $this->field_article_publication_date->value();
      if (isset($publication_date)) {
        return $publication_date < REQUEST_TIME;
      }
    }

    return TRUE;
  }

}