<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                    <br>
                    <div class="row mt-6">
                        <div class="col text-center">
                            <h5 class="font-weight-normal mt-2">POSITIF</h5>
                            <h3 class="text-xxl mb-1 social-content  number-font">{{ $sembuh }}</h3>
                            <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal mt-2">SEMBUH</h5>
                            <h3 class="text-xxl mb-1 social-content danger number-font">{{ $sembuh }}</h3>
                            <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal mt-2">MENINGGAL</h5>
                            <h3 class="text-xxl mb-1 social-content  number-font">{{ $meninggal }}</h3>
                            <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

                        </div>
                        <div class="chart-wrapper">
                            <canvas id="deals" class="chart-dropshadow-success chartjs-render-monitor" hidden=""
                                height="85" width="0" style="display: block; width: 0px; height: 85px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kasus Indonesia</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Provinsi</th>
                                    <th>Kode Provinsi</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($provinsi as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><a href="/provinsi/{{ $data->id }}">{{ $data->nama_provinsi }}</a>
                                        </td>
                                        <td>{{ $data->kode_provinsi }}</td>
                                        <td>{{ $data->positif }}</td>
                                        <td>{{ $data->sembuh }}</td>
                                        <td>{{ $data->meninggal }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kasus Global</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="global">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Negara</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($global as $data => $val)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $val['attributes']['Country_Region'] }}</td>
                                        <td>{{ $val['attributes']['Confirmed'] }}</td>
                                        <td>{{ $val['attributes']['Recovered'] }}</td>
                                        <td>{{ $val['attributes']['Deaths'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
