<?php if ($teaser) { ?>
  <div class="mdl-card mdl-cell mdl-cell--12-col">
      <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url('<?php echo file_create_url($content['field_image'][0]['#item']['uri']); ?>')">

        <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
      </div>
      <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
        <div class="minilogo"></div>
        <div>
          <strong><?php echo $name ?></strong>
          <span><?php print format_interval((time() - $node->created) , 2) . t(' ago'); ?></span>
        </div>
      </div>
    </div>
<?php } elseif ($page) { ?>
  <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
    <div class="mdl-card__media mdl-color-text--grey-50">
      <h3>About Me</h3>
    </div>
    <div class="mdl-color-text--grey-700 formatted-text mdl-card__supporting-text no-flex">
      <?php print render($content); ?>
    </div>
  </div>
<?php } else { ?>
  <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
    <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url('<?php echo file_create_url($content['field_image'][0]['#item']['uri']); ?>')">
      <h3><?php print $title; ?></h3>
    </div>
    <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
      <div class="minilogo"></div>
      <div>
        <strong><?php echo $name ?></strong>
        <span><?php print format_interval((time() - $node->created) , 2) . t(' ago'); ?></span>
      </div>
      <div class="section-spacer"></div>
      <div class="meta__favorites">
        425 <i class="material-icons" role="presentation">favorite</i>
        <span class="visuallyhidden">favorites</span>
      </div>
      <div>
        <i class="material-icons" role="presentation">bookmark</i>
        <span class="visuallyhidden">bookmark</span>
      </div>
      <div>
        <i class="material-icons" role="presentation">share</i>
        <span class="visuallyhidden">share</span>
      </div>
    </div>
    <div class="mdl-color-text--grey-700 formatted-text mdl-card__supporting-text">
      <?php
        hide($content['field_image']);
        hide($content['comments']);
        hide($content['links']);
        print render($content);
      ?>
    </div>
  </div>
<?php } ?>
