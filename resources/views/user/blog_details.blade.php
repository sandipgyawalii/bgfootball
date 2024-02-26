@extends('user.layout.app')
@section('banner')
 <!--================= Banner Section Start Here =================-->

 <div class="banner banner1">
    <div class="inner-page-banner banner-bg">
        <div class="container">
            <div class="banner-content">
                <div class="page-path">
                    <ul>
                        <li><a class="home-page-link" href="index.html">Home</a></li>
                        <li><a class="current-page" href="#">Blog DETAILS</a></li>
                    </ul>
                </div>
                <h1 class="banner-heading">BLOG DETAILS</h1>
            </div>
        </div>
    </div>
</div>
<!--================= Banner Section End Here =================-->
@endsection
@section('content')
        <!--Blog Details area start-->
        <section class="rts-blog-details news-feed-section section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 left-news-col">
                        <div class="blog-details news-left2">
                            <div class="news-top">
                                <div class="icon-text">
                                    <span class="viewers fs-10"><a href="#"><i class="fas fa-eye"></i> 100 Views</a></span>
                                    <span class="comment fs-10"><a href="#"><i class="fas fa-comments"></i> 30
                                            Comments</a></span>
                                    <span class="date fs-10"><a href="#"><i class="fas fa-calendar-alt"></i> 24th March
                                        2023</a></span>
                                </div>
                                <p class="description">
                                    A great commerce experience cannot be distilled to a single number. It’s not a
                                    Lighthouse score, or a set of Core Web Vitals figures, although both are important
                                    inputs. A great commerce experience is a trilemma that carefully balances competing
                                    needs of delivering great customer experience, dynamic storefront capabilities, and
                                    long-term business — conversion, retention, re-engagement — objectives. As developers,
                                    we rightfully obsess about the customer experience, relentlessly working to squeeze
                                    every millisecond out of the critical rendering path, optimize input latency, and
                                    eliminate jank. At the limit, statically generated, edge delivered, and HTML-first pages
                                    look like the optimal strategy. That is until you are confronted with the realization
                                    that the next step function in improving conversion rates and business.
                                </p>
                                <div class="image-section">
                                    <div class="blog-image"><img src="assets/images/blog/blogimage.jpg" alt="blog-image">
                                    </div>
                                </div>
                                <h2 class="blog-point-text">A CLEANSING HOT SHOWER OR BATH</h2>
                                <p class="description">
                                    The journey, often, starts “simple” with localization. But then, quickly advances to
                                    contextual pricing, juggling complexity of large and frequently updated product catalog,
                                    managing continuously running multivariate tests and promotion campaigns, and serving
                                    customer-tailored dynamic recommendations. Eventually, you reach a realization that
                                    every page is similar to an open Tetris board where each “slot” can and should be
                                    dynamically tailored by dynamic visitor preferences, all powered by an ever-growing set
                                    of dynamic business rules.
                                </p>
                            </div>
                            <div class="blog-part blog-part2 part-gap">
                                <h2 class="blog-point-text">SETTING THE MOOD WITH INCENSE</h2>
                                <div class="flex-wrapper">
                                    <div class="blog-part-image"><img src="assets/images/blog/blogpart.jpg"
                                            alt="blog-part-image"></div>
                                    <p class="description">From connecting back-office operations to front-of-the-house A/B
                                        testing and dynamic
                                        personalization for each customer, the shared foundation is fast
                                        server-side rendering powered by fast storefront data access. On top of this
                                        foundation, we add layers of caching, prerendering and edge delivery
                                        optimizations — not the other way around.</p>
                                </div>
                            </div>
                            <div class="blog-quote-box part-gap">
                                <div class="author-box">
                                    <div class="quote-icon"><img src="assets/images/icons/quote-round.svg" alt="quote-icon"></div>
                                    <div class="author">
                                        <span class="blog-author">ROSALINA D. WILLIAM</span>
                                        <span class="role">FOUNDER</span>
                                    </div>
                                </div>
                                <h3 class="blog-quote">Choices to take a holiday and travelling out inthis pandemic situation are limited. Why not take a stay action on quality.</h3>
                            </div>
                            <p class="description">
                                Surveying the existing landscape of available developer tools and runtimes, we felt that
                                there is a gap. Enabling dynamic commerce requires close integration between server and
                                client, an optimized streaming and data fetch strategy, and a production platform that
                                operates at scale. These are hard technical problems that Shopify can help solve and this is
                                why we’ve been hard at work on the Hydrogen framework. It’s a React-based framework
                                optimized for commerce and specialized to be powered by Shopify APIs and infrastructure: The
                                future of commerce is dynamic and personalized.
                            </p>
                            <div class="bottom-area">
                                <div class="blog-actions part-gap">
                                    <div class="tag-area">
                                        <h3>RELATED TAGS</h3>
                                        <div class="button-tag">
                                            <ul>
                                                <li><a href="#">POPULAR</a></li>
                                                <li><a href="#">DESIGN</a></li>
                                                <li><a href="#">UX</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social-area">
                                        <div class="social-title">
                                            <h3>SOCIAL SHARE</h3>
                                        </div>
                                        <div class="social-icon">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="post-area part-gap mb--50">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-lg-4 col-sm-4 col-12 text-start">
                                            <div class="previous-post quick-post">
                                                <div class="post-text">
                                                    <h3 class="sub-title">Prev Post</h3>
                                                    <h2 class="sect-title"><a href="#">TIPS ON MINIMALIST</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-12 text-sm-center text-center">
                                            <div class="icon-area">
                                                <a href="#"><img src="assets/images/icons/grid-shape.svg" alt="img"></a>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-4 col-sm-4 col-12 text-sm-end text-start justify-content-sm-end justify-content-start">
                                            <div class="next-post quick-post">
                                                <div class="post-text">
                                                    <h3 class="sub-title">Next Post</h3>
                                                    <h2 class="sect-title"><a href="#">LESS IS MORE</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="blog-author-box part-gap">
                                    <div class="author-dp"><img src="assets/images/blog/authordp.jpg" alt="author-dp"></div>
                                    <div class="content">
                                        <span>Written by</span>
                                        <h2 class="author-name">ROSALINA D. WILLIAM</h2>
                                        <p class="author-description">Getting fast initial render with streaming server-side
                                            rendering, efficient
                                            component-level updates and state transitions, while also setting up a
                                            performant loading and bundling strategy.</p>
                                    </div>
                                </div>
                                {{-- <div class="comment-header">
                                    <div class="comment">
                                        <h3>03 COMMENT</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comment-section first-child">
                                            <div class="comment-text">
                                                <div class="commentator">
                                                    <a href="#"><img src="assets/images/items/user1.png"
                                                            alt="commentator"></a>
                                                </div>
                                                <div class="text">
                                                    <div class="section-title">
                                                        <div class="title">
                                                            <h2 class="sub-title">ROSALINA KELIAN</h2>
                                                            <span class="sect-title"><a href="#"><i
                                                                        class="fas fa-calendar-alt"></i>
                                                                    24th
                                                                    March
                                                                    2023</a></span>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#"><i class="fas fa-reply"></i> Reply</a>
                                                        </div>
                                                    </div>
                                                    <p class="description">But that's not all. Not to be outdone, individual
                                                        sellers
                                                        have increasingly engaged in e-commerce transactions via their own
                                                        personal
                                                        websites. And digital marketplaces such as eBay or Etsy serve as
                                                        exchanges
                                                        where multitudes of buyers and sellers come together to conduct
                                                        business.
                                                        commerce has changed the way people shop and consume products and
                                                        services.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <div class="comment-section">
                                            <div class="comment-text">
                                                <div class="commentator">
                                                    <a href="#"><img src="assets/images/items/user2.png"
                                                            alt="commentator"></a>
                                                </div>
                                                <div class="text">
                                                    <div class="section-title">
                                                        <div class="title">
                                                            <h2 class="sub-title">ALONSO WILLIAM</h2>
                                                            <span class="sect-title"><a href="#"><i
                                                                        class="fas fa-calendar-alt"></i>
                                                                    24th
                                                                    March
                                                                    2023</a></span>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#"><i class="fas fa-reply"></i> Reply</a>
                                                        </div>
                                                    </div>
                                                    <p class="description">Ecommerce has changed the way people shop and
                                                        consume products and services. More and more people are turning to
                                                        their computers and smart devices to order goods, which can easily
                                                        be delivered to their homes. As such, it has disrupted the retail
                                                        landscape. Amazon and Alibaba have gained considerable popularity.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comment-section">
                                            <div class="comment-text">
                                                <div class="commentator">
                                                    <a href="#"><img src="assets/images/items/user3.png"
                                                            alt="commentator"></a>
                                                </div>
                                                <div class="text">
                                                    <div class="section-title">
                                                        <div class="title">
                                                            <h2 class="sub-title">MIRANDA HALIM</h2>
                                                            <span class="sect-title"><a href="#"><i
                                                                        class="fas fa-calendar-alt"></i>
                                                                    24th
                                                                    March
                                                                    2023</a></span>
                                                        </div>
                                                        <div class="button">
                                                            <a href="#"><i class="fas fa-reply"></i> Reply</a>
                                                        </div>
                                                    </div>
                                                    <p class="description">commerce has changed the way people shop and
                                                        consume products and services. More and more people are turning to
                                                        their computers and smart devices to order goods, which can easily
                                                        be delivered to their homes. As such, it has disrupted the retail
                                                        landscape. Amazon and Alibaba have gained considerable popularity
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form mb-10">
                                    <div class="contact-form">
                                        <div class="input-box text-input mb-20">
                                            <textarea name="Message" id="validationDefault01" cols="30" rows="10"
                                                placeholder="Type Your Comments..." required></textarea>
                                        </div>
                                        <div class="input-box name-input mb-20">
                                            <input type="text" id="validationDefault02" placeholder="Type Your Name..."
                                                required>
                                        </div>
                                        <div class="input-box mail-input mb-20">
                                            <input type="text" id="validationDefault03" placeholder="Type Your E-mail..."
                                                required>
                                        </div>
                                        <div class="input-box sub-input mb-30">
                                            <input type="text" id="validationDefault04" placeholder="Type Your Website..."
                                                required>
                                        </div>
                                        <button class="form-btn form-btn4">GIVE COMMENT <i
                                                class="fal fa-long-arrow-right"></i></button>
                                    </div>
    
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="news-right-widget">
                            <div class="widget widget-search mb-40">
                                <div class="widget-title-box pb-25 mb-30">
                                    <h4 class="widget-sub-title2 fs-20">Search Here</h4>
                                </div>
                                <form class="subscribe-form mb-10" action="#">
                                    <input type="text" placeholder="Keyword...">
                                    <button class="widget-btn"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget widget-post mb-40">
                                <div class="widget-title-box pb-25 mb-30">
                                    <h4 class="widget-sub-title2 fs-20">Popular Feeds</h4>
                                </div>
                                <ul class="post-list">
                                    <li>
                                        <div class="blog-post mb-30">
                                            <a href="news-details.html"><img src="assets/images/blog/quickblog1.jpg"
                                                    alt="Post Img"></a>
                                            <div class="post-content">
                                                <h6 class="mb-10"><a href="news-details.html">Having education in
                                                        an area helps</a></h6>
                                                <span class="fs-14"><i class="fas fa-calendar-alt"></i> 24th March
                                                    2023</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-post mb-30">
                                            <a href="news-details.html"><img src="assets/images/blog/quickblog2.png"
                                                    alt="Post Img"></a>
                                            <div class="post-content">
                                                <h6 class="mb-10"><a href="news-details.html">People think, feel, &
                                                        behave in a way</a></h6>
                                                <span class="fs-14"><i class="fas fa-calendar-alt"></i> 24th March
                                                    2023</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-post mb-30">
                                            <a href="news-details.html"><img src="assets/images/blog/quickblog3.png"
                                                    alt="Post Img"></a>
                                            <div class="post-content">
                                                <h6 class="mb-10"><a href="news-details.html">That contributes to
                                                        their success</a></h6>
                                                <span class="fs-14"><i class="fas fa-calendar-alt"></i> 24th March
                                                    2023</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-categories-list mb-40">
                                <div class="widget-title-box pb-25 mb-30">
                                    <h4 class="widget-sub-title2 fs-20">Categories</h4>
                                </div>
                                <ul class="list-none">
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Business <span
                                                class="f-right">26</span></a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Consultant <span
                                                class="f-right">30</span></a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Creative <span
                                                class="f-right">71</span></a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> UI/UX <span
                                                class="f-right">56</span></a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Technologys <span
                                                class="f-right">60</span></a></li>
                                </ul>
                            </div>
                            <div class="widget widget-categories-tag mb-40">
                                <div class="widget-title-box pb-25 mb-25">
                                    <h4 class="widget-sub-title2 fs-20">TAGS</h4>
                                </div>
                                <div class="tag-list">
                                    <a href="#">Popular</a>
                                    <a href="#">Design</a>
                                    <a href="#">UX</a>
                                    <a href="#">Usability</a>
                                    <a href="#">Develop</a>
                                    <a href="#">Icon</a>
                                    <a href="#">Business</a>
                                    <a href="#">Consult</a>
                                    <a href="#">Kit</a>
                                    <a href="#">Keyboard</a>
                                    <a href="#">Mouse</a>
                                    <a href="#">Tech</a>
                                </div>
                            </div>
                            <div class="widget widget-sponsors-ad">
                                <div class="widget-title-box pb-25 mb-25">
                                    <h4 class="widget-sub-title2 fs-20">SPONSOR ADS</h4>
                                </div>
                                <a href="#">
                                    <div class="ad-thumb"><img src="assets/images/blog/sponsorsad.jpg" alt="sponsorad">
                                    </div>
                                    <span class="ad-tag">270X240</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details Area end-->
@endsection