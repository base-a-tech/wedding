<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Biihappy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Quang Tùng & Nguyễn Hương - Xác nhận tham dự</title>
    <meta name="description"
        content="Để có thể xác nhận tham dự, bạn phải là người nhận được thiệp mời từ cô dâu và chú rể. Vui lòng tìm kiếm thiệp mời theo form bên dưới!" />
    <meta name="keywords"
        content="Wedding,QuangTùng,Nguyễn Hương,Wedding website, Website đám cưới, Tạo website đám cưới miễn phí" />
    <meta property="og:site_name" content="QuangTùng &amp; Nguyễn Hương Wedding site!">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Quang Tùng & Nguyễn Hương - Xác nhận tham dự" />
    <meta property="og:url" content="{{ config('app.url')}}/rsvp" />
    <meta property="og:description"
        content="Để có thể xác nhận tham dự, bạn phải là người nhận được thiệp mời từ cô dâu và chú rể. Vui lòng tìm kiếm thiệp mời theo form bên dưới!" />
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
            <h2 class="text-center mt-3 mb-0 fs-3 text-uppercase" style="font-family: 'Coiny', cursive;">Xác nhận tham
                dự</h2>
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
                    <label class="p-2 text-center d-block text-black" for="name"
                        style="font-family: 'Jura', sans-serif;font-size: 20px;">Nhập Tên, Số Điện thoại hoặc Mã Khách
                        Mời <small class="d-block fs-6">Type your Name, Phone Number or Code</small></label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg rounded-0 text-center"
                        autocomplete="off" placeholder="---">
                    <input type="hidden" name="search_type" value="2">
                </div>
                <div class="errors mt-1 text-danger text-center"></div>
                <input type="hidden" value="61990349db8f76231c132068" name="website_id">
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
            <form id="free-confirm-form" method="POST" class="d-none">
                <div class="row gx-3">
                    <div class="col-12 col-md-6 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Nhập tên của bạn">
                            <label for="name">Nhập tên của bạn</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Nhập số điện thoại của bạn">
                            <label for="phone">Nhập số điện thoại của bạn</label>
                        </div>
                    </div>
                </div>

                <div class="mb-3 border border-gray-300 rounded p-3 pb-2">
                    <p class="fw-bold text-secondary">Chọn sự kiện tham dự</p>
                    <div class="form-check d-inline-block me-4 mb-2">
                        <input id="61990349db8f76231c132064" class="form-check-input" type="checkbox"
                            value="61990349db8f76231c132064" name="event_ids[]">
                        <label for="61990349db8f76231c132064" class="form-check-label">LỄ CƯỚI NHÀ TRAI</label>
                    </div>
                    <div class="form-check d-inline-block me-4 mb-2">
                        <input id="61990349db8f76231c132065" class="form-check-input" type="checkbox"
                            value="61990349db8f76231c132065" name="event_ids[]">
                        <label for="61990349db8f76231c132065" class="form-check-label">TIỆC CƯỚI NHÀ GÁI</label>
                    </div>
                </div>
                <div id="event-61990349db8f76231c132064"
                    class="event-question mb-3 border p-3 pb-1 rounded bg-gray-300 d-none">
                    <p class="fw-bold text-gray-700">Xác nhận sự kiện: LỄ CƯỚI NHÀ TRAI</p>
                    <div class="mb-3">
                        <select class="form-select py-3 text-secondary border-white" name="attendance_status[]"
                            data-event-id="61990349db8f76231c132064">
                            <option value="">Bạn sẽ tham gia chứ?</option>
                            <option value="0">Chưa xác định trước được</option>
                            <option value="1">Tôi sẽ tham gia</option>
                            <option value="2">Tôi không Tham gia được</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select py-3 text-secondary border-white" name="plus_ones[]"
                            data-event-id="61990349db8f76231c132064">
                            <option value="">Bạn có người đi cùng không?</option>
                            <option value="0">Đi một mình</option>
                            <option value="1">Đi cùng 1 người</option>
                            <option value="2">Đi cùng 2 người</option>
                            <option value="3">Đi cùng 3 người</option>
                            <option value="4">Đi cùng 4 người</option>
                            <option value="5">Đi cùng 5 người</option>
                        </select>
                    </div>

                    <div class="row-guest-questions" data-event-id="61990349db8f76231c132064">
                        <div class="mb-3 guest-question-content" style="margin-bottom: 10px;">
                            <select class="form-select py-3 text-secondary border-white guest-question"
                                data-is-required="2" data-type="2" data-question-id="657fce258b082d87ea050657"
                                name="guest_question_index_1[]" style="margin-top: 4px;">
                                <option value="">Bạn có đăng ký đi xe BUS không?</option>
                                <option value="657fce258b082d87ea050655">có</option>
                                <option value="657fce258b082d87ea050656">không</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="event-61990349db8f76231c132065"
                    class="event-question mb-3 border p-3 pb-1 rounded bg-gray-300 d-none">
                    <p class="fw-bold text-gray-700">Xác nhận sự kiện: TIỆC CƯỚI NHÀ GÁI</p>
                    <div class="mb-3">
                        <select class="form-select py-3 text-secondary border-white" name="attendance_status[]"
                            data-event-id="61990349db8f76231c132065">
                            <option value="">Bạn sẽ tham gia chứ?</option>
                            <option value="0">Chưa xác định trước được</option>
                            <option value="1">Tôi sẽ tham gia</option>
                            <option value="2">Tôi không Tham gia được</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select py-3 text-secondary border-white" name="plus_ones[]"
                            data-event-id="61990349db8f76231c132065">
                            <option value="">Bạn có người đi cùng không?</option>
                            <option value="0">Đi một mình</option>
                            <option value="1">Đi cùng 1 người</option>
                            <option value="2">Đi cùng 2 người</option>
                            <option value="3">Đi cùng 3 người</option>
                            <option value="4">Đi cùng 4 người</option>
                            <option value="5">Đi cùng 5 người</option>
                        </select>
                    </div>

                    <div class="row-guest-questions" data-event-id="61990349db8f76231c132065">
                        <div class="mb-3 guest-question-content" style="margin-bottom: 10px;">
                            <select class="form-select py-3 text-secondary border-white guest-question"
                                data-is-required="2" data-type="2" data-question-id="657fce258b082d87ea050657"
                                name="guest_question_index_1[]" style="margin-top: 4px;">
                                <option value="">Bạn có đăng ký đi xe BUS không?</option>
                                <option value="657fce258b082d87ea050655">có</option>
                                <option value="657fce258b082d87ea050656">không</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="commonerror text-danger" style="display:none;">
                    <img
                        src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='18' height='18' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e" />
                    Vui lòng nhập tên, số điện thoại hoặc mã khách mời của bạn!
                </div>
                <div class="is_premium_error text-danger" style="display:none;">
                    <img
                        src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='18' height='18' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e" />
                    <span>Vui lòng nâng cấp lên gói VIP, để thêm khách mời!</span>
                </div>
                <input type="hidden" value="61990349db8f76231c132068" name="website_id">
                <button type="submit" class="btn btn-lg btn-danger text-center w-100 mt-2"
                    style="font-family: 'Jura', sans-serif;">Xác nhận<small
                        class="d-block fs-6">Confirm</small></button>
            </form>
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
                                let data = res.data;

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
                                                <input class="form-check-input" type="radio" data-website-id="${element.id}" name="guestId" id="guest-${element.id}" value="${element.id}">
                                                <label class="form-check-label fw-semibold" for="guest-${element.id}">${element.name}${guestSubInfo}</label>
                                            </div><label class="position-absolute w-100 h-100 top-0 start-0" role="button" for="guest-${element.id}"></label></div>`;
                                });
                                html +=
                                    ` <button type="submit" class="mt-2 btn btn-dark search-id disabled w-100 btn-lg">Xem thiệp mời và xác nhận</button>`;
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

        if ($("#free-confirm-form").length) {
            $("#free-confirm-form").on('submit', function(event) {
                event.preventDefault();
                let isCorrect = true;
                let guestQuestions = [];
                let name = $("#free-confirm-form").find('input[name="name"]').val();
                let email = $("#free-confirm-form").find('input[name="email"]').val();
                let phone = $("#free-confirm-form").find('input[name="phone"]').val();
                let website_id = $("#free-confirm-form").find('input[name="website_id"]').val();
                if (name == '') {
                    $("#free-confirm-form").find('input[name="name"]').addClass('is-invalid');
                    isCorrect = false;
                }
                $('.event-question').each(function(index, element) {
                    if (!$(element).hasClass('d-none')) {
                        let guestQuestion = [];
                        let eventID = '';
                        $(element).find('.row-guest-questions .guest-question-content').each(
                            function(index, formControlElement) {
                                eventID = $(formControlElement).parents(
                                    '.row-guest-questions').data('event-id');
                                let guestQuestionElements = $(formControlElement).children(
                                    '.guest-question');
                                let isRequired = guestQuestionElements.data('is-required');
                                let value = guestQuestionElements.val();
                                guestQuestion.push({
                                    'type': guestQuestionElements.data('type'),
                                    'question_id': guestQuestionElements.data(
                                        'question-id'),
                                    'result': value,
                                });
                                if (!value && isRequired == 1 && !guestQuestionElements
                                    .prop('disabled')) {
                                    if (guestQuestionElements.prop("tagName") == 'SELECT') {
                                        guestQuestionElements.addClass('is-invalid');
                                    } else {
                                        $(formControlElement).addClass('is-invalid');
                                    }
                                    isCorrect = false;
                                } else {
                                    if (guestQuestionElements.prop("tagName") == 'SELECT') {
                                        guestQuestionElements.removeClass('is-invalid');
                                    } else {
                                        $(formControlElement).removeClass('is-invalid');
                                    }
                                }
                            });
                        guestQuestions.push({
                            [eventID]: guestQuestion
                        });
                    }
                });
                let event_ids = $("#free-confirm-form").find('input[name="event_ids[]"]:checked').map(
                    function() {
                        return $(this).val();
                    }).get();

                if (event_ids.length <= 0) {
                    $("#free-confirm-form").find('input[name="event_ids[]"]').addClass('is-invalid');
                    isCorrect = false;
                }

                $("#free-confirm-form").find('select[name="attendance_status[]"]').each(function(index,
                    element) {
                    if (!$(element).closest(".event-question").hasClass("d-none") && $(element)
                        .val() == '') {
                        $(element).addClass('is-invalid');
                        isCorrect = false;
                    }
                });

                if (!isCorrect) {
                    $("div.commonerror").show();
                    $('.is_premium_error').hide();
                    return false;
                } else {
                    $("div.commonerror").hide();
                    $('.is_premium_error').hide();
                }

                let plus_ones = $("#free-confirm-form").find('select[name="plus_ones[]"]').map(function(
                    index, element) {
                    if (!$(element).closest(".event-question").hasClass("d-none")) {
                        return $(this).val();
                    }
                }).get();
                let attendance_status = $("#free-confirm-form").find(
                    'select[name="attendance_status[]"]').map(function(index, element) {
                    if (!$(element).closest(".event-question").hasClass("d-none") && $(element)
                        .val() !== '') {
                        return $(this).val();
                    }
                }).get();
                $.ajax({
                    type: "POST",
                    url: "{{ config('app.url')}}/free-confirm",
                    data: {
                        name: name,
                        email: email,
                        website_id: website_id,
                        plus_ones: plus_ones,
                        phone: phone,
                        attendance_status: attendance_status,
                        event_ids: event_ids,
                        is_premium: is_premium,
                        guest_questions: guestQuestions,
                    },
                    beforeSend: function() {
                        $("#free-confirm-form").find('button[type="submit"').attr(
                            'disabled', 'disabled');
                    },
                    success: function(res) {
                        if (!res.error) {
                            $("#free-confirm-form").html(
                                `<p class="text-center fs-5">
                            <svg width="17px" height="17px" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ng-scope"><title>F28A5059-2988-42E8-A07D-911419DD80B1</title><desc>Created with sketchtool.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Guest-List---Add-Inline-Dialogs" transform="translate(-730.000000, -252.000000)" fill="#78CC61"><g id="dialog" transform="translate(690.000000, 216.000000)"><g id="message" transform="translate(40.000000, 26.000000)"><path d="M8.5,10 C3.80553623,10 0,13.8055362 0,18.5 C0,23.1944638 3.80553623,27 8.5,27 C13.1944638,27 17,23.1944638 17,18.5 C17,13.8055362 13.1944638,10 8.5,10 Z M12.5538841,14.7117101 L13.5931014,15.7627536 C11.2406957,18.1151594 8.88878261,20.4670725 6.53686957,22.8194783 C5.50307246,21.7625217 4.45202899,20.7233043 3.40689855,19.6781739 L4.44611594,18.6384638 L6.53686957,20.7287246 L12.5538841,14.7117101 Z" id="icon-green-success"></path></g></g></g></g></svg>` +
                                'Xác nhận thành công. Xin chân thành cảm ơn quý khách!' +
                                '</p>');
                        } else {
                            if (is_premium == 0) {
                                $("div.commonerror").hide();
                                $('.is_premium_error > span').html(res.message);
                                $('.is_premium_error').show();
                            }
                        }
                        $("#free-confirm-form").find('button[type="submit"').removeAttr(
                            'disabled');
                    },
                    complete: function() {
                        $("#free-confirm-form").find('button[type="submit"').removeAttr(
                            'disabled');
                    },
                    error: function() {
                        $("#free-confirm-form").find('button[type="submit"').removeAttr(
                            'disabled');
                    }
                });
            });

            $(document).on('change', 'input[name="event_ids[]"]', function(event) {
                let _this = $(this);
                $('#event-' + _this.val()).toggleClass('d-none', !_this.is(":checked"));
                $('#event-' + _this.val()).find('select').toggleClass('ignore', !_this.is(":checked"));
            });

            $("input[name='name']").on('input', function() {
                if ($(this).val() !== '') {
                    $(this).removeClass('is-invalid');
                } else {
                    $(this).addClass('is-invalid');
                }
            });

            $("input[name='event_ids[]']").on('change', function() {
                if ($("input[name='event_ids[]:checked']").length <= 0) {
                    $("input[name='event_ids[]']").removeClass('is-invalid');
                } else {
                    $("input[name='event_ids[]']").addClass('is-invalid');
                }
            });

            $("select[name='attendance_status[]'], select.guest-question").on('change', function() {
                if ($(this).val() !== '') {
                    $(this).removeClass('is-invalid');
                } else {
                    $(this).addClass('is-invalid');
                }
            });

            $(document).on('change', 'input[name="event_ids[]"]', function(event) {
                let _this = $(this);
                $('#event-' + _this.val()).toggleClass('d-none', !_this.is(":checked"));
                $('#event-' + _this.val()).find('select').toggleClass('ignore', !_this.is(":checked"));
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
        const guestID = $(this).find('input[name="guestId"]:checked').val();
        const route = "{{ route('invitation', ['guestId' => 'guestID']) }}";

        window.location.href = route.replace('guestID', guestID) + '#confirm';
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