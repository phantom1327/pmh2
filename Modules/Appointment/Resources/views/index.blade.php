@extends('home::layouts.master')
@section('title','Fill Appointment Form')
@section('css')
<link href="{{ Module::asset('appointment:css/form.css') }}" rel="stylesheet">
@endsection

@section('content')
<section style="position:relative;height: auto;margin:50px">
<div style="width: 100%;height: 100%;background-image: url('coronabg.jpg');background-repeat: round;position: relative;display:flex;justify-content:center">
    <div class="formcontainer">
        <div style="text-align: center;font-size:xx-large;font-family: 'Poppins';font-weight:800;margin-top:35px">Appointment Form</div>
        <form style="display: flex;" method="post" action=" {{ route('addappointment') }} " id="addappointment">
        @csrf
            <div class="formhalf">
                <div class="inputarea">
                    <Label>First Name</Label>
                    <input type="text" name="fname">
                    @error('fname')
                        <div style="color:red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="inputarea">
                    <Label>Last Name</Label>
                    <input type="text" name="lname">
                    @error('lname')
                        <div style="color:red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="inputarea">
                    <Label>Email</Label>
                    <input type="email" name="email">
                    @error('email')
                        <div style="color:red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="inputarea">
                    <Label>Phone Number</Label>
                    <input type="tel" name="phone">
                    @error('phone')
                        <div style="color:red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="formhalf">
                <div class="inputarea">
                    <Label>Date and Time</Label>
                    <input type="datetime-local" name="time">
                    @error('time')
                        <div style="color:red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="inputarea">
                    <Label>Address</Label>
                    <input type="text" name="address">
                    @error('address')
                        <div style="color:red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="inputarea">
                <Label>Gender</Label>
                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="cash" checked="" value="male">
                                            <label for="cash">Male</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="cheque" value="female">
                                            <label for="cheque">Female</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" id="demand" value="other">
                                            <label for="demand">Other</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>



                </div>
                <button class="proceed" type="submit" form="addappointment">PROCEED</button>
            </div>

        </form>
    </div>
</div>
    </section>
@endsection
