@extends('master')
@section('title','Add New Category')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">المادة</th>
            <th scope="col">العلامة</th>
            <th scope="col">تقدير</th>
        </tr>
        </thead>
        <tbody>
       @foreach($array as $key => $value)

           <tr>
               <th scope="col">#</th>
               <th scope="col">{{$key}}</th>
               <th scope="col">{{$value}}</th>
               <th scope="col">
                   @if($key=="رياضيات")
                       {{($value>=100)?'ناجح':"راسب"}}
                   @else
                       {{($value>=50)?'ناجح':"راسب"}}
                   @endif
               </th>
           </tr>
       @endforeach

        </tbody>
    </table>
    <h3>المعدل</h3>
    <h1>{{round($rate,2)}}%</h1>
@endsection
