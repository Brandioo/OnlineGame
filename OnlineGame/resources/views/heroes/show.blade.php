@extends('layouts.panel')
@section('content')
    <!-- ! Main -->
    <main class="main" id="skip-target">
        <div class="container">
            <h2 class="main-title">Current Hero's fights</h2>
            <div class="media-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="users-table table-wrapper">
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
                url: `${base_api_url}/fights/`,
                beforeSend: function (request) {
                    request.setRequestHeader("Accept", 'application/json');
                    request.setRequestHeader("'Content-Type'", 'application/json');
                    request.setRequestHeader("Authorization", `Bearer ${sessionStorage.getItem('token')}`);
                },
                data: {
                    hero_id: '{{ $id }}'
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
        })
    </script>
@endsection
