<div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
  <?php
    print theme('links__system_main_menu', array('links' => $main_menu));
  ?>

  <main class="mdl-layout__content">
    <div class="demo-blog__posts mdl-grid">
      <?php print render($page['content']); ?>
    </div>
  </main>
</div>
