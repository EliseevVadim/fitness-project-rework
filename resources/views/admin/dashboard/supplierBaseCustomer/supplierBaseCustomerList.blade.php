@extends('admin.dashboard.base')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><i class="fa fa-align-justify"></i>Покупатели баз</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Название базы</th>
                                    <th>Дата покупки</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($customers)
                                    @foreach($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->email}}</td>
                                            <td>{{ $customer->supplierBase->name}}</td>
                                            <td>{{ $customer->created_at}}</td>
                                        </tr>
                                    @endforeach
                                @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('javascript')

@endsection
