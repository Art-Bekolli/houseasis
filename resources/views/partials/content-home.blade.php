<section class="section-hero">
    <div class="container">
        <div class="left">
            <h1>All Categories</h1>
            <div class="cards">
            @fields('hero_section')
            <div class="card">
                <a href="?cat=@sub('category_select')">
                <img src="@sub('category_image')">
                <h2>@sub('category_text')</h2>
                </a>
            </div>
            @endfields
        </div>
        </div>
        <div class="right"> <img src="@field('hero_image')"></div>
    </div>
</section>
<section class="section-categories container">
    @fields('hero_section')
    @php $cat = get_sub_field('category_select'); @endphp
    @query([
        'post_type' => 'post',
        'cat' => $cat,
        'posts_per_page' => 4
    ])
    <div class="category">
        <div class="title"><h1>@php echo get_cat_name($cat); @endphp</h1> <a class="view" href="?cat=@sub('category_select')">View All</a></div>
        <div class="cards">
            @posts
            <a href="@permalink">
            <div class="card">
                <img src="@thumbnail('full', false)">
                <h1>@title</h1>
            </div>
            </a>
            @endposts
        </div>
    </div>
    @endfields

</section>