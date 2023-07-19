@extends('layout')

@section('content')
    <div class="m-8 flex flex-col">
        <h1 class="text-3xl font-bold pb-5">新しいお店の投稿</h1>
        {{ Form::open(['route' => 'shop.store', 'class' => 'w-full max-w-xl'] ) }}
            <div class="m-5">
                {{ Form::label('shop_name', '店名:', ) }}
                {{ Form::text('shop_name', null, ['class' => 'input input-bordered max-w-xs rounded-full'])}}
            </div>
            <div class="m-5">
                {{ Form::label('shop_address', '住所:') }}
                {{ Form::text('shop_address', null, ['class' => 'input input-bordered max-w-xs rounded-full']) }}
            </div>
            <div class="m-5">
                {{ Form::label('category_id', 'カテゴリ:') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'select select-bordered rounded-full']) }}
            </div>
            <div class="m-5">
                {{ Form::label('distance_from_company', '会社からの距離:') }}
                {{ Form::number('distance_from_company', null, ['class' => 'input input-bordered max-w-xs rounded-full']) }}
            </div>
            <div class="m-5">
                {{ Form::submit('作成する', ['class' => 'btn btn-primary']) }}
            </div>
        {{ Form::close() }}

        <div>
            <a href="{{ route('shop.list') }}" class="link m-5"> 一覧に戻る </a>
        </div>
    </div>
@endsection
