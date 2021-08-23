@extends('layouts.app')

@section('content')

<a id="more" class="btn btn-primary" href="#" onclick="$('.student_panel').slideToggle(function(){$('#more').html($('.student_panel').is(':visible')?'Close':'Add a student');});">Add a student</a>

<div class="student_panel" style="display:none; transform:translateY(25px)">
    <div >
        @if(count($students)>0)
        @foreach ($students as $student)
        <ul>
            <li><h1>{{$student->user->name}}</h1></li>
        </ul>
        @endforeach
    @endif
    </div>

</div>

<script>
function openPanel() {
  var x = document.getElementById("student_panel");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
    <script>
@endsection
