@extends('layouts.panel')

@section('content')
    <!-- ! Main -->
    <main class="main" id="skip-target">
        <div class="container">
            <h2 class="main-title">Heroes Table</h2>
            <div class="media-content">
                <div class="col-lg-3">
                    <label>Choose your kind</label>
                    <div class="media-sidebar">
                        <ul id="hero__list" class="quick-links">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
<script>

    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: `${base_api_url}/hero`,
            beforeSend: function (request) {
                request.setRequestHeader("Accept", 'application/json');
                request.setRequestHeader("'Content-Type'", 'application/json');
                request.setRequestHeader("Authorization", `Bearer ${sessionStorage.getItem('token')}`);
            },
            dataType: "json",
            encode: true,
            success: function (response) {
                if (response.data && response.data.length > 0) {
                    $.each(response.data, function (index, element) {
                        $("#hero__list").append(
                            `<li>
                                    <a class="info hero__info" href="javascript:;" data-kind='${JSON.stringify(element)}'>
                                        <div class="quick-links-icon">
                                            <span class="icon time-circle" aria-hidden="true"></span>
                                        </div>
                                        <div class="quick-links-text">
                                            <span class="quick-links__title">${element.name}</span>
                                            <span class="quick-links__subtitle">${element.max_health_point}</span>
                                        </div>
                                    </a>
                                </li>`
                        );
                    });
                }
                console.log(response);
            },
            error: function (xhr) {
                alert('error');
                redirectToLogin();
            }
        }).done(function (data) {
            console.log(data);
        });

        $('body').on('click', '.hero__info', function (element) {
            let kind = JSON.parse(element.currentTarget.dataset.kind);

            $.each(kind, function(attribute, value) {
                let element = $(`.kind__attribute[data-name=${attribute}]`);

                if(element && element.length > 0){
                    switch (element.prop("tagName")) {
                        case "INPUT":
                            element.val(value);
                            break;
                        default:
                            element.text(value);
                    }

                }
            })
            console.log('ckiced');
        })
    })
</script>
