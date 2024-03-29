
<script src="https://kit.fontawesome.com/5c6e6981df.js" crossorigin="anonymous"></script>
<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">
      <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
      <img src="<?php echo $image[0] ?>"></a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <a class="search" href="?s="><img src="<?php the_field('search', 'option'); ?>"></a>
  </div>


  <div class="mobile-header">
    <a class="brand" href="{{ home_url('/') }}">

      <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
      <img src="<?php echo $image[0] ?>"></a>

      <div class="menu-btn-1" onclick="menuBtnFunction(this)">
        <span></span>
    </div>

  </div>
  <div class="mobile-menu">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <a class="search" href="?s="><img src="<?php the_field('search', 'option'); ?>"></a>
  </div>
</header>

<script>
  function menuBtnFunction(menuBtn) {
    menuBtn.classList.toggle("active");
}
</script>