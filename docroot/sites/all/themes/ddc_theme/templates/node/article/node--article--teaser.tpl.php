<?php
/**
 * @file
 * Template file for article teasers.
 */
?>
<div class="contextual-links-region">
  <?php print render($title_suffix); ?>
  <article>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
      <div class="media">
        <div class="pull-left">
          <?php print render($content['field_image']); ?>
        </div>
        <div class="media-body">
          <h1><?php print $linked_title; ?></h1>
          <h3><?php print render($content['field_article_subtitle']); ?></h3>
          <h4><?php print render($content['field_article_publication_date']); ?></h4>
          <h5><?php print render($content['field_article_author_desc']); ?></h5>
          <?php print render($content['body']); ?>
        </div>
      </div>
    </div>
  </article>
</div>
