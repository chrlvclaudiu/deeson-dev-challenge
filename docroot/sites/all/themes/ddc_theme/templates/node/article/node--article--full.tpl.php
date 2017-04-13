<?php
/**
 * @file
 * Template file for article full view.
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <article>
    <div class="media">
      <div class="pull-right">
        <?php print render($content['field_image']); ?>
      </div>
      <div class="media-body">
        <h1><?php print $title; ?></h1>
        <h3><?php print render($content['field_article_subtitle']); ?></h3>
        <h4><?php print render($content['field_article_publication_date']); ?></h4>
        <div class="pull-left">
          <?php print render($content['field_article_author_image']); ?>
        </div>
        <h5><?php print render($content['field_article_author_desc']); ?></h5>
        <?php print render($content['body']); ?>
      </div>
    </div>
  </article>
</div>
