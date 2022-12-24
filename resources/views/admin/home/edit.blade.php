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

                        <li><a href="{{ route('home.index')}}"> ویرایش بخش خانه</a></li>
                        <li><a href="">تنظیمات مهارت ها</a></li>
                        <li><a href="">دروس</a></li>

                    </ul>
                </div>
            </div>
        

        


        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">ویرایش بخش تنظیمات</div>

                <div class="card-body">
                    <form action="{{ route('home.update',$home->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mt-3">
                            <lable for="">عنوان</lable>
                            <input type="text" value="{{$home->title}}"class="form-control" name="title">
                        </div>
 
                        <div class="form-group mt-3">
                            <lable for="">قیمت</lable>
                            <input type="text"  value="{{$home->price}}" class="form-control" name="price">
                        </div>
                        <div class="form-group mt-3">
                            <lable for="">عکس</lable>
                            <input type="file" class="form-control" name="image">
                            <p><img src ="{{asset('admin/images/home/'.$home->image)}}" width="120" alt=""></p>

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
