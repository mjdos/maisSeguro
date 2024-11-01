@include('painel.layout.header-site')
        <!-- main content area -->
        <div class="primary-content-area content-padding">
            <div class="container section-padding">
                <div class="section-title-wrapper">
                    <div class="section-title"> <span class="gradiente-text">Market Place de NFT</span></div>
                </div>
                <!-- filterable panel -->
                <div class="filterable-bar">
                    <form id="artworks-filter-form">
                        <input type="text" placeholder="CRYP1258OFF">

                        <div class="filter-item">
                            <select class="select-nice ">
                                <option value="auctions-only" selected>Auctions Only</option>
                                <option value="buy-now">Buy Now</option>
                                <option value="all-artworks">All Artworks</option>
                            </select>
                        </div>
                        <div class="filter-item">
                            <select class="select-nice ">
                                <option value="verified-creators" selected>Verified Creators</option>
                                <option value="all-creators">All Creators</option>
                            </select>
                        </div>
                        <div class="filter-item">
                            <select class="select-nice ">
                                <option value="ending-soon" selected>Ending Soon</option>
                                <option value="anytime">Anytime</option>
                            </select>
                        </div>
                        <div class="filter-item">
                            <select class="select-nice ">
                                <option value="lowest-to-highest" selected>Lowest to Highest $</option>
                                <option value="highest-to-lowest">Highest to Lowest $</option>
                            </select>
                        </div>
                        <div class="filter-button">
                            <button class="btn  btn-normal btn-dark">Filter</button>
                        </div>
                    </form>
                </div>
                <!-- featured items grid -->
                <div class="featured-box">
                    <div class="featured-box-wrapper grid-6-columns">
                        <div class="featured-item v6">
                            <div class="featured-item-wrapper">
                                <div class="featured-item-content">
                                    <div class="featured-item-image">
                                        <a href="{{ route('ntf.show','1') }}">
                                            <img src="{{ url('assets/img/nft-1.png') }}" alt=""></a>
                                    </div>
                                    <div class="featured-item-info">
                                        <div class="item-category ui-templates">
                                            SUPER RARO
                                        </div>
                                        <div class="title"><a href="{{ route('ntf.show','1') }}">Bertha Luz</a>
                                        </div>
                                        
                                        <div class="item-rating-box">
                                            <div class="item-rating">
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                            </div>
                                            <div class="fav-counter"><svg class="crumina-icon">
                                                    <use xlink:href="#heart-icon"></use>
                                                </svg><span class="count">10</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-item-post-content">
                                    <div class="social-share-box">
                                        <div class="share-icons">
    
                                            <a href="{{ route('ntf.show','1') }}">
                                                Visualizar
                                            </a>
                                            
                                        </div>
                                    </div>
                                    <div class="item-price">0.05 BNB</div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-item v6">
                            <div class="featured-item-wrapper">
                                <div class="featured-item-content">
                                    <div class="featured-item-image">
                                        <a href="{{ route('ntf.show','2') }}">
                                            <img src="{{ url('assets/img/nft-2.png') }}" alt=""></a>
                                    </div>
                                    <div class="featured-item-info">
                                        <div class="item-category ui-templates">
                                            SUPER RARO
                                        </div>
                                        <div class="title"><a href="{{ route('ntf.show','2') }}">Dirigível Pax</a>
                                        </div>
                                        
                                        <div class="item-rating-box">
                                            <div class="item-rating">
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                            </div>
                                            <div class="fav-counter"><svg class="crumina-icon">
                                                    <use xlink:href="#heart-icon"></use>
                                                </svg><span class="count">22</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-item-post-content">
                                    <div class="social-share-box">
                                        <div class="share-icons">
                                            <a href="{{ route('ntf.show','2') }}">
                                                Visualizar
                                            </a>
                                            
                                        </div>
                                    </div>
                                    <div class="item-price">0.05 BNB</div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-item v6">
                            <div class="featured-item-wrapper">
                                <div class="featured-item-content">
                                    <div class="featured-item-image">
                                        <a href="{{ route('ntf.show','3') }}">
                                            <img src="{{ url('assets/img/nft-7.png') }}" alt=""></a>
                                    </div>
                                    <div class="featured-item-info">
                                        <div class="item-category video-tutorials">
                                            RARO
                                        </div>
                                        <div class="title"><a href="{{ route('ntf.show','3') }}">Projeto Porto RJ</a>
                                        </div>
                                        
                                        <div class="item-rating-box">
                                            <div class="item-rating">
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon"> 
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                            </div>
                                            <div class="fav-counter"><svg class="crumina-icon">
                                                    <use xlink:href="#heart-icon"></use>
                                                </svg><span class="count">15</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-item-post-content">
                                    <div class="social-share-box">
                                        <div class="share-icons">
                                            <a href="{{ route('ntf.show','3') }}">
                                                Visualizar
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-price">0.03 BNB</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="featured-item v6">
                            <div class="featured-item-wrapper">
                                <div class="featured-item-content">
                                    <div class="featured-item-image">
                                        <a href="{{ route('ntf.show','4') }}">
                                            <img src="{{ url('assets/img/nft-4.png') }}" alt=""></a>
                                    </div>
                                    <div class="featured-item-info">
                                        <div class="item-category social-graphics">
                                            COMUM
                                        </div>
                                        <div class="title"><a href="{{ route('ntf.show','4') }}">Logo AN Verde</a>
                                        </div>
                                        
                                        <div class="item-rating-box">
                                            <div class="item-rating">
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                            </div>
                                            <div class="fav-counter"><svg class="crumina-icon">
                                                    <use xlink:href="#heart-icon"></use>
                                                </svg><span class="count">22</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-item-post-content">
                                    <div class="social-share-box">
                                        <div class="share-icons">
                                            <a href="{{ route('ntf.show','4') }}">
                                                Visualizar
                                            </a>
                                            
                                        </div>
                                    </div>
                                    <div class="item-price">0.015 BNB</div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-item v6">
                            <div class="featured-item-wrapper">
                                <div class="featured-item-content">
                                    <div class="featured-item-image">
                                        <a href="{{ route('ntf.show','5') }}">
                                            <img src="{{ url('assets/img/nft-5.png') }}" alt=""></a>
                                    </div>
                                    <div class="featured-item-info">
                                        <div class="item-category social-graphics">
                                            COMUM
                                        </div>
                                        <div class="title"><a href="{{ route('ntf.show','5') }}">Entrada AN</a>
                                        </div>
                                        
                                        <div class="item-rating-box">
                                            <div class="item-rating">
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                                <span class="filled"><svg class="crumina-icon">
                                                        <use xlink:href="#star2-icon"></use>
                                                    </svg></span>
                                            </div>
                                            <div class="fav-counter"><svg class="crumina-icon">
                                                    <use xlink:href="#heart-icon"></use>
                                                </svg><span class="count">22</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-item-post-content">
                                    <div class="social-share-box">
                                        <div class="share-icons">
                                            <a href="{{ route('ntf.show','5') }}">
                                                Visualizar
                                            </a>
                                            
                                        </div>
                                    </div>
                                    <div class="item-price">0.0015 BNB</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
        <!-- main content area -->
<br><br>

@include('painel.layout.footer-site')
