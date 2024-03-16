<footer class="content-info">
  <div class="content">
    @if (has_nav_menu('footer_navigation'))
    {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
  @endif
  </div>
  <hr>
  <div class="container">
    <?php the_field('footer-text', 'option'); ?>
  </div>
</footer>
