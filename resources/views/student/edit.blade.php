@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Student Data</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/student/edit/{{ $student->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->first_name }}">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control"  name="last_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->last_name }}">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <select class="form-control"  name="gender">
                        <option value="M" @if($student->gender == 'M') selected @endif>Male</option>
                        <option value="F" @if($student->gender == 'F') selected @endif>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="validationTextarea">Address</label>
                    <textarea class="form-control <!--is-invalid -->" id="validationTextarea"  name="address" required>{{ $student->address }}</textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <select name="city" class="form-control">
                        <option value="Jakarta" @if($student->city == 'Jakarta') selected @endif>Jakarta</option>
                        <option value="Medan" @if($student->city == 'Medan') selected @endif>Medan</option>
                        <option value="Medan" @if($student->city == 'Tangerang') selected @endif>Tangerang</option>
                        <option value="Pontianak" @if($student->city == 'Pontianak') selected @endif>Pontianak</option>
                        <option value="Surabaya" @if($student->city == 'Surabaya') selected @endif>Surabaya</option>
                    </select>
                </div>
                <!-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="submit" class="btn btn-warning">Edit</button>
            </form>
        </div>
    </div>
    </div>
@endsection