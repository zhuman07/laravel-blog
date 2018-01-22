@extends('admin.layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Admin panel</h1>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Категорий 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Материалов 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Посетителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Сегодня 0</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="" class="btn btn-block btn-default">Создать категорию</a>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item-heading">Категория первая</h4>
                    <p class="list-group-item-text">
                        Колличество категории
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="" class="btn btn-block btn-default">Создать материал</a>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item-heading">Первый материал</h4>
                    <p class="list-group-item-text">
                        Колличество материалов
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection