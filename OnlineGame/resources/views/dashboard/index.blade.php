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
                            <a href="{{route('heroes.create')}}" class="btn-primary btn" style="margin: 20px 0"
                               type="submit">Create Hero</a>
                            <div class="media-sidebar">
                                <ul id="hero__list" class="quick-links">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="users-table">
                            <table id="fightsTable">
                                <thead>
                                <tr class="users-table-info">
                                    <th>Host</th>
                                    <th>Guest</th>
                                    <th>Fought At</th>
                                    <th>Winner</th>
                                </tr>
                                </thead>
                                <tbody>
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

        var current_hero = null;

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
                        current_hero = response.data[0].id;

                        $.each(response.data, function (index, element) {
                            $("#hero__list").append(
                                `<li>
                                    <a class="info hero__info" href="javascript:;" onclick="getFightsFromHeroId(${element.id})" data-kind='${JSON.stringify(element)}'
                                        <div class="quick-links-icon">
                                            <span class="icon time-circle" aria-hidden="true"></span>
                                        </div>
                                        <div class="quick-links-text">
                                            <span class="quick-links__title">${element.id}. ${element.name}</span>
                                            <span class="quick-links__subtitle">Hero</span>
                                        </div>
                                    </a>
                                    <a href="${base_url}/heroes/${element.id}" class="btn btn-primary">Show History</a>
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
                                    <a href="javascript:;" onclick="fight(${element.id})" class="btn btn-warning">Fight Me!</a>
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

        function getFightsFromHeroId(id){
            current_hero = id;

            $.ajax({
                type: "GET",
                url: `${base_api_url}/fights/`,
                beforeSend: function (request) {
                    request.setRequestHeader("Accept", 'application/json');
                    request.setRequestHeader("'Content-Type'", 'application/json');
                    request.setRequestHeader("Authorization", `Bearer ${sessionStorage.getItem('token')}`);

                    $("#fightsTable tbody").empty();
                },
                data: {
                    hero_id: id
                },
                dataType: "json",
                encode: true,
                success: function (response) {
                    if (response.data && response.data.length > 0) {
                        $.each(response.data, function (index, fight) {
                            $("#fightsTable tbody").append(
                                `<tr>
                                    <td>${fight.host.name}</td>
                                    <td>${fight.guest.name}</td>
                                    <td>${fight.fought_at}</td><!-- ToDo: if fought at is null then show a button to accept or not the invitation for fighting -->
                                    <td>${fight.winner ? fight.winner.name : ""}</td>
                                </tr>`
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
        }

        function fight(guest_id){

            $.ajax({
                type: "POST",
                url: base_api_url + "/fights",
                beforeSend: function (request) {
                    request.setRequestHeader("Accept", 'application/json');
                    request.setRequestHeader("'Content-Type'", 'application/json');
                    request.setRequestHeader("Authorization", `Bearer ${sessionStorage.getItem('token')}`);

                    $('.error').hide();
                    $('.error').siblings('input').removeClass('is-invalid');
                },
                data: {
                    host_id: current_hero,
                    guest_id: guest_id
                },
                dataType: "json",
                encode: true,
                success: function (data) {
                    console.log(data);
                    alert('invitation for fight has been sent!')
                    window.location = `${base_url}/dashboard`
                },
                error: function (xhr) {
                    alert('something went wrong');
                }
            }).done(function (data) {
                console.log(data);
            });

        }
    </script>
@endsection
