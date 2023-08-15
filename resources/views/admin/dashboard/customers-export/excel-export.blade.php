@extends('admin.dashboard.base')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('loadAllBasesCustomers') }}" method="POST">
                        @csrf
                        <button class="btn btn-lg btn-primary w-100" type="submit">Загрузить всех клиентов из базы</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('loadAllFitnessCustomers') }}" method="POST">
                        @csrf
                        <button class="btn btn-lg btn-primary w-100" type="submit">Загрузить всех клиентов из фитнеса</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6  mt-5">
                    <form action="{{ route('loadSpecificBasesCustomers') }}" method="POST">
                        @csrf
                        <select class="form-control" name="supplierBaseId" required>
                            <option value="">Выберите базу поставщиков</option>
                            @foreach($supplierBases as $supplierBase)
                                <option value="{{$supplierBase->id}}">
                                    {{$supplierBase->name}}
                                </option>
                            @endforeach
                        </select>
                        <button class="btn btn-lg btn-primary mt-3 w-100" type="submit">Загрузить определенных клиентов из
                            базы
                        </button>
                    </form>
                </div>
                <div class="col-md-6 mt-5">
                    <form action="{{ route('loadSpecificFitnessCustomers') }}" method="POST">
                        @csrf
                        <select class="form-control" name="trainingLocationId" required>
                            <option value="">Выберите место тренировок</option>
                            @foreach($trainingLocations as $trainingLocation)
                                <option value="{{$trainingLocation->id}}">
                                    {{$trainingLocation->name}}
                                </option>
                            @endforeach
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
