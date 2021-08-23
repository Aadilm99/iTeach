@extends('layouts.master')

@section('content')
    <h1 class="mb-1 text-gray-800 p-4">Create Assessments</h1>

    <br>
    <br>
    <div class="container">
<form method="POST" action="{{ url('/assessments') }}" enctype="multipart/form-data">
  @csrf

    <div class="form-inline">
        <label class="block text-gray-700 font-bold md:text-left mb-1 md:mb-0 pr-4"
        for="formGroupExampleInput">Add Assessment</label>
        <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Add a task here..." value="{{ old('name') }}">

        @error('name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
        <button style="transform:translateX(10%)" type="submit" role="button"class="btn btn-primary">Create</button>
    </div>

    <div class="dropdown">
        <label class="block text-gray-700 font-bold md:text-left mb-1 md:mb-0 pr-4"
            for="formGroupExampleInput">Year Group</label>
      <select type="years_id" class="form-control @error('years_id') is-invalid @enderror" name="years_id" required autocomplete="years_id">
          @if(count($years) > 0)
          @foreach($years as $year)
              <option class="" value="{{ $year->id }}">{{$year->years}}</option>
          @endforeach
          @endif
      </select>

      @error('years_id')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div>

</form>
</div>
@endsection

