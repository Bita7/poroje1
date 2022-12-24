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
                <div class="card-header"> ساخت بخش تنظیمات خانه </div>

                <div class="card-body">
                    <form action="{{ route('home.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-3">
                            <lable for="">عنوان</lable>
                            <input type="text" class="form-control" name="title">
                        </div>
 
                        <div class="form-group mt-3">
                            <lable for="">قیمت</lable>
                            <input type="text" class="form-control" name="price">
                        <div class="form-group mt-3">
                            <lable for="">عکس</lable>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group mt-3">
                           
                            <button type="submit " class="btn btn-success px-5" >ذخیره</button>
                        </div>
                    </form>

   


                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
