@extends('admin.dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>{{ __('Users') }}</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-striped">
                                <thead>
                                <tr>
                                    <th>ФИО</th>
                                    <th>E-mail</th>
                                    <th>Возраст</th>
                                    <th>Образ жизни</th>
                                    <th>Меню</th>
                                    <th>Локация</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($accounts)
                                    @foreach($accounts as $account)
                                        <tr>
                                            <td>{{$account->user->name}}</td>
                                            <td>{{$account->user->email}}</td>
                                            <td>{{$account->age}}</td>
                                            <td>
                                                {{$account->lifeStyle->name}}
                                            </td>
                                            <td>{{$account->menuCalories->name}}</td>
                                            <td>{{$account->trainingLocation->name}}</td>
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

