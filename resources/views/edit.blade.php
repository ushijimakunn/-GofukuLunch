@extends('layout')

@section('content')
    <div class="m-8">
        <h1 class="text-3xl font-bold pb-5">{{ $shop->shop_name }}の編集</h1>
        {{ Form::model($shop, ['route' => ['shop.update', $shop->id]]) }}
            <div class="">
                {{ Form::label('shop_name', '店名:', ) }}
                {{ Form::text('shop_name', null, ['class' => 'input input-bordered max-w-xs rounded-full'])}}
            </div>
            <div class="">
                {{ Form::label('shop_address', '住所:') }}
                {{ Form::text('shop_address', null, ['class' => 'input input-bordered max-w-xs rounded-full']) }}
            </div>
            <div class="">
                {{ Form::label('category_id', 'カテゴリ:') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'select select-bordered rounded-full']) }}
            </div>
            <div class="">
                {{ Form::label('distance_from_company', '会社からの距離:') }}
                {{ Form::number('distance_from_company', null, ['class' => 'input input-bordered max-w-xs rounded-full']) }}
            </div>
            <div class="">
                {{ Form::submit('更新する', ['class' => 'btn']) }}
            </div>
        {{ Form::close() }}

        <div>
            <a href="{{ route('shop.list') }}" class="btn"> 一覧に戻る </a>
        </div>
    </div>
@endsection
