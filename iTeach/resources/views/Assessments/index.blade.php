@extends('layouts.master')

@section('content')
<h1 class="mb-1 text-gray-800 p-4">My Assessments</h1>
<a class="" href="{{route('assessments.create')}}" role="button"><i class="fas fa-plus-circle " style="font-size: 3.2rem;transform:translate(140vh, -2vh); color:#8F28FE"></i></a>

@if (count($years)>0)
    @foreach ($years as $year)
        <a href="{{-- {{ url() }} --}}">{{$year->years}}</a>
    @endforeach
@endif
@if (count($assessments) > 0)
<table class="table table-bordered" style="background-color: #fff; box ">
    <thead style="pointer-events: none">
        <tr>
            <th class="h5 mb-0 font-weight-bold text-gray-800">Assessments</th>
        </tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Edit Assessment</th>
            <th scope="col">Delete Assessment</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($assessments as $assessment)
            <tr>
                <td scope="row">{{ $assessment->id }}</td>
                <td scope="row">{{ $assessment->name }}</td>


                <td scope="row"><a href="{{ url("/assessments/{$assessment->id}/edit") }}"
                        class="btn btn-primary btn-sm">Edit</a></td>

                <td scope="row">
                    <form method="POST" action="{{ url('/assessments', [$assessment->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
    </tbody>
@endforeach
</table>
@endif




@endsection

