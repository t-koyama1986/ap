@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--<div class="card-header">Dashboard</div>-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--You are logged in!-->
                ログイン成功しました。
                使用機能を選択してください。<br>
                <a href="{{ url('/admin/admin-list') }}">ユーザーを確認</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection