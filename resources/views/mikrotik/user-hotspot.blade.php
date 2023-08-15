@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-0 text-gray-800">Akun Hotspot</h1>
        <p class="mb-4">Data Akun Hotspot.</p>

        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Manajemen Akun Hotspot</h6>
                    </div>
                    <div class="card-body table-responsive">
                        <a class="btn btn-primary" href="{{ url('mikrotik/hotspot_user_add') }}">Tambah </a>
                        <hr>
                        <table class="table
                            table-striped  " id="datatables">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Server</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Mac</th>
                                    <th scope="col">Profil</th>
                                    <th scope="col">Komentar</th>
                                    <th scope="col">###</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i =  ($data->currentpage()-1) * $data->perpage(); @endphp
                                @foreach ($data as $user)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td> {{ $user['server'] ?? '' }} </td>
                                        <td> {{ $user['name'] }} </td>
                                        <td> {{ $user['password'] ?? '' }} </td>
                                        <td> {{ $user['mac-address'] ?? '' }} </td>
                                        <td> {{ $user['profile'] ?? '' }} </td>
                                        <td> {{ $user['comment'] ?? '' }} </td>
                                        <td></td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>

                        <center class="mt-5">
                            {{ $data->links('layouts.paginator') }}
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
