<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Server Hotspot </h1>
    <p class="mb-4">menampilkan semua Server yang ada diperangkat.</p>

    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Server Hotspot</h6>
                </div>
                <div class="card-body table-responsive">
                    <a class="btn btn-primary" href="{{ url('mikrotik/hotspot_server_add') }}">Tambah </a>
                    <hr>
                    <table class="table table-striped table-sm" id="datatables" width="100%">
                        <thead>
                            <tr>
                                <th scope="col" width="10">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">dns name</th>
                                <th scope="col">html directory</th>
                                <th scope="col">rate-limit</th>
                                <th scope="col">####</th>
                            </tr>
                        </thead>
                        <tbody> </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
