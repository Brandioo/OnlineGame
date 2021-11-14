@extends('layouts.panel')
@section('content')
    <!-- ! Main -->
    <main class="main" id="skip-target">
        <div class="container">
            <h2 class="main-title">Media Library</h2>
            <div class="media-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <a href="{{route('heroes.create')}}" class="btn-primary btn" style="margin: 20px 0"
                               type="submit">Create Hero's</a>
                            <div class="media-sidebar">
                                <ul id="hero__list" class="quick-links">
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="alert alert-danger error">
                                <p class="alert__main"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="users-table table-wrapper">
                            <table class="library-table">
                                <thead>
                                <tr class="users-table-info">
                                    <th>Name</th>
                                    <th>Last modified</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="library-table-name">
                              <span class="info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-folder" aria-hidden="true"><path
                                        d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                              </span>
                                        </div>
                                    </td>
                                    <td>
                            <span class="p-relative">
                              <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                <div class="sr-only">More info</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle
                                        cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle
                                        cx="5"
                                        cy="12"
                                        r="1"></circle></svg>
                              </button>
                              <ul class="users-item-dropdown dropdown">
                                <li><a href="##">Edit</a></li>
                                <li><a href="##">Quick edit</a></li>
                                <li><a href="##">Trash</a></li>
                              </ul>
                            </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
                    redirectToLogin();
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
                                            <span class="quick-links__title">${element.name}</span>
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
                    redirectToLogin();
                }
            }).done(function (data) {
                console.log(data);
            });
        })
    </script>
@endsection
