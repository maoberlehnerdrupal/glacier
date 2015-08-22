<?php
/**
 * @file field--fences-code.tpl.php
 * Wrap each field value in the <code> element.
 *
 * @see http://developers.whatwg.org/text-level-semantics.html#the-code-element
 */
?>
<code class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$label_hidden): ?>
    <span class="<?php print $label_classes; ?>"<?php print $title_attributes; ?>><?php print $label; ?></span>
  <?php endif; ?>
  <?php foreach ($items as $delta => $item): ?>
    <?php if (!$item_wrapper_hidden): ?><span class="<?php print $item_classes; ?>"<?php print $item_attributes[$delta]; ?>><?php endif; ?>
      <?php print render($item); ?>
    <?php if (!$item_wrapper_hidden): ?></span><?php endif; ?>
  <?php endforeach; ?>
</code>
