@extends('master')

@section('content')
    <div class="page-title-area item-bg3">
        <div class="container">
            <div class="page-title-content">
                <h2>Our Blog</h2>
                <ul>
                    <li><a href="/">Home</a><i class="fas fa-chevron-right"></i></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <section class="blog-area ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details">
                        <div class="article-image"><img src="https://bariton-react.envytheme.com/images/blog/blog-details.jpg" alt="image"></div>
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>Posted On:</span>September 14, 2020</li>
                                    <li><span>Posted By:</span><a href="/blog-details#">John Anderson</a></li>
                                </ul>
                            </div>
                            <h2>Here are the 5 most telling signs of micromanagement</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry’s standard dummy text ever since the 1500s, when an unknown printer took.
                            </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area" id="secondary">
                        <div class="widget widget_search">
                            <form class="search-form"><label><span class="screen-reader-text">Search for:</span><input
                                        type="search" class="search-field" placeholder="Search..."></label><button
                                    type="submit" class="search-submit"><i class="fas fa-search"></i></button></form>
                        </div>
                        <div class="widget widget_posts_thumb">
                            <h3 class="widget-title">Popular posts</h3>
                            <article class="item">
                                <a href="" class="thumb"> <img
                                        src="	https://bariton-react.envytheme.com/images/blog/blog1.jpg" alt=""></a>
                                <div class="info"><time>March 15, 2020</time>
                                    <h4 class="title usmall"><a href="/blog-details">The Best Marketing top use
                                            Management
                                            Tools</a></h4>
                                </div>
                                <div class="clear"></div>
                            </article>
                            <article class="item">
                                <a href="" class="thumb"> <img
                                        src="	https://bariton-react.envytheme.com/images/blog/blog1.jpg" alt=""></a>
                                <div class="info"><time>March 15, 2020</time>
                                    <h4 class="title usmall"><a href="/blog-details">The Best Marketing top use
                                            Management
                                            Tools</a></h4>
                                </div>
                                <div class="clear"></div>
                            </article>
                            <article class="item">
                                <a href="" class="thumb"> <img
                                        src="	https://bariton-react.envytheme.com/images/blog/blog1.jpg" alt=""></a>
                                <div class="info"><time>March 15, 2020</time>
                                    <h4 class="title usmall"><a href="/blog-details">The Best Marketing top use
                                            Management
                                            Tools</a></h4>
                                </div>
                                <div class="clear"></div>
                            </article>

                        </div>
                        <div class="widget widget_recent_entries">
                            <h3 class="widget-title">Recent posts</h3>
                            <ul>
                                <li><a href="/blog-details">The security risks of changing package owners</a><span
                                        class="post-date">March 15, 2020</span></li>
                                <li><a href="/blog-details">Tips to protecting business and Family</a><span
                                        class="post-date">March 16, 2020</span></li>
                                <li><a href="/blog-details">Protect your workplace from cyber attacks</a><span
                                        class="post-date">March 17, 2020</span></li>
                                <li><a href="/blog-details">Business debit Fees to increase in 2020</a><span
                                        class="post-date">March 18, 2020</span></li>
                                <li><a href="/blog-details">10 tips to reduce your card processing costs</a><span
                                        class="post-date">March 19, 2020</span></li>
                            </ul>
                        </div>
                        <div class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li><a href="/blog2#">Business</a></li>
                                <li><a href="/blog2#">Privacy</a></li>
                                <li><a href="/blog2#">Technology </a></li>
                                <li><a href="/blog2#">Tips</a></li>
                                <li><a href="/blog2#">Uncategorized</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
