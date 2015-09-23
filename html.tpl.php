<!DOCTYPE html>
<html>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <footer class="mdl-mini-footer">
    <div class="mdl-mini-footer--left-section">
      <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
        <span class="visuallyhidden">Twitter</span>
      </button>
      <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
        <span class="visuallyhidden">Facebook</span>
      </button>
      <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
        <span class="visuallyhidden">Google Plus</span>
      </button>
    </div>
    <div class="mdl-mini-footer--right-section">
      <button class="mdl-mini-footer--social-btn social-btn__share">
        <i class="material-icons" role="presentation">share</i>
        <span class="visuallyhidden">share</span>
      </button>
    </div>
  </footer>
  <?php print $page_bottom; ?>
</body>
</html>
