@extends('layout.index')

@section('content')
<!-- BEGIN PRELOADER -->
<div id="preloader">
    <div class="loading-heart">
        <svg viewBox="0 0 512 512" width="100">
            <path
                d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
        </svg>
        <div class="preloader-title">
            T<br>
            <small>&</small>
            <br>H

        </div>
    </div>
</div>
<!-- END PRELOADER -->
<!-- BEGIN WRAPPER -->
<div id="wrapper">
    <!-- BEGIN HEADER -->
    <header id="header">
        <div class="nav-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="#hero" class="nav-logo d-flex align-items-center h-100">
                            <h1 style="font-size:25px">
                                T
                                <span class="main-color">
                                    <i class="fa fa-heart" style="margin:5px 5px 5px 10px;"></i>
                                </span>
                                H
                            </h1>
                        </a>
                        <!-- BEGIN MAIN MENU -->
                        <nav class="navbar">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="#couple">Cặp đôi</a>
                                </li>
                                <li>
                                    <a href="#gallery">Album Hình Cưới</a>
                                </li>
                                <li>
                                    <a href="#events">Sự kiện cưới</a>
                                </li>
                                <li>
                                    <a href="#rsvp">Sổ Lưu Bút</a>
                                </li>
                                @if($donate)
                                <li>
                                    <a href="#donate">Mừng cưới</a>
                                </li>
                                @endif
                            </ul>
                            <button id="nav-mobile-btn">
                                <i class="fas fa-bars"></i>
                            </button>
                            <!-- Mobile menu button -->
                        </nav>
                        <!-- END MAIN MENU -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->
    <!-- BEGIN HERO SECTION -->
    <section id="hero" class="bg-slideshow section-divider-bottom-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-wrapper v-center">
                        <h2 data-animation-direction="fade" data-animation-delay="600">Save the Date</h2>
                        <h1 class="hero-title light ">
                            <span class="d-block d-sm-inline" data-animation-direction="from-right"
                                data-animation-delay="300">Quang Tùng</span>
                            <small class="d-block d-sm-inline" data-animation-direction="from-top"
                                data-animation-delay="300">&</small>
                            <span class="d-block d-sm-inline" data-animation-direction="from-left"
                                data-animation-delay="300">Nguyễn Hương</span>
                        </h1>
                        <div class="hero-subtitle light" data-animation-direction="fade" data-animation-delay="1000">14
                            Tháng 7 2024</div>
                        <div data-animation-direction="fade" data-animation-delay="1000">
                            <a href="#rsvp" class="btn btn-light scrollto">Gửi lời chúc</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO SECTION -->
    <!-- BEGIN ABOUT US SECTION -->
    <section id="couple">
        <div class="container">
            <div class="row about-elems-wrapper">
                <div class="element col-md-6 col-xl-4 offset-xl-2" data-animation-direction="from-left"
                    data-animation-delay="300">
                    <div class="image">
                        <img class="" src="./assets/images/66695e13a727b040b10f5440/BI_08118.jpg" alt="" width="600"
                            height="714" />
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>
                                    Quang Tùng<small>CHÚ RỂ</small>
                                </h3>
                                <p>
                                    Là một người hiền lành và ít nói. Luôn coi trọng tình cảm và yêu thương gia
                                    đình. Với anh: “Gia đình...
                                    <a class="button-see"
                                        data-src="./assets/images/66695e13a727b040b10f5440/BI_08118.jpg"
                                        data-content="Là một người hiền lành và ít nói. Luôn coi trọng tình cảm và yêu thương gia đình. Với anh: “Gia đình là điểm tựa vững chắc nhất và là bến đỗ bình yên không đâu sánh bằng đối với mỗi con người. Đó luôn là nơi tràn ngập tình yêu thương để ta trở về.”"
                                        data-instagram="" data-twitter=""
                                        data-facebook="https://www.facebook.com/profile.php?id=100011772616257"
                                        data-name="Quang Tùng" style="font-size:14px;cursor: pointer">
                                        Xem thêm<i class="bi bi-arrow-down-short"></i>
                                    </a>
                                </p>
                                <ul class="sn-icons"></ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-about-us" data-animation-direction="fade" data-animation-delay="500">
                    <i class="icon-two-hearts"></i>
                </div>
                <div class="element col-md-6 col-xl-4" data-animation-direction="from-right" data-animation-delay="400">
                    <div class="image">
                        <img class="" src="./assets/images/66695e13a727b040b10f5440/BI_08082.jpg" alt="" width="600"
                            height="714" />
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>
                                    Nguyễn Hương<small>CÔ DÂU</small>
                                </h3>
                                <p>
                                    Là một người hay cười nhưng lại sống nội tâm, thích đi du lịch và yêu
                                    thiên nhiên...
                                    <a class="button-see"
                                        data-src="./assets/images/66695e13a727b040b10f5440/BI_08082.jpg"
                                        data-content="Là một người hay cười nhưng lại sống nội tâm, thích đi du lịch và yêu thiên nhiên. Hay khóc nhè, thích được người yêu thương chiều."
                                        data-instagram="" data-twitter=""
                                        data-facebook="https://www.facebook.com/profile.php?id=100009819938233"
                                        data-name="Nguyễn Hương" style="font-size:14px;cursor: pointer">
                                        Xem thêm<i class="bi bi-arrow-down-short"></i>
                                    </a>
                                </p>
                                <ul class="sn-icons">
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100009819938233">
                                            <i class="fab fa-facebook-square"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="about-us-desc col-lg-8 offset-lg-2" data-animation-direction="from-bottom"
                    data-animation-delay="300">
                    <h3>We are Getting Married</h3>
                    <p>Thật vui vì được gặp và đón tiếp các bạn trong một dịp đặc biệt như đám cưới của chúng tôi.
                        Chúng tôi muốn gửi đến bạn những lời cảm ơn sâu sắc nhất và để bạn biết chúng tôi rất hạnh
                        phúc khi thấy bạn ở đó. Cảm ơn các bạn rất nhiều vì sự hiện diện cùng những lời chúc tốt đẹp
                        mà bạn đã dành cho chúng tôi!</p>
                    <p class="groom-bride-signature">
                        <span>Quang Tùng</span>
                        & <span>Nguyễn Hương</span>
                    </p>
                    <div class="parent-info-group">
                        <div class="parent-infos">
                            <div class="parent-info">
                                <span class="parent-title">Con ông:</span>
                                <span class="parent-name">Tạ Quang Chi</span>
                            </div>
                            <div class="parent-info">
                                <span class="parent-title">Con bà:</span>
                                <span class="parent-name">Nguyễn Thị Thanh Nga</span>
                            </div>
                        </div>
                        <div class="parent-infos">
                            <div class="parent-info">
                                <span class="parent-title">Con ông:</span>
                                <span class="parent-name">Nguyễn Văn Nhân</span>
                            </div>
                            <div class="parent-info">
                                <span class="parent-title">Con bà:</span>
                                <span class="parent-name">Lê Thị Hải</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US SECTION -->
    <!-- BEGIN THE WEDDING SECTION -->
    <section id="invitation" class="parallax-background bg-color-overlay padding-divider-top section-divider-bottom-1"
        style="background-image: url(./assets/images/66695e13a727b040b10f5440/templates/644000ba4f8e0c7ddf09c709/BI_080841.jpg);">
        <div class="section-divider-top-1 off-section"></div>
        <!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title light">The Big Day!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 center">
                    <div class="invite neela-style" data-animation-direction="from-left" data-animation-delay="100">
                        <div class="invite_title">
                            <div class="text">
                                Save<small>the</small>
                                Date

                            </div>
                        </div>
                        <div class="invite_info px-2 px-lg-4">
                            <h2 class="fs-1">
                                Quang Tùng <small>&</small>
                                Nguyễn Hương
                            </h2>
                            <div>Một lời chúc của bạn chắc chắn sẽ làm cho đám cưới của chúng tôi có thêm một niềm
                                hạnh phúc!</div>
                            <div class="center m-0 mt-2">
                                <a href="#rsvp" class="btn btn-primary reverse scrollto text-white px-2"
                                    style="min-width:240px;max-width:240px;">Gửi lời chúc</a>
                            </div>
                            <div class="center m-0">
                                @if(!$guest->confirm_at)
                                <form method="post" action="{{ route('confirm', ['code' => request()->code]) }}"
                                    id="confirmForm" class="d-none">
                                    @csrf()
                                </form>
                                <a id="confirmBtn" class="btn btn-primary reverse text-white px-2 mt-2"
                                    style="min-width:240px;max-width:240px;">Xác nhận tham dự</a>
                                @endif
                            </div>
                            <div class="date">14 Tháng 7 2024</div>
                            <div class="count-down-clock">
                                <div id="clock" data-date="2024-07-14" data-text-day="Ngày" data-text-hour="Giờ"
                                    data-text-minute="Phút" data-text-second="Giây"></div>
                            </div>
                            <!-- <div class="uppercase">At Birchwood Church<br>4181 Birchwood Ave Seal Beach, CA</div>
                                <h5>Reception to follow</h5> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END THE WEDDING SECTION -->
    <!-- BEGIN GALLERY SECTION -->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title">Album Hình Cưới</h1>
                    <!--<div class="center m-0 mt-2 mb-2">-->
                    <!--    <a href="{{ config('app.url')}}//photo-album" target="_blank" class="btn btn-primary px-2" style="min-width:240px;max-width:240px;">Xem album</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="gallery-container gallery-fancybox masonry-gallery">
                        <script type="text/javascript">
                        photoGalleries.push({
                            src: "./assets/images/66695e13a727b040b10f5440/galleries/6669a8b298b4eb49c7065b02/large.jpg",
                            thumb: "./assets/images/66695e13a727b040b10f5440/galleries/6669a8b298b4eb49c7065b02/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4></h4></div>`
                        });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="0">
                            <img src="./assets/images/66695e13a727b040b10f5440/galleries/6669a8b298b4eb49c7065b02/small.jpg"
                                alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                        photoGalleries.push({
                            src: "./assets/images/66695e13a727b040b10f5440/galleries/6669a776b11b410abc005664/large.jpg",
                            thumb: "./assets/images/66695e13a727b040b10f5440/galleries/6669a776b11b410abc005664/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Tình yêu không chỉ là một danh từ - nó là một động từ; nó còn hơn cả một cảm giác - đó là sự quan tâm, chia sẻ, giúp đỡ, hy sinh</h4></div>`
                        });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="1">
                            <img src="./assets/images/66695e13a727b040b10f5440/galleries/6669a776b11b410abc005664/small.jpg"
                                alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                        photoGalleries.push({
                            src: "./assets/images/66695e13a727b040b10f5440/galleries/6669a79798b4eb49c7065b01/large.jpg",
                            thumb: "./assets/images/66695e13a727b040b10f5440/galleries/6669a79798b4eb49c7065b01/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4>Vì vậy, để được ai đó nhìn thấy đầy đủ và được yêu mến dù thế nào đi nữa — đây là một sự dâng hiến của con người có thể là điều kỳ diệu</h4></div>`
                        });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="2">
                            <img src="./assets/images/66695e13a727b040b10f5440/galleries/6669a79798b4eb49c7065b01/small.jpg"
                                alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                        photoGalleries.push({
                            src: "./assets/images/66695e13a727b040b10f5440/galleries/6669d2c3f6efd427e109c2d1/large.jpg",
                            thumb: "./assets/images/66695e13a727b040b10f5440/galleries/6669d2c3f6efd427e109c2d1/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4></h4></div>`
                        });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="3">
                            <img src="./assets/images/66695e13a727b040b10f5440/galleries/6669d2c3f6efd427e109c2d1/small.jpg"
                                alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                        photoGalleries.push({
                            src: "./assets/images/66695e13a727b040b10f5440/galleries/6669d465202b69c249013cf1/large.jpg",
                            thumb: "./assets/images/66695e13a727b040b10f5440/galleries/6669d465202b69c249013cf1/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4></h4></div>`
                        });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="4">
                            <img src="./assets/images/66695e13a727b040b10f5440/galleries/6669d465202b69c249013cf1/small.jpg"
                                alt class="img img-responsive">
                        </div>

                        <script type="text/javascript">
                        photoGalleries.push({
                            src: "./assets/images/66695e13a727b040b10f5440/galleries/6669d4c10ca6280cb9054997/large.jpg",
                            thumb: "./assets/images/66695e13a727b040b10f5440/galleries/6669d4c10ca6280cb9054997/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4></h4></div>`
                        });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="6">
                            <img src="./assets/images/66695e13a727b040b10f5440/galleries/6669d4c10ca6280cb9054997/small.jpg"
                                alt class="img img-responsive">
                        </div>

                        <script type="text/javascript">
                        photoGalleries.push({
                            src: "./assets/images/66695e13a727b040b10f5440/galleries/6669d48c7418e3e9bc0afb39/large.jpg",
                            thumb: "./assets/images/66695e13a727b040b10f5440/galleries/6669d48c7418e3e9bc0afb39/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4></h4></div>`
                        });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="7">
                            <img src="./assets/images/66695e13a727b040b10f5440/galleries/6669d48c7418e3e9bc0afb39/small.jpg"
                                alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                        photoGalleries.push({
                            src: "./assets/images/66695e13a727b040b10f5440/galleries/6669d4f9a082c973ce08d934/large.jpg",
                            thumb: "./assets/images/66695e13a727b040b10f5440/galleries/6669d4f9a082c973ce08d934/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4></h4></div>`
                        });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="5">
                            <img src="./assets/images/66695e13a727b040b10f5440/galleries/6669d4f9a082c973ce08d934/small.jpg"
                                alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                        photoGalleries.push({
                            src: "./assets/images/66695e13a727b040b10f5440/galleries/6669d2f7ee3ee02365042992/large.jpg",
                            thumb: "./assets/images/66695e13a727b040b10f5440/galleries/6669d2f7ee3ee02365042992/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4></h4></div>`
                        });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="8">
                            <img src="./assets/images/66695e13a727b040b10f5440/galleries/6669d2f7ee3ee02365042992/small.jpg"
                                alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                        photoGalleries.push({
                            src: "./assets/images/66695e13a727b040b10f5440/galleries/6669d2d3b8659143c508f810/large.jpg",
                            thumb: "./assets/images/66695e13a727b040b10f5440/galleries/6669d2d3b8659143c508f810/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4></h4></div>`
                        });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="9">
                            <img src="./assets/images/66695e13a727b040b10f5440/galleries/6669d2d3b8659143c508f810/small.jpg"
                                alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                        photoGalleries.push({
                            src: "./assets/images/66695e13a727b040b10f5440/galleries/6669d19d294def5cf10715bc/large.jpg",
                            thumb: "./assets/images/66695e13a727b040b10f5440/galleries/6669d19d294def5cf10715bc/small.jpg",
                            subHtml: `<div class="lg-sub-html"><h4></h4></div>`
                        });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="10">
                            <img src="./assets/images/66695e13a727b040b10f5440/galleries/6669d19d294def5cf10715bc/small.jpg"
                                alt class="img img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END GALLERY SECTION -->
    <!-- BEGIN WEDDING GIFTS SECTION -->
    <div id="events"></div>
    <section id="giftregistry" class="parallax-background section-bg-color"
        style="padding:135px 0; background-image: url(./assets/images/66695e13a727b040b10f5440/templates/644000ba4f8e0c7ddf09c709/BI_08684.jpg);">
        <div class="section-divider-top-4 off-section"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-6 events-boxs py-5">
                    <h2 class="section-title-lg desc text-white">Sự Kiện Cưới</h2>
                    <div class="section-desc mb-5 px-5 text-center">Tình yêu đích thực đứng về phía nhau trong những
                        ngày tốt đẹp và sát cánh hơn trong những ngày tồi tệ.</div>
                    <ul class="wedding-gifts">
                        <li data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <div class="d-flex align-items-center event-item-content">
                                    <img src="./assets/images/7744fc9739685fe61c53cd8fe2cf7e52.png"
                                        alt="LỄ CƯỚI NHÀ GÁI" width="100" height="100"
                                        class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0" />
                                    <div class="d-inline-block">
                                        <h3 class="w-100">LỄ CƯỚI NHÀ TRAI</h3>
                                        <p class="w-100 mb-2 mt-2">
                                            <i class="fa fa-clock" aria-hidden="true"></i>
                                            <strong>16:30 14/07/2024 - Bữa Cơm Thân Mật</strong>
                                            <br />
                                            <i class="fa fa-clock" aria-hidden="true"></i>
                                            <strong>07:00 15/07/2024 - Lễ Thành Hôn</strong>
                                        </p>
                                        <p class="w-100 mb-0 mt-1">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <strong>Đường Trần Quang Diệu - Xã Hội Hợp - Thành Phố Vĩnh
                                                Yên - Tỉnh Vĩnh Phúc</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                        <div class="atcb" style="display:none;">
                                            {
                                            "name":"LỄ CƯỚI NHÀ TRAI (Đám cưới Quang Tùng và Nguyễn Hương)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng
                                            tôi!. Thông tin chi tiết xem tại
                                            website:<br>[url]{{ config('app.url')}}/[/url]",
                                            "startDate":"2024-07-14",
                                            "endDate":"2024-07-14",
                                            "startTime":"16:30",
                                            "endTime":"11:00",
                                            "location":"Đường Trần Quang Diệu - Xã Hội Hợp - Thành Phố Vĩnh
                                            Yên - Tỉnh Vĩnh Phúc",
                                            "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],
                                            "timeZone":"Asia/Ho_Chi_Minh",
                                            "iCalFileName":"Reminder-Event",
                                            "listStyle":"modal",
                                            "label":"Thêm vào lịch",
                                            "trigger":"click"
                                            }

                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" id="otheramount"
                                        class="btn btn-primary reverse calendar-button-custom-click">Thêm vào
                                        lịch</a>
                                    <a href="https://www.google.com/maps/place/21%C2%B018'10.6%22N+105%C2%B033'28.0%22E/@21.3008808,105.5630655,14.84z/data=!4m4!3m3!8m2!3d21.3029444!4d105.5577778?hl=vi-VN&entry=ttu"
                                        target="_blank" id="otheramount" class="btn btn-primary reverse">
                                        Xem bản đồ <i class="fa fa-angle-right me-0"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <div class="d-flex align-items-center event-item-content">
                                    <img src="./assets/images/0ea5ba9f2cbe132b3fe488103eb61817.png"
                                        alt="TIỆC CƯỚI NHÀ NỮ" width="100" height="100"
                                        class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0" />
                                    <div class="d-inline-block">
                                        <h3 class="w-100">TIỆC CƯỚI NHÀ GÁI</h3>
                                        <p class="w-100 mb-2 mt-2">
                                            <i class="fa fa-clock" aria-hidden="true"></i>
                                            <strong>16:30 14/07/2024 - Bữa Cơm Thân Mật</strong>
                                            <br />
                                            <i class="fa fa-clock" aria-hidden="true"></i>
                                            <strong>07:00 15/07/2024 - Lễ Vu Quy</strong>
                                        </p>
                                        <p class="w-100 mb-0 mt-1"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <strong>Thôn Đô Lương – Xã An Hòa – Huyện
                                                Tam Dương – Tỉnh Vĩnh Phúc</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                        <div class="atcb" style="display:none;">
                                            {
                                            "name":"TIỆC CƯỚI NHÀ GÁI (Đám cưới Quang Tùng và Nguyễn Hương)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng
                                            tôi!. Thông tin chi tiết xem tại
                                            website:<br>[url]{{ config('app.url')}}/[/url]",
                                            "startDate":"2024-07-14",
                                            "endDate":"2024-07-15",
                                            "startTime":"11:00",
                                            "endTime":"11:00",
                                            "location":"Thôn Đô Lương – Xã An Hòa – Huyện Tam Dương – Tỉnh Vĩnh
                                            Phúc",
                                            "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],
                                            "timeZone":"Asia/Ho_Chi_Minh",
                                            "iCalFileName":"Reminder-Event",
                                            "listStyle":"modal",
                                            "label":"Thêm vào lịch",
                                            "trigger":"click"
                                            }

                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" id="otheramount"
                                        class="btn btn-primary reverse calendar-button-custom-click">Thêm vào
                                        lịch</a>
                                    <a href="https://www.google.com/maps/place/21%C2%B022'43.4%22N+105%C2%B031'22.7%22E/@21.3786911,105.5222065,18.2z/data=!4m13!1m8!3m7!1s0x3134ee900dcf3213:0x375bff57b9305e3d!2zQ-G6p3UgQsOsIExhLCBM4bqtcCBUaOG6oWNoLCBWxKluaCBQaMO6YywgVmnhu4d0IE5hbQ!3b1!8m2!3d21.3767622!4d105.5114609!16s%2Fg%2F1x5qq7yg!3m3!8m2!3d21.3787222!4d105.5229722?hl=vi-VN&entry=ttu"
                                        target="_blank" id="otheramount" class="btn btn-primary reverse">
                                        Xem bản đồ <i class="fa fa-angle-right me-0"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END WEDDING GIFTS SECTION -->
    <!-- BEGIN CONTACTS SECTION -->
    <section id="rsvp" class="section-bg-color extra-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">
                    <div class="form-wrapper flowers neela-style">
                        <h1 class="section-title">Sổ Lưu Bút</h1>
                        <form id="wish-form" class="form validate-rsvp-form row" method="POST">
                            @csrf()
                            <div class="d-none">
                                <input type="text" name="code" class="form-control" value="{{ $guest->code }}">
                            </div>
                            <div>
                                <input type="text" name="name" placeholder="Tên của bạn*" class="form-control"
                                    value="{{ $guest->name }}">
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="E-mail" class="form-control"
                                    value="{{ $guest->email }}">
                            </div>
                            <div>
                                <div class="textarea-emoji-picker">
                                    <div class="vitualTextarea">
                                        <textarea id="content" rows='3' class="form-control" name="message"
                                            placeholder="Nhập lời chúc của bạn*"></textarea>
                                        <div class="textAreaIcons">
                                            <span class="show-autocomplete tooltip-custom" data-toggle="tooltip"
                                                data-placement="top" title="Lời chúc gợi ý">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1" />
                                                </svg>
                                            </span>
                                            <span class="hide-autocomplete tooltip-custom" style="display: none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-lightbulb-off" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M2.23 4.35A6 6 0 0 0 2 6c0 1.691.7 3.22 1.826 4.31.203.196.359.4.453.619l.762 1.769A.5.5 0 0 0 5.5 13a.5.5 0 0 0 0 1 .5.5 0 0 0 0 1l.224.447a1 1 0 0 0 .894.553h2.764a1 1 0 0 0 .894-.553L10.5 15a.5.5 0 0 0 0-1 .5.5 0 0 0 0-1 .5.5 0 0 0 .288-.091L9.878 12H5.83l-.632-1.467a3 3 0 0 0-.676-.941 4.98 4.98 0 0 1-1.455-4.405zm1.588-2.653.708.707a5 5 0 0 1 7.07 7.07l.707.707a6 6 0 0 0-8.484-8.484zm-2.172-.051a.5.5 0 0 1 .708 0l12 12a.5.5 0 0 1-.708.708l-12-12a.5.5 0 0 1 0-.708" />
                                                </svg>
                                            </span>
                                            <span class="emoji-picker-button tooltip-custom" data-toggle="tooltip"
                                                data-placement="top" title="Chèn biểu tượng">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path
                                                        d="M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5" />
                                                </svg>
                                            </span>
                                            <div class="wishes-autocomplete-content" style="display: none;">
                                                <input type="text" id="searchWishSuggestions"
                                                    onkeyup="searchWishSuggestionsFunction()" placeholder="Tìm kiếm...">
                                                <ul id="wishSuggestions">
                                                    <li>
                                                        <a class="showContent" href="#">Chúc mừng hạnh phúc! Chúc
                                                            hai bạn trăm năm hạnh phúc!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Chúc mừng ngày trọng đại tới
                                                            hai bạn. Hạnh phúc bền lâu và trọn vẹn nhé!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Chúc mừng hạnh phúc hai bạn.
                                                            Chúc hai bạn bên nhau đầu bạc răng long, sớm có thiên
                                                            thần nhỏ nhé!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Chúc hai bạn ngày vui hạnh
                                                            phúc. Hãy yêu thương nhau thật nhiều và sống thật hạnh
                                                            phúc nha!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Chúc hai bạn sớm có con đàn
                                                            cháu đống, cửa nhà lúc nào cũng đầm ấm, yên vui nhé!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Thật vui vì cuối cùng ngày
                                                            này cũng tới với bạn. Tôi thành tâm chúc hai bạn thật
                                                            nhiều hạnh phúc và sống đời vui vẻ cùng nhau mãi
                                                            mãi!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Một chương mới đã mở ra với
                                                            hai bạn rồi. Tôi mong cuộc sống mới của cả hai sẽ tràn
                                                            ngập hy vọng, hạnh phúc và niềm vui!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Chúc đôi trai tài gái sắc
                                                            hạnh phúc trọn vẹn, luôn yêu thương nhau thật nhiều!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Chia vui cùng bạn trong ngày
                                                            trọng đại này. Cầu mong cuộc sống sau này của 2 vợ chồng
                                                            thật thuận hòa, may mắn, làm ăn phát tài nha.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Tôi mong tình yêu của hai
                                                            bạn thật bền chặt, gắn bó để xây dựng tổ ấm yên bình,
                                                            hạnh phúc!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Hai bạn của tôi chắc chắn sẽ
                                                            có được nhiều hạnh phúc. Mong hai bạn có sức khỏe dồi
                                                            dào, làm ăn phát đạt và sớm có cháu cho ông bà bồng bế
                                                            nhé!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Gửi lời chúc mừng chân thành
                                                            nhất tới bạn của tôi. Chúc hai bạn một cuộc sống thật
                                                            tuyệt vời, hòa thuận, gắn bó son sắt, thủy chung, hạnh
                                                            phúc lâu dài.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Nơi nào có yêu thương nơi đó
                                                            chắc chắn hạnh phúc. Hai bạn đã tìm được nơi đủ đầy yêu
                                                            thương rồi, hãy cùng nắm tay nhau đi hết cuộc đời
                                                            nhé!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Khởi đầu một cuộc sống mới,
                                                            nguyện ước cho bạn của tôi những ngày tháng hạnh phúc
                                                            phía trước để cùng xây dựng tổ ấm với người bạn đời.
                                                            Happy ending!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Mình tin rằng đây sẽ là khởi
                                                            đầu cho những điều tốt đẹp sắp tới trong cuộc sống của
                                                            hai bạn. Hãy yêu thương và cùng nhau vượt qua mọi khó
                                                            khăn trong cuộc sống nhé.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Hôn nhân đánh dấu sự kết
                                                            thúc một câu chuyện tình yêu và bắt đầu một trận đấu
                                                            vật. Chúc bạn những điều tốt đẹp nhất.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Tôi sẽ nói cho bạn bí mật
                                                            của một cuộc hôn nhân hạnh phúc. Đó vẫn là … một bí mật
                                                            cho tất cả! Chúc bạn tất cả những điều tốt đẹp nhất của
                                                            thời gian phía trước.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Hôn nhân thật đẹp. Cuối cùng
                                                            bạn đã tìm thấy một người mà bạn bị làm phiền suốt cuộc
                                                            đời.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Hai trở thành một: Một
                                                            giường, một điều khiển từ xa, một phòng tắm! Xin chúc
                                                            mừng đám cưới hai bạn.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Chúc đôi trai tài gái sắc
                                                            nhà mình hạnh phúc vẹn tròn, cung hỷ cung hỷ!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Chúc mừng anh trai của em đã
                                                            có người rước nhé. Em mong anh chị có cuộc sống vui vẻ,
                                                            hạnh phúc phía trước, làm ăn phát tài phát lộc.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Anh chị là một cặp trời
                                                            sinh, chắc chắn sau này sẽ rất hạnh phúc. Em chúc anh
                                                            chị sức khỏe dồi dào, làm ăn phát đạt và sớm có thiên
                                                            thần nhỏ cho vui cửa vui nhà.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Hôm nay là ngày vui của anh
                                                            chị và cũng là ngày em rất hạnh phúc. Chúc anh chị mãi
                                                            yêu thương nhau như bây giờ và đạt được mọi ước nguyện
                                                            trong cuộc sống.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Chúc anh/chị/em trăm năm
                                                            hạnh phúc, thuận vợ thuận chồng.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Hôm nay chú rể đẹp trai, cô
                                                            dâu xinh gái. Chúc mừng ngày thành hôn hai bạn tôi!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Chúc mừng đôi bạn trẻ nhé!
                                                            Mãi yêu thương nhau đến đầu bạc răng long bạn nha!</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Thay mặt team (tên nhóm)
                                                            chúc hai bạn ngày ngày ân ái, bên nhau trọn đời.</a>
                                                    </li>
                                                    <li>
                                                        <a class="showContent" href="#">Happy wedding! Chúc hai bạn
                                                            có cuộc sống mới ngập tràn tiếng cười và niềm vui, sớm
                                                            có thiên thần nhỏ bồng bé!</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="emoji-picker">
                                        <emoji-picker style="max-width: 100%;max-height: 350px;" class="light">
                                        </emoji-picker>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <button type="submit" class="btn btn-primary submit_form">Gửi lời chúc</button>
                            </div>
                        </form>
                        <div class="wish-box">
                            @foreach ($wishes as $item)
                            <div class="wish-box-item ">
                                <strong>{{ $item->name }}</strong>
                                <p>{!!$item->message !!}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACTS SECTION -->
    @if($donate)
    <section id="donate">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Hộp mừng cưới</h2>
                </div>
            </div>
        </div>
        <div class="container donate-box">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4 donate-card">
                    <div class="map-info-container">
                        <div class="info-wrapper animate-from-bottom animation-from-bottom mt-0"
                            data-animation-direction="from-bottom" data-animation-delay="100">
                            <div class="location-info">
                                <div class="neela-style">
                                    <span class="h-lines"></span>
                                    <span class="v-lines"></span>
                                    <h4 class="fs-5">Mừng cưới đến cô dâu</h4>
                                    <img class="qr-code-image m-auto mb-2" src="{{ $qrInfo['image'] }}">
                                    <p>
                                        Ngân hàng: <strong>{{ $qrInfo['bank'] }}</strong>
                                    </p>
                                    <p>
                                        Tên tài khoản: <strong>{{ $qrInfo['account'] }}</strong>
                                    </p>
                                    <p>
                                        Số tài khoản: <strong>{{ $qrInfo['bankNumber'] }}</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- BEGIN FOOTER -->
    <footer id="footer-onepage" class="bg-color">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-logo">
                            Quang Tùng<br>
                            <small>&</small>
                            <br>Nguyễn Hương

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
</div>
<!-- END WRAPPER -->
<div id="menu-access" class="">
    <div class="btn-menu-open">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
    </div>
    <div class="btn-menu-close">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
            viewBox="0 0 16 16">
            <path
                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
        </svg>
    </div>
    <ul class="p-0 m-0 list-menu-icon">
        <li class="text-center">
            <a href="#rsvp" class="text-white">
                <span class="content-button tooltipBtn">
                    <span class="tooltiptext">Gửi lời chúc</span>
                    <img class="access-icon " src="./assets/wishes.png" alt="">
                </span>
            </a>
        </li>
        <li class="text-center">
            <a href="#invitation" class="text-white">
                <span class="content-button tooltipBtn">
                    <span class="tooltiptext">Xác nhận tham dự</span>
                    <img class="access-icon " src="./assets/rsvp4.png" alt="">
                </span>
            </a>
        </li>
        @if($donate)
        <li class="text-center buttonDonate">
            <a href="#donate" class="text-white">
                <span class="content-button tooltipBtn">
                    <span class="tooltiptext">Mừng cưới</span>
                    <img class="access-icon " src="./assets/money_bag.png" alt="">
                </span>
            </a>
        </li>
        @endif
    </ul>
</div>
<script>
var slidehow_images = ["./assets/images/66695e13a727b040b10f5440/templates/644000ba4f8e0c7ddf09c709/BI_08224.jpg",
    "./assets/images/66695e13a727b040b10f5440/templates/644000ba4f8e0c7ddf09c709/BI_08684.jpg",
    "./assets/images/66695e13a727b040b10f5440/templates/644000ba4f8e0c7ddf09c709/BI_080841.jpg",
];
var custom_color = "#979595";
const biicore = {
    template_id: '644000ba4f8e0c7ddf09c709',
    templatePremium: ('1' === '1'),
    themeRoot: '/assets/templates/template19',
    webroot: '/assets/',
    coreSite: 'https://biihappy.com',
    webToken: '66695e13a727b040b10f5440',
    isPremium: ('1' === '1'),
    bgMusic: './assets/media/IDo-911.mp3',
    alert: JSON.parse('[]'),
    effect: JSON.parse('{\"type\":\"heart\"}')
};
</script>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $('#confirmBtn').on('click', function() {
        $('#confirmForm').submit()
    });
});
</script>
@endsection
