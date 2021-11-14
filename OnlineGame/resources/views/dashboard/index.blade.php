@extends('layouts.panel')
@section('content')
    <!-- ! Main -->
    <main class="main" id="skip-target">
        <div class="container">
            <h2 class="main-title">Media Library</h2>
            <div class="media-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div>
                            <a href="{{route('heroes.create')}}" class="btn-primary btn" style="margin: 20px 0;"
                               type="submit">Create Hero's</a>
                            <div class="media-sidebar">
                                <ul id="hero__list" class="quick-links">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="users-table">
                            <table class="library-table" style="margin: 10px 0;">
                                <thead>
                                <tr class="users-table-info">
                                    <th style="font-weight: 600; font-size: 24px;">Invitation</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div>
                            <div class="media-sidebar">
                                <ul id="oponent__list" class="quick-links">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('afterScripts')
    <script>
        isNotTokenPresent();

        $(document).ready(function () {

            $.ajax({
                type: "GET",
                url: `${base_api_url}/me`,
                beforeSend: function (request) {
                    request.setRequestHeader("Accept", 'application/json');
                    request.setRequestHeader("'Content-Type'", 'application/json');
                    request.setRequestHeader("Authorization", `Bearer ${sessionStorage.getItem('token')}`);
                },
                dataType: "json",
                encode: true,
                success: function (data) {
                    console.log(data);
                    alert('Success');
                },
                error: function (xhr) {
                    alert('error');
                    if(xhr.status == 401 || xhr.status == 403) {
                        redirectToHome();
                    }
                }
            }).done(function (data) {
                console.log(data);
            });
        })

        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: `${base_api_url}/heroes`,
                beforeSend: function (request) {
                    request.setRequestHeader("Accept", 'application/json');
                    request.setRequestHeader("'Content-Type'", 'application/json');
                    request.setRequestHeader("Authorization", `Bearer ${sessionStorage.getItem('token')}`);
                },
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
                                            <span class="quick-links__title">${element.id}. ${element.name}</span>
                                            <span class="quick-links__subtitle">Hero</span>
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
                    if(xhr.status == 401 || xhr.status == 403) {
                        redirectToHome();
                    }
                }
            }).done(function (data) {
                console.log(data);
            });
        })

        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: `${base_api_url}/opponentHero`,
                beforeSend: function (request) {
                    request.setRequestHeader("Accept", 'application/json');
                    request.setRequestHeader("'Content-Type'", 'application/json');
                    request.setRequestHeader("Authorization", `Bearer ${sessionStorage.getItem('token')}`);
                },
                success: function (response) {
                    if (response.data && response.data.length > 0) {
                        $.each(response.data, function (index, element) {
                            $("#oponent__list").append(
                                `<li>
                                    <a class="info hero__info" href="javascript:;" data-kind='${JSON.stringify(element)}'>
                                        <div class="quick-links-icon">
                                            <span class="icon time-circle" aria-hidden="true"></span>
                                        </div>
                                        <div class="quick-links-text">
                                            <span class="quick-links__title">${element.id}. ${element.name}</span>
                                            <span class="quick-links__subtitle">Hero</span>
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

                    if(xhr.status == 401 || xhr.status == 403) {
                        redirectToHome();
                    }
                }
            }).done(function (data) {
                console.log(data);
            });
        })
    </script>
@endsection
