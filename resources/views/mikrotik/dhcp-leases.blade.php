@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-0 text-gray-800">Monitoring Pengguna</h1>
        <p class="mb-4">LOG User Jaringan.</p>

        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">LOG User Jaringan</h6>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped " width="100%">
                            <thead>
                                <tr>
                                    <th scope="col" width="10">NO</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Mac Address</th>
                                    <th scope="col">Server</th>
                                    <th scope="col">Last Seen</th>
                                    <th scope="col">Hostname</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Dynamic</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i =  ($data->currentpage()-1)* $data->perpage(); @endphp
                                @foreach ($data as $item)
                                    {{-- {{ dd($item) }} --}}
                                    <tr>
                                        <td>{{ $i }} </td>
                                        <td>{{ $item['address'] ?? '' }} </td>
                                        <td>{{ $item['mac-address'] ?? '' }} </td>
                                        <td>{{ $item['server'] ?? '' }} </td>
                                        <td>{{ $item['last-seen'] ?? '' }} </td>
                                        <td>{{ $item['host-name'] ?? '' }} </td>
                                        <td>{{ $item['status'] ?? '' }} </td>
                                        <td>{{ $item['dynamic'] ?? '' }} </td>
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
