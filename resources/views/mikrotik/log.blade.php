@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-0 text-gray-800">Log </h1>
        <p class="mb-4">menampilkan semua log aktivitas yang ada diperangkat.</p>

        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Log Aktivitas</h6>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col" width="10">ID</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i =  ($data->currentpage()-1)* $data->perpage(); @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item['time'] }}</td>
                                        <td>{{ $item['topics'] }}</td>
                                        <td>{{ $item['message'] }}</td>
                                    </tr>

                                    @php $i++  @endphp
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
