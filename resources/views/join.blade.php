<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Biihappy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Quang Tùng & Nguyễn Hương - Tìm kiếm thiệp mời</title>
    <meta name="description"
        content="Để có thể Tìm kiếm thiệp mời, bạn phải là người nhận được thiệp mời từ cô dâu và chú rể. Vui lòng tìm kiếm thiệp mời theo form bên dưới!" />
    <meta name="keywords"
        content="Wedding,QuangTùng,Nguyễn Hương,Wedding website, Website đám cưới, Tạo website đám cưới miễn phí" />
    <meta property="og:site_name" content="QuangTùng &amp; Nguyễn Hương Wedding site!">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Quang Tùng & Nguyễn Hương - Tìm kiếm thiệp mời" />
    <meta property="og:url" content="{{ config('app.url')}}/rsvp" />
    <meta property="og:description"
        content="Để có thể Tìm kiếm thiệp mời, bạn phải là người nhận được thiệp mời từ cô dâu và chú rể. Vui lòng tìm kiếm thiệp mời theo form bên dưới!" />
    <meta property="og:image" content="./assets/images/61990349db8f76231c132068/BI_080841.jpg" />
    <meta property="og:image:url" content="./assets/images/61990349db8f76231c132068/BI_080841.jpg" />
    <meta property="og:image:secure_url" content="./assets/images/61990349db8f76231c132068/BI_080841.jpg" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ config('app.url')}}/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css2?family=Coiny&family=Jura:wght@300&family=MonteCarlo&family=Tourney:wght@100&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    .container {
        max-width: 650px;
    }

    #search-form h1 {
        font-family: 'Jura', sans-serif;
        font-size: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin: 0;
    }

    #search-form h1 span {
        padding: 0 15px;
    }

    @media only screen and (max-width: 410px) {
        #search-form h1 {
            font-size: 30px !important;
        }
    }

    @media only screen and (max-width: 374px) {
        #search-form h1 {
            font-size: 22px !important;
        }
    }

    .error {
        color: red;
    }

    .bg-gray-200 {
        background-color: #f1f4f8 !important;
    }

    .bg-gray-300 {
        background-color: #d9e2ef !important;
    }

    .text-gray-700 {
        color: #506690 !important;
    }

    .form-select.is-invalid,
    .was-validated .form-select:invalid {
        border-color: #dc3545 !important;
    }
    </style>
</head>

