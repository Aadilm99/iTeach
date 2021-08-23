@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card border-bottom-primary shadow h-100 py-40">
            <h1 class="mb-1 text-gray-800 p-4" style="transform: translateY(-16vh)">Teacher Information</h1>
            {{-- <label> Teacher Image:
                <img src="{{ asset('profile-pic/' . $students->profile_image) }}" width="200px" height="200px"/>
            </label> --}}
            <div class="card-body">
                <label> Teacher Name:
                    {{$teachers->user->name}}
                </label>
                <br>

                <label> Teacher Email:
                    {{$teachers->user->email}}
                </label>
                <br>


                <label> Phone:
                    {{$teachers->phone}}
                </label>
                <br>

                <label> Gender:
                    {{$teachers->gender}}
                </label>
                <br>

                <label> Date of Birth:
                    {{\Carbon\Carbon::parse($teachers->dateOfbirth)->format('d/m/y')}}
                </label>
                <br>


                <label> Current Address:
                    {{$teachers->current_address}}
                </label>
                <br>


                <label> Permanent Address:
                    {{$teachers->permanent_address}}

                </label>
                <br>

                <div class="row">
                    <a href="{{url("/teachers/{$teachers->id}/edit")}}"
                        class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-3 rounded"
                        style="text-decoration: none" type="submit">Edit Teacher</a>
                    <form action="{{route('teachers.destroy',$teachers->id)}}" method="POST"
                        onsubmit="return confirm('Do you want to delete ?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" style="display: inline; margin-left:3px" type="submit">Delete Teacher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

