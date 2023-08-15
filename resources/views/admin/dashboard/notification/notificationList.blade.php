@extends('admin.dashboard.base')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('loadAllBasesCustomers') }}" method="POST">
                        @csrf
                        <input type="hidden" name="supplierBaseId" value="all">
                        <button class="btn btn-lg btn-primary w-100" type="submit">Загрузить всех клиентов из базы</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('loadAllFitnessCustomers') }}" method="POST">
                        @csrf
                        <input type="hidden" name="trainingLocationId" value="all">
                        <button class="btn btn-lg btn-primary w-100" type="submit">Загрузить всех клиентов из фитнеса</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6  mt-5">
                    <form action="{{ route('loadSpecificBasesCustomers') }}" method="POST">
                        @csrf
                        <select class="form-control" name="supplierBaseId">
                            <option value="">Выберите базу поставщиков</option>
                            <option value="1">База 1</option>
                            <option value="2">База 2</option>
                        </select>
                        <button class="btn btn-lg btn-primary mt-3 w-100" type="submit">Загрузить определенных клиентов из
                            базы
                        </button>
                    </form>
                </div>
                <div class="col-md-6 mt-5">
                    <form action="{{ route('loadSpecificFitnessCustomers') }}" method="POST">
                        @csrf
                        <select class="form-control" name="trainingLocationId">
                            <option value="">Выберите место тренировок</option>
                            <option value="1">Дом</option>
                            <option value="2">Зал</option>
                            <option value="3">Дом + Зал</option>
                        </select>
                        <button class="btn btn-lg btn-primary mt-3 w-100" type="submit">Загрузить определенных клиентов из
                            фитнеса
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('javascript')

@endsection
