<header>
    <div class="menu">
        <div class="overlay"></div>
        <a href="#" class="btn-menu">
            <span class="line"></span>
        </a>
        <div class="menu-box scroll-y">
            <div class="wrap">
                <div class="mo-title">
                    <h2></h2>
                    <a href="#" class="btn-menu-back"></a>
                </div>
                <ul class="depth1">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="product.html">PRODUCT</a>
                    </li>
                    <li>
                        <a href="#">SUPPORT</a>
                        <ul class="depth2">
                            <li>
                                <a href="">FAQ</a>
                            </li>
                            <li>
                                <a href="">Buying Guide</a>
                            </li>
                            <li>
                                <a href="">Contact Us</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <h1>
        <a href="../index.html"></a>
    </h1>
    <div class="gnb">
        <ul class="depth1">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="product.html">PRODUCT</a>
            </li>
            <li>
                <a href="#">SUPPORT</a>
                <ul class="depth2">
                    <li>
                        <a href="">FAQ</a>
                    </li>
                    <li>
                        <a href="">Buying Guide</a>
                    </li>
                    <li>
                        <a href="">Contact Us</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <a href="#" class="btn-srch"></a>
    <div class="srch-box">
        <div class="overlay"></div>
        <div class="inner">
            <div class="wrap">
                <div class="top">
                    <input type="text" name="searchContent" class="submitSearch" placeholder="Search" />
                    <a href="" class="btn-srch2">
                        <span class="blind">검색</span>
                    </a>
                </div>
                <!--search result//-->
                <div id="searchNoResult" class="result-none" style="display: none">
                    <strong>Sorry. We cannot find the result you are searching
                        for.</strong>
                    <p>
                        Maybe a little spelling mistake? <br />
                        if not, please use keyword suggestion
                    </p>
                </div>
                <!--//search result-->
                <!--Keyword Suggestion//-->
                <div class="keyword">
                    <strong>Keyword Suggestion</strong>
                    <ul>
                        <li>
                            <a href="#">SP3000</a>
                        </li>
                        <li>
                            <a href="#">SR35</a>
                        </li>
                        <li>
                            <a href="#">KANN MAX</a>
                        </li>
                        <li>
                            <a href="#">AK ZERO2</a>
                        </li>
                        <li>
                            <a href="#">AK HC3</a>
                        </li>
                    </ul>
                </div>
                <!--//Keyword Suggestion-->
                <!--search result//-->
                <div id="searchResult" class="result" style="display: none">
                    <div class="list">
                        <div class="total">
                            <strong>Product ( <span id="searchProductCnt"></span>)
                            </strong>
                            <a href="#" id="viewAllProductBtn" style="display: none">View All</a>
                        </div>
                        <ul id="searchProductLayer"></ul>
                    </div>
                    <div class="list v1">
                        <div class="total">
                            <strong>Contents ( <span id="searchContentCnt"></span>)
                            </strong>
                            <a href="#" id="viewAllContentBtn" style="display: none">View All</a>
                        </div>
                        <ul id="searchContentLayer"></ul>
                    </div>
                </div>
                <!--//search result-->
            </div>
        </div>
    </div>
</header>
