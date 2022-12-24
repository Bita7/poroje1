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
                <div class="card-header"> تنظیمات بخش خانه </div>

                <div class="card-body">
                <table id="customers">
            <tr>
                <th>عنوان</th>
                <th>قیمت</th>
                
                <th>عکس</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            @foreach ($home as $item)
                <tr>
                    
                    <td>{{$item->title}}</td>
                    <td> {{$item->price}}</td>
                    <td><img src="{{ asset('admin/images/home/'.$item->image)}}"width="80" alt=""></td>
                    <td><a href="{{ route ('home.edit' ,['id' => $item->id]) }}"> ویرایش  </a></td>
                    <td>
                        <a href="" onclick="destroyUser(event,{{$item->id}})">حذف</a>
                        <form action="{{route('home.destroy',$item->id)}}" id="userdelete" method="POST" >
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @endforeach
 
  
            </table>
<a href="{{ route('home.create')}}" class="btn btn-success px-4 mt-3">تنظیم بخش خانه</a>


                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        function destroyUser(event,id){
            event.preventDefault();
            document.querySelector('#userdelete').submit();
        }
    </script>

@endsection
