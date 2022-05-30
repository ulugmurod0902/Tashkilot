@extends('layouts.app')
@section('content')
<h1 class="text-center p-3">Tashkilot malumotlarini o'zgartirish</h1>

<div class="row">
    <div class="col-md-6">
        <form method="post" action="{{ route('companies.update',['company' => $company->id]) }}">
            @method('PUT')
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
               @include('companies.form')

                <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>
    </div>
</div>


    @endsection()
