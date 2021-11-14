@extends('layouts.panel')

@section('content')
    <!-- ! Main -->
    <main class="main" id="skip-target">
        <div class="container">
            <h2 class="main-title">Heroes Table</h2>
            <div class="media-content">
                <div class="row">
                    <div class="col-lg-3">
                        <label>Choose your kind</label>
                        <div class="media-sidebar">
                            <ul id="kind__list" class="quick-links">
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="alert alert-danger error" style="display:none;">
                            <p class="alert__main"></p>
                        </div>
                        <br/>
                        <form id="createHeroForm">
                            <h3 class="btn-outline-dark">Hero details</h3>
                            <input name="kind_id" type="hidden" class="kind__attribute" data-name="id" value="">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="btn btn-outline-primary" type="button">Kind Name:</span>
                                    <span class="btn btn-outline-success kind__attribute" data-name="name" type="button"></span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="btn btn-outline-primary" type="button">Strength:</span>
                                    <span class="btn btn-outline-success kind__attribute" data-name="current_strength_points" type="button"></span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="btn btn-outline-primary" type="button">Health</span>
                                    <span class="btn btn-outline-success kind__attribute" data-name="current_health_points" type="button"></span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="btn btn-outline-primary" type="button">Max Health Points</span>
                                    <span class="btn btn-outline-success kind__attribute" data-name="max_health_points" type="button"></span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="btn btn-outline-primary" type="button">Total Items Possessed</span>
                                    <span class="btn btn-outline-success kind__attribute" data-name="items_possessed" type="button"></span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="btn btn-outline-primary" type="button">Initial Balance</span>
                                    <span class="btn btn-outline-success kind__attribute" data-name="current_money" type="button"></span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="btn btn-outline-primary" type="button">Enter your personalized hero name</span>
                                    <input name="name" type="text" class="form-control" placeholder="" aria-label=""
                                           aria-describedby="basic-addon1">
                                </div>
                                <span class="error"></span>
                                <br>
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection()
@section('afterScripts')
    <script>
        isNotTokenPresent();

        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: `${base_api_url}/kinds`,
                beforeSend: function (request) {
                    request.setRequestHeader("Accept", 'application/json');
                    request.setRequestHeader("'Content-Type'", 'application/json');
                    request.setRequestHeader("Authorization", `Bearer ${sessionStorage.getItem('token')}`);
                },
                dataType: "json",
                encode: true,
                success: function (response) {
                    if(response.data && response.data.length > 0) {
                        $.each(response.data, function(index, element) {
                            $("#kind__list").append(
                                `<li>
                                    <a class="info hero__info" href="javascript:;" data-kind='${JSON.stringify(element)}'>
                                        <div class="quick-links-icon">
                                            <span class="icon time-circle" aria-hidden="true"></span>
                                        </div>
                                        <div class="quick-links-text">
                                            <span class="quick-links__title">${element.name}</span>
                                            <span class="quick-links__subtitle">Dragon ball</span>
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

            $("#createHeroForm").submit(function (event) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: base_api_url + "/heroes",
                    beforeSend: function (request) {
                        request.setRequestHeader("Accept", 'application/json');
                        request.setRequestHeader("'Content-Type'", 'application/json');
                        request.setRequestHeader("Authorization", `Bearer ${sessionStorage.getItem('token')}`);

                        $('.error').hide();
                        $('.error').siblings('input').removeClass('is-invalid');
                    },
                    data: $(event.currentTarget).serializeArray(),
                    dataType: "json",
                    encode: true,
                    success: function (data) {
                        console.log(data);
                        alert('Successfully created!');
                        window.location = `${base_url}/dashboard`
                    },
                    error: function (xhr) {

                        $('.alert.alert-danger').show();
                        $('.alert p.alert__main').text(xhr.responseJSON.message);

                        if(xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function (key, valueAsArray) {
                                $(`input[name=${key}]`).addClass('is-invalid');
                                $(`input[name=${key}]`).siblings('span.error').text(valueAsArray.join("\n")).show();
                            })
                        }
                    }
                }).done(function (data) {
                    console.log(data);
                });
            });

        })
    </script>
@endsection
