@extends('admin.dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6">
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
                    <div class="card">
                        <div class="card-header"><strong>Изменить содержимое программы</strong></div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{route('editProgramContent', ['id' => $programContent->id])}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Название</label>
                                    <div class="col-md-9">
                                        <input required value="{{$programContent->name}}" name="name" class="form-control" type="text" placeholder="Название ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Место тренировок</label>
                                    <div class="col-md-9">
                                        <select name="training_location_id" class="form-control">
                                            @foreach($trainingLocations as $location)
                                                <option value="{{$location->id}}"
                                                    @if($location->id === $programContent->training_location_id)
                                                        selected
                                                    @endif>
                                                    {{$location->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Калории</label>
                                    <div class="col-md-9">
                                        <select name="menu_calories_id" class="form-control">
                                            @foreach($menuCalories as $calorie)
                                                <option value="{{$calorie->id}}"
                                                    @if($calorie->id === $programContent->menu_calories_id)
                                                        selected
                                                    @endif>
                                                    {{$calorie->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Ссылка на google drive</label>
                                    <div class="col-md-9">
                                        <input required value="{{$programContent->google_drive_link}}" name="google_drive_link" class="form-control" type="text" placeholder="Ссылка на google drive">
                                    </div>
                                </div>
                                <div class="card-footer card-footer-edit">
                                    <button class="btn btn-sm btn-primary" type="submit"> Сохранить</button>
                                    <a class="btn btn-sm btn-danger" href="/admin/program-contents"> Назад</a>
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
