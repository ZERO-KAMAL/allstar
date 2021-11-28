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
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <div class="entry-thumbnail"><a href="/blog-details"><img
                                            src="https://bariton-react.envytheme.com/images/blog/blog1.jpg" alt="image"></a>
                                </div>
                                <div class="entry-post-content">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="/blog2#">Admin</a></li>
                                            <li>March 10, 2020</li>
                                        </ul>
                                    </div>
                                    <h3><a href="{{ route('blogdetails') }}">Making Peace With The Feast Or Famine Of Freelancing</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p><a
                                        class="learn-more-btn" href="/blog-details">Read More <i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <div class="entry-thumbnail"><a href="/blog-details"><img
                                            src="https://bariton-react.envytheme.com/images/blog/blog2.jpg" alt="image"></a>
                                </div>
                                <div class="entry-post-content">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="/blog2#">Admin</a></li>
                                            <li>March 11, 2020</li>
                                        </ul>
                                    </div>
                                    <h3><a href="/blog-details">I Used The Web For A Day On A 50 MB Budget</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p><a
                                        class="learn-more-btn" href="/blog-details">Read More <i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <div class="entry-thumbnail"><a href="/blog-details"><img
                                            src="https://bariton-react.envytheme.com/images/blog/blog3.jpg" alt="image"></a>
                                </div>
                                <div class="entry-post-content">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="/blog2#">Admin</a></li>
                                            <li>March 12, 2020</li>
                                        </ul>
                                    </div>
                                    <h3><a href="/blog-details">Here are the 5 most telling signs of micromanagement</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p><a
                                        class="learn-more-btn" href="/blog-details">Read More <i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <div class="entry-thumbnail"><a href="/blog-details"><img
                                            src="https://bariton-react.envytheme.com/images/blog/blog4.jpg" alt="image"></a>
                                </div>
                                <div class="entry-post-content">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="/blog2#">Admin</a></li>
                                            <li>March 13, 2020</li>
                                        </ul>
                                    </div>
                                    <h3><a href="/blog-details">Add And Show Image With Size From Elementor Widget</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p><a
                                        class="learn-more-btn" href="/blog-details">Read More <i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <div class="entry-thumbnail"><a href="/blog-details"><img
                                            src="https://bariton-react.envytheme.com/images/blog/blog5.jpg" alt="image"></a>
                                </div>
                                <div class="entry-post-content">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="/blog2#">Admin</a></li>
                                            <li>March 14, 2020</li>
                                        </ul>
                                    </div>
                                    <h3><a href="/blog-details">How To The Active Menu Based On URL In Next.JS?</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p><a
                                        class="learn-more-btn" href="/blog-details">Read More <i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <div class="entry-thumbnail"><a href="/blog-details"><img
                                            src="https://bariton-react.envytheme.com/images/blog/blog6.jpg" alt="image"></a>
                                </div>
                                <div class="entry-post-content">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="/blog2#">Admin</a></li>
                                            <li>March 14, 2020</li>
                                        </ul>
                                    </div>
                                    <h3><a href="/blog-details">Instagram Feed Add To Your WordPress Site</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p><a
                                        class="learn-more-btn" href="/blog-details">Read More <i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="pagination-area"><a class="prev page-numbers" href="/blog2#"><i
                                        class="fas fa-angle-double-left"></i></a><a class="page-numbers"
                                    href="/blog2#">1</a><a class="page-numbers current" href="/blog2#">2</a><a
                                    class="page-numbers" href="/blog2#">3</a><a class="page-numbers"
                                    href="/blog2#">4</a><a class="next page-numbers" href="/blog2#"><i
                                        class="fas fa-angle-double-right"></i></a></div>
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
                                    <h4 class="title usmall"><a href="/blog-details">The Best Marketing top use Management
                                            Tools</a></h4>
                                </div>
                                <div class="clear"></div>
                            </article>
                            <article class="item">
                                <a href="" class="thumb"> <img
                                        src="	https://bariton-react.envytheme.com/images/blog/blog1.jpg" alt=""></a>
                                <div class="info"><time>March 15, 2020</time>
                                    <h4 class="title usmall"><a href="/blog-details">The Best Marketing top use Management
                                            Tools</a></h4>
                                </div>
                                <div class="clear"></div>
                            </article>
                            <article class="item">
                                <a href="" class="thumb"> <img
                                        src="	https://bariton-react.envytheme.com/images/blog/blog1.jpg" alt=""></a>
                                <div class="info"><time>March 15, 2020</time>
                                    <h4 class="title usmall"><a href="/blog-details">The Best Marketing top use Management
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
