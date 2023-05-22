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
                        <div class="card-header"><strong>Создать базу</strong></div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{route('addSupplierBase')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Название</label>
                                    <div class="col-md-9">
                                        <input required name="name" class="form-control" type="text" placeholder="Название ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Тип</label>
                                    <div class="col-md-9">
                                        <select name="base_type_id" class="form-control">
                                            @foreach($supplierBaseTypes as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Цена</label>
                                    <div class="col-md-9">
                                        <input required name="price" class="form-control" type="number" placeholder="Цена ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Цена со скидкой</label>
                                    <div class="col-md-9">
                                        <input required name="discount_price" class="form-control" type="number" placeholder="Цена со скидкой ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Ссылка на содержимое</label>
                                    <div class="col-md-9">
                                        <input required name="content_link" class="form-control" type="text" placeholder="Ссылка на содержимое">
                                    </div>
                                </div>
                                <div class="card-footer card-footer-edit">
                                    <button class="btn btn-sm btn-primary" type="submit"> Сохранить</button>
                                    <a class="btn btn-sm btn-danger" href="/admin/supplier-bases"> Назад</a>
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
