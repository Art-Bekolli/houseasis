<?php
$cat = $_GET["cat"];
?>

@query([
  'post_type' => 'post',
  'cat' => $cat
])

<div class="category-house container">
    <h1>Latest @php echo get_cat_name($cat); @endphp Articles</h1>
<div class="cards">
@posts
<a href="@permalink">
<div class="card">
    <img src="@thumbnail('full', false)">
    <div class="card_info">
  <h2 class="entry-title">@title</h2>
  <h3>Read More >></h3>
    </div>
</div>
</a>
@endposts
</div>
</div>