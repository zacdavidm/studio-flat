
<?php
/**
 * @file
 * Default theme implementation for beans.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) entity label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-{ENTITY_TYPE}
 *   - {ENTITY_TYPE}-{BUNDLE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>

<?php if(isset($content['field_facebook_link'])):
  $fb_link=$content['field_facebook_link']['#items'][0];
  ?>
<a target="_blank" href="<?php print $fb_link['url'];?>"><i class="fi-social-facebook"></i><span><?php print $fb_link['title'];?></span></a>
<?php endif; ?>

<?php if(isset($content['field_twitter_link'])):
  $tw_link=$content['field_twitter_link']['#items'][0];
  ?>
<a target="_blank" href="<?php print $tw_link['url'];?>"><i class="fi-social-twitter"></i><span><?php print $tw_link['title'];?></span></a>
<?php endif; ?>

<?php if(isset($content['field_instagram_link'])):
  $ig_link=$content['field_instagram_link']['#items'][0];
  ?>
<a target="_blank" href="<?php print $ig_link['url'];?>"><i class="fi-social-instagram"></i><span><?php print $ig_link['title'];?></span></a>
<?php endif; ?>

<?php if(isset($content['field_newsletter_link'])):
  $nl_link=$content['field_newsletter_link']['#items'][0];
  ?>
<a target="_blank" href="<?php print $nl_link['url'];?>"><i class="fi-mail"></i><span><?php print $nl_link['title'];?></span></a>
<?php endif; ?>

<?php if(isset($content['field_contact_link'])):
  $contact_link=$content['field_contact_link']['#items'][0];
  ?>
<a target="_blank" href="<?php print $contact_link['url'];?>"><i class="fi-torsos-all"></i><span><?php print $contact_link['title'];?></span></a>
<?php endif; ?>

<?php if(isset($content['field_call_link'])):
  $call_link=$content['field_call_link']['#items'][0];
  ?>
<a target="_blank" href="<?php print $call_link['url'];?>"><i class="fi-telephone"></i><span><?php print $call_link['title'];?></span></a>
<?php endif; ?>

  </div>
</div>