<body>
    <div class="border-bottom rounded-0 bg-gray-200 p-3 py-4">
        <div class="text-center m-auto" style="max-width:150px;">
            <img class="w-100 border p-1 border-2 rounded-circle border-danger"
                src="./assets/images/61990349db8f76231c132068/BI_080841.jpg" />
        </div>
        <div>
            <h2 class="text-center mt-3 mb-0 fs-3 text-uppercase" style="font-family: 'Coiny', cursive;">Tìm kiếm thiệp mời</h2>
            <p class="text-center mb-0" style="font-family: 'Jura', sans-serif;font-size: 22px;">Đám cưới của</p>
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                <h1 class="mb-0 fs-4"><span>Quang Tùng</span> <img height="50" src="./assets/heart.gif"> <span>Nguyễn
                        Hương</span></h1>
            </div>
        </div>
    </div>
    <main class="container my-3">
        <div>
            <form id="search-form" method="post" class="mb-3 ">
                @csrf()
                <div class="mt-2">
                    <label class="p-2 text-center d-block text-black" for="keyword"
                        style="font-family: 'Jura', sans-serif;font-size: 20px;">Nhập Tên, Số Điện thoại hoặc Mã Khách
                        Mời <small class="d-block fs-6">Type your Name, Phone Number or Code</small></label>
                    <input type="text" id="keyword" name="keyword" class="form-control form-control-lg rounded-0 text-center"
                        autocomplete="off" placeholder="---">
                </div>
                <div class="errors mt-1 text-danger text-center"></div>
                <button type="submit" class="btn btn-lg btn-danger text-center w-100 mt-4"
                    style="font-family: 'Jura', sans-serif;">Tìm kiếm thiệp mời của bạn<small class="d-block fs-6">Find
                        Your Invitation</small></button>
            </form>
        </div>
        <div class="search-response-success d-none" style="font-family: 'Jura', sans-serif;">
            <form id="confirmation-form" method="post">
                <p class="fw-bold text-center fs-6">Tìm thấy bạn trong danh sách khách mời. Vui lòng chọn đúng tên của
                    bạn để tiếp tục.</p>
                <div class="list-guest-container"></div>
            </form>
        </div>

        <div class="mb-3 search-response-error d-none" style="font-family: 'Jura', sans-serif;">
            <p class="fw-bold text-center fs-6 text-danger text-search-error-message"></p>
            <a class="btn btn-light fw-bold text-center fs-6 text-decoration-none scroll-free-confirm d-block"
                style="cursor:pointer;">Tiếp tục xác nhận
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg>
            </a>
            <a href="{{ config('app.url')}}/rsvp"
                class="fw-bold text-center fs-6 text-decoration-none scroll-search-form d-none"
                style="cursor:pointer;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                </svg>
                Trở về </a>
        </div>
        <div>
            <div class="row gx-3 mt-3">
                <a href="{{ route('home') }}" class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                    </svg>
                    Về website đám cưới </a>
            </div>
        </div>
    </main>
    <script src="./assets/rsvp-template/script.js?v=20231217"></script>
    <script>
    var webroot = '{{ config('app.url ')}}';
    var events = JSON.parse(
        '{"61990349db8f76231c132064":"L\u1ec4 C\u01af\u1edaI NH\u00c0 N\u1eee","61990349db8f76231c132065":"TI\u1ec6C C\u01af\u1edaI NH\u00c0 N\u1eee","61990349db8f76231c132066":"L\u1ec4 C\u01af\u1edaI NH\u00c0 NAM","63842aaa99d79a0fe97294c5":"TI\u1ec6C C\u01af\u1edaI NH\u00c0 NAM"}'
        );
    var is_premium = '1';

    $(document).ready(function() {
        var searchFormNode = $("#search-form");
        if (searchFormNode.length) {
            console.log('inti search form');
            searchFormNode.validate({
                errorLabelContainer: $("#search-form div.errors"),
                rules: {
                    name: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Vui lòng nhập tên, số điện thoại hoặc mã khách mời của bạn!",
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('searchGuests') }}",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: $(form).serialize(),
                        success: function(res) {
                            if (!res.error) {
                                let data = res;

                                let html = '';
                                data.forEach((element) => {
                                    let guestSubInfo = '';
                                    let guestSubInfoArr = [];
                                    if (element.code) {
                                        guestSubInfoArr.push('Mã khách: ' +
                                            element.code);
                                    }
                                    if (element.phone) {
                                        guestSubInfoArr.push(element.phone);
                                    }
                                    if (element.email) {
                                        guestSubInfoArr.push(element.email);
                                    }
                                    if (events[element.event_id] !==
                                        undefined) {
                                        guestSubInfoArr.push('Sự kiện: ' +
                                            events[element.event_id]);
                                    }

                                    if (guestSubInfoArr.length > 0) {
                                        guestSubInfo =
                                            ' <small class="text-muted">( ' +
                                            guestSubInfoArr.join(' - ') +
                                            ' )</small>';
                                    }

                                    html +=
                                        `<div class="p-3 border mb-2 rounded position-relative"><div class="form-check">
                                                <input class="form-check-input" type="radio" data-website-id="${element.code}" name="guestId" id="guest-${element.code}" value="${element.code}">
                                                <label class="form-check-label fw-semibold" for="guest-${element.code}">${element.name}${guestSubInfo}</label>
                                            </div><label class="position-absolute w-100 h-100 top-0 start-0" role="button" for="guest-${element.code}"></label></div>`;
                                });
                                html +=
                                    ` <button type="submit" class="mt-2 btn btn-dark search-id disabled w-100 btn-lg">Xem thiệp mời</button>`;
                                $('.list-guest-container').html(html);
                                $('.search-response-success').removeClass('d-none');
                                $('.search-response-error').addClass('d-none');
                                $('html, body').animate({
                                    scrollTop: $(".list-guest-container")
                                        .offset().top
                                }, 200);

                                searchFormNode.find('button[type="submit"').attr('disabled', 'disabled');
                            } else {
                                $('.search-response-error p').html(
                                    'Không tìm thấy bạn trong danh sách khách mời. Vui lòng thử thay đổi cách nhập tên và tìm kiếm lại lần nữa, hoặc liên hệ với cô dâu và chú rể.'
                                    );
                                $('.search-response-error').removeClass('d-none');
                                $('.search-response-success').addClass('d-none');
                                $('html, body').animate({
                                    scrollTop: $(".search-response-error")
                                        .offset().top
                                }, 200);
                            }

                            searchFormNode.find('button[type="submit"').removeAttr(
                                'disabled')
                        },
                        complete: function() {
                            searchFormNode.find('button[type="submit"').removeAttr(
                                'disabled');
                        }
                    });
                    return false;
                }
            });
        }
    });


    $(document).on('click', '.form-check-input', function(event) {
        if ($('.search-id').hasClass('disabled')) {
            $('.search-id').removeClass('disabled');
        }
    });

    $(document).on('submit', '#confirmation-form', function(event) {
        event.preventDefault();
        const guestId = $(this).find('input[name="guestId"]:checked').val();
        const route = "{{ route('home', ['code' => 'guestId']) }}";
        window.location.href = route.replace('guestId', guestId);
    });

    $(document).on('click', '.scroll-free-confirm', function(event) {
        $("#free-confirm-form").removeClass('d-none');
        $(".scroll-search-form").removeClass('d-none');
        $("#search-form").addClass('d-none');
        $(".scroll-free-confirm").addClass('d-none');
        $(".text-search-error-message").addClass('d-none');
    });

    // $(document).on('click', '.scroll-search-form', function(event) {
    // 	$("#free-confirm-form").addClass('d-none');
    // 	$(".scroll-search-form").addClass('d-none');
    // 	$("#search-form").removeClass('d-none');
    // 	$(".scroll-free-confirm").removeClass('d-none');
    // 	$(".text-search-error-message").removeClass('d-none');
    // });

    $(window).on('load', function(event) {
        event.preventDefault();
    });

    $("select[name='attendance_status[]']").on('change', function() {
        let eventQuestion = $(this).closest(".event-question");
        let plusOnes = eventQuestion.find("select[name='plus_ones[]']");

        if ($(this).val() == 1) {
            plusOnes.prop('disabled', false);
            checkAttendanceStatus(eventQuestion, true);
        } else {
            plusOnes.removeClass("border-danger");
            plusOnes.prop('disabled', true);
            plusOnes.val(plusOnes.find('option:first').val());
            checkAttendanceStatus(eventQuestion, false);
        }
    });

    function checkAttendanceStatus(eventQuestion, status) {
        eventQuestion.find('.row-guest-questions .guest-question-content').each(function(index, formControlElement) {
            let guestQuestionElements = $(formControlElement).children('.guest-question');
            if (!status) {
                guestQuestionElements.prop('disabled', true);
                guestQuestionElements.removeClass("border-danger");
                $(formControlElement).removeClass('is-invalid');
                guestQuestionElements.removeClass('is-invalid');
                switch (guestQuestionElements.prop('tagName')) {
                    case "TEXTAREA":
                    case "INPUT":
                        guestQuestionElements.val('');
                        break;
                    case "SELECT":
                        guestQuestionElements.val(guestQuestionElements.find('option:first').val());
                        break;
                    default:
                        guestQuestionElements.val('');
                        break;
                }
            } else {
                guestQuestionElements.prop('disabled', false);
            }
        });
    }
    </script>
</body>

</html>
