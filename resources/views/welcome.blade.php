@extends('layouts.app')

@section('content')
<div class="col-lg-12">

<h1 class="mt-5">Daftar Isi</h1>
<table class="table table-hover"> 
    <tbody>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>URL</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Soal No 1</td>
            <td><a href="{{url('/api/numberone')}}">{{url('/api/numberone')}}</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Soal No 2</td>
            <td><a href="{{url('/numbertwo')}}">{{url('/numbertwo')}}</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Soal No 3</td>
            <td><a href="{{url('/api/numberthree')}}">{{url('/api/numberthree')}}</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Soal No 4</td>
            <td>-</a></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Soal No 5</td>
            <td><a href="{{url('/api/numberfive')}}">{{url('/api/numberfive')}}</a></a></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Soal No 6 & 7</td>
            <td><a href="{{url('/sixseven')}}">{{url('/sixseven')}}</a></td>
        </tr>
    </tbody>

</table>

</div>
@endsection
