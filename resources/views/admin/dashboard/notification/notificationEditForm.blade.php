@extends('admin.dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><strong>Редактировать уведомление</strong></div>
                        <div class="card-body">
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
                            <form class="form-horizontal" action="{{route('editNotification',['id'=>$notification->id])}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Название:</label>
                                    <div class="col-md-9">
                                        <input value="{{ $notification->name }}" name="name" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">День:</label>
                                    <div class="col-md-9">
                                        <input required class="form-control" name="day" type="number" value="{{$notification->day}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Описание:</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control" rows="3">{{ ($notification->description) }}</textarea>
                                    </div>
                                </div>
                                <div class="card-footer card-footer-edit">
                                    <button class="btn btn-sm btn-primary" type="submit"> Добавить</button>
                                    <a class="btn btn-sm btn-danger" href="/admin/notification"> Назад</a>
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
