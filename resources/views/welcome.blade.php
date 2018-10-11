@extends('main.app')

@section('title', 'Валюты')

@section('content')
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>название валюты</th>
                    <th>цена</th>
                    <th>количество</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($stocks))
                    @foreach($stocks as $stock)
                        <tr>
                            <td>{{$stock["name"]}}</td>
                            <td>{{$stock["volume"]}}</td>
                            <td>{{$stock["price"]["amount"]}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">
                            Не удалось получить данные.
                            Пожалуйста, попробуйте позже.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
@endsection
