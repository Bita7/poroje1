@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class ="card-header">
                    تنظیمات صفحه اصلی
                </div>
                <div class="card-body">
                    <ul>
                    <li><a href="{{ route('home')}}">داشبورد</a></li>

                        <li><a href="{{ route('home.index')}}">تنظیمات خانه</a></li>
                        <li><a href="">تنظیمات مهارت ها</a></li>
                        <li><a href="">دروس</a></li>

                    </ul>
                </div>
            </div>
        

        


        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">سلام خوش اومدی</div>

                <div class="card-body">
                    شما میتونید از بخش سمت راست تنظیمات وب سایت رو تغیر بدین
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
