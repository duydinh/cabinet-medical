@extends('agenda.layout')
@section('content')

<!-- Output correct data for checking -->
<div class="row jumbotron text-center">
    <h3> You chose {{ $package_name }} </h3>
    <h3> To be conducted on </h3>
    <h3> {{ $dateFormat }} </h3>

</div>
<br><br><br>
<!-- <div class="col-md-6 center-block" style="float:none;"> -->
<div class="row col-md-6 center-block" style="float:none;">



    {!! Form::open(array('action' => 'Agenda\BookingController@anyConfirm', 'class' => 'form-horizontal', 'data-abide'=>true)) !!}
    {!! Form::hidden('pid', $pid) !!}

    <fieldset>
        <legend>Patient Information</legend>

        <!-- First Name Input -->
        <div class="form-group">
            <label for="fname" class="col-lg-2 control-label">First Name</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="fname" id="fname" placeholder="">
            </div>
        </div>

        <!-- Last Name Input -->
        <div class="form-group">
            <label for="lname" class="col-lg-2 control-label">Last Name</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="lname" id="lname" placeholder="">
            </div>
        </div>

        <!-- Contact Number -->
        <div class="form-group">
            <label for="number" class="col-lg-2 control-label">Contact Number</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="number" id="number" placeholder="">
            </div>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email" class="col-lg-2 control-label">E-Mail</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="email" id="email" placeholder="">
            </div>
        </div>

<!--        <div class="checkbox text-center">
            <label>
                <input id="newsletterBox" name="newsletterBox" type="checkbox" checked> YES, I want to receive newsletters with this email</input>
            </label>
        </div>-->

        <div class="form-group">
            <span class="col-lg-3"></span>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </fieldset>
    {!! Form::close() !!} 
</div>



@endsection
