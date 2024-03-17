<div class="post_single container">
<div class="left">
<div class="title">
    @title
</div>
<div class="content">
    @php
    global $post;

    $content = apply_filters('the_content',$post->post_content); echo $content;
    
    @endphp
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
    <a href="@permalink">
    <div class="recents">
    <img src="@thumbnail('full', false)">    
    <h1>@title</h1>
    </div>
    </a>
    @endposts
</div>
</div>