@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-0 text-gray-800">Profil Hotspot </h1>
        <p class="mb-4">menampilkan semua profil hotspot yang ada diperangkat.</p>

        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Profil Hotspot</h6>
                    </div>
                    <div class="card-body table-responsive">
                        <a class="btn btn-primary" href="{{ url('mikrotik/hotspot_server_add') }}">Tambah </a>
                        <hr>
                        <table class="table table-striped table-sm" id="datatables" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col" width="10">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">idle-timeout</th>
                                    <th scope="col">keepalive-timeout</th>
                                    <th scope="col">shared-users</th>
                                    <th scope="col">rate-limit</th>
                                    <th scope="col">####</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i =  ($data->currentpage()-1)* $data->perpage(); @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item['name'] ?? '' }}</td>
                                        <td>{{ $item['idle-timeout'] ?? '' }}</td>
                                        <td>{{ $item['keepalive-timeout'] ?? '' }}</td>
                                        <td>{{ $item['shared-users'] ?? '' }}</td>
                                        <td>{{ $item['rate-limit'] ?? '' }}</td>
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
