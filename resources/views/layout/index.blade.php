<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Quang Tùng &amp;Nguyễn Hương Wedding site!</title>
    <meta name="description"
        content="Quang Tùng &amp; Nguyễn Hương - Our wedding date: 2024-07-14 | Tình yêu không chỉ là một danh từ - nó là một động từ; nó còn hơn cả một cảm giác - đó là sự quan tâm, chia sẻ, giúp đỡ, hy sinh">
    <meta name="keywords" content="Wedding, Wedding website, Website đám cưới, Tạo website đám cưới miễn phí">
    <meta property="og:site_name" content="Quang Tùng &amp; Nguyễn Hương">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Quang Tùng &amp; Nguyễn Hương Wedding site!">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:description"
        content="Quang Tùng &amp; Nguyễn Hương - Our wedding date: 2024-07-14 | Tình yêu không chỉ là một danh từ - nó là một động từ; nó còn hơn cả một cảm giác - đó là sự quan tâm, chia sẻ, giúp đỡ, hy sinh">
    <meta property="og:image" content="{{ asset('assets/images/66695e13a727b040b10f5440/mobile.jpg') }}">
    <meta property="og:image:url"
        content="{{ asset('assets/images/66695e13a727b040b10f5440/mobile.jpg') }}">
    <meta property="og:image:secure_url"
        content="{{ asset('assets/images/66695e13a727b040b10f5440/mobile.jpg') }}">
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" type="image/x-icon" href="https://iwedding.info/favicon.ico">
    <link rel="manifest" href="./assets/images/fav_touch_icons/manifest.json">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Marmelad&amp;family=Oooh+Baby&amp;family=Bellota+Text&amp;display=swap"
        rel="stylesheet">
    <link href="./assets/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/libs.css" rel="stylesheet">
    <link href="./assets/fontawesome-all.min.css" rel="stylesheet" />
    <link href="./assets/neela-icon-set.css" rel="stylesheet" />
    <link href="./assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="./assets/style.css" rel="stylesheet" />
    <link href="./assets/calendar.css" rel="stylesheet">
    <style></style>
</head>
<script type="text/javascript">
    var photoGalleries = [];
</script>

<body>
    @yield('content')
    <script src="./assets/jquery-plugin-collection.js"></script>
    <!-- Template Scripts -->
    <script src="./assets/variables.js"></script>
    <script src="./assets/scripts.js"></script>
    <script src="./assets/template.settings.js"></script>
    <script src="./assets/calendar.js"></script>
    <script src="./assets/bii.js"></script>
    <script src="./assets/emoji-picker/js/insertTextAtCursor.js"></script>
    <script type="module" src="./assets/emoji-picker/js/init.js"></script>
    <script type="text/javascript">

        document.addEventListener("DOMContentLoaded", function () {
            var lazyloadImages;

            if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove("lazy");
                            imageObserver.unobserve(image);
                        }
                    });
                });

                lazyloadImages.forEach(function (image) {
                    imageObserver.observe(image);
                });
            } else {
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");

                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }

                    lazyloadThrottleTimeout = setTimeout(function () {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function (img) {
                            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            }
        })
    </script>
     @yield('scripts')
</body>

</html>
