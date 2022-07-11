@extends('admin.dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><strong>Тренировка {{ $training->name }}</strong></div>
                        @isset($errors)
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        @endisset
                        <div class="card-body">
                            <form class="form-horizontal" action="{{route('editTraining',['id'=>$training->id])}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Название</label>
                                    <div class="col-md-9">
                                        <input value="{{ $training->name }}" name="name" class="form-control" placeholder="Название " type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Описание</label>
                                    <div class="col-md-9">
                                        <input value="{{ $training->description }}" name="description" class="form-control" placeholder="Описание " type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Уровень</label>
                                    <div class="col-md-9">
                                        <input value="{{ $training->level }}" required name="level" class="form-control" placeholder="Уровень " type="number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Цена</label>
                                    <div class="col-md-9">
                                        <input value="{{ $training->training_price }}" name="training_price" class="form-control" placeholder="Цена" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Тренировка для</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Id в Stripe</label>
                                    <div class="col-md-9">
                                        <input value="{{ $training->stripe_id }}" required name="stripe_id" class="form-control" placeholder="Id в Stripe " type="text">
                                    </div>
                                </div>
                                <div class="card-footer card-footer-edit">
                                    <button class="btn btn-sm btn-primary" type="submit"> Сохранить</button>
                                    <a class="btn btn-sm btn-danger" href="/admin/workout"> Назад</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('javascript')

@endsection
