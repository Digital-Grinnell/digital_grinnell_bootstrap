<?php

/**
 * @file
 * This is the template file for the object page for binary objects.
 *
 * Available variables:
 * - $islandora_object: The Islandora object rendered in this template file.
 * - $islandora_binary_object_info: Information about the binary object.
 * - $islandora_thumbnail_img: The thumbnail image of the binary object.
 * - $islandora_binary_object_download: Download link for the object.
 * - $description: Defined metadata descripton for the object.
 * - $parent_collections: Parent collections of the object if applicable.
 * - $metadata: Rendered metadata display for the binary object.
 *
 * @see template_preprocess_islandora_binary_object()
 * @see theme_islandora_binary_object()
 */
?>

<div class="islandora-binary-object-object islandora">
  <div class="islandora-binary-object-content-wrapper clearfix">
    <?php if (isset($islandora_binary_object_info)): ?>
      <?php print $islandora_binary_object_info; ?>
    <?php endif; ?>
    <?php if (isset($islandora_thumbnail_img)): ?>
      <div class="islandora-binary-object-content">
        <?php print $islandora_thumbnail_img; ?>
      </div>
    <?php endif; ?>
    <?php if (isset($islandora_binary_object_download)): ?>
      <?php print $islandora_binary_object_download; ?>
    <?php endif; ?>
  </div>

  <!-- MAM...added on 20-Oct-2015.  Moved down on 22-Oct-2015. -->
  <div class="islandora-object-description">
    <?php print $description; ?>
  </div>

  <div class="islandora-binary-object-metadata islandora-object-metadata">
    <!-- ?php print $description; ?> MAM...moved up on 20-Oct-2015 -->
    <?php print $metadata; ?>
    <?php if($parent_collections): ?>
      <!-- MAM...added class and style to div below on 20-Oct-2015 -->
      <div class="islandora_parent_collections" style="display:block; margin-top:2em;">
        <!-- MAM...changed h2 to h5 in the header below on 20-Oct-2015 -->
        <h5><?php print t('In collections'); ?></h5>
        <ul>
          <?php foreach ($parent_collections as $collection): ?>
            <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</div>
