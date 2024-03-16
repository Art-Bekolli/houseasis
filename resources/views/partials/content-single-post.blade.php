<div class="post_single container">
<div class="left">
<div class="title">
    @title
</div>
<div class="content">
    @content
</div>
</div>
<div class="right">
    <div class="title">
        Recent Posts
    </div>
    @query([
        'post_type' => 'post',
        'posts_per_page'=> 4
    ])
    @posts
    <div class="recents">
    <img src="@thumbnail('full', false)">    
    <h1>@title</h1>
    </div>
    @endposts
</div>
</div>