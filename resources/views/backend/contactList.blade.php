<x-app-layout>
    <style>
        .clientsDrop {
            display: none;
        }

        .showClient {
            display: inline-block !important;
            width: 65%;
        }

    </style>

    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    <div class="buttonNav">
                        <h3>Contact List</h3>

                    </div>
                    <div class="">
                        <table id="datatable2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Company Name</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact as $kye => $item)
                                    <tr>
                                        <td>{{ $kye + 1 }}</td>

                                        <td>{{ $item->fastName }} {{ $item->lastName }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->companyName }}</td>
                                        <td>{{ $item->message }}</td>
                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->


</x-app-layout>
