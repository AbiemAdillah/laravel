@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat Datang</div>

                @if (Auth::guest())
                <div class="panel-body">
                    Silahkan login Untuk Melihat Katalog.
                    <ul>
                        <li>Admin: admin@gmail.com | secret</li>
                        <li>Customer: customer@gmail.com | secret</li>
                    </ul>
                </div>
                @else
                <div class="panel-body">
                    Kamu Telah Masuk.
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
