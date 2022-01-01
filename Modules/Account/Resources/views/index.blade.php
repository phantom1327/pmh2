@extends('home::layouts.master')
@section('title','Fill Appointment Form')
@section('css')
<link href="{{ Module::asset('account:css/form.css') }}" rel="stylesheet">
@endsection

@section('content')
<section style="position:relative;height: auto;margin:30px 0px">
<div style="display:flex;width:100%;justify-content:flex-end;margin:20px -20px;"><form method="post" action="{{ route('logout') }}">@csrf<button class="btn" style="background:red;color:white;" onclick="event.preventDefault();this.closest('form').submit();">Logout</button></form><button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                </button></div>
<div style="width: 100%;height: 100%;position: relative;display:flex;justify-content:center;flex-direction:column">
    <div class="formcontainer">
        <div style="text-align: center;font-size:xx-large;font-family: 'Poppins';font-weight:800;margin-top:35px">Welcome {{ $user->name }}</div>
        <form style="display: flex;flex-direction:column" method="post" action=" {{ route('changename') }} " id="changename">
        @csrf
            <div class="formhalf">
               <div class="input"><input type="text" value="{{ $user->name }}" name="name"></div>
                <div class="button"><button class="proceed" id="cp" type="submit" form="changename">Change Name</button></div>
            </div>

        </form>
    </div>

    <div class="formcontainer">
        <div style="text-align: center;font-size:xx-large;font-family: 'Poppins';font-weight:800;margin-top:35px">Change Password</div>
        <form style="display: flex;flex-direction:column;align-items:center" method="post" action=" {{ route('password.change') }} " id="resetpass">
        @csrf
            <div class="formhalf2">
               <input type="password" name="old" placeholder="Old Password">
               @error('old')
                        <div style="color:red">{{ $message }}</div>
                @enderror
               <input type="password" name="password" placeholder="New Password">
               @error('new')
                        <div style="color:red">{{ $message }}</div>
                @enderror
               <input type="password" name="confirmpassword" placeholder="Confirm New Password">
               @error('newconfirm')
                        <div style="color:red">{{ $message }}</div>
                @enderror
                <button class="proceed" id="cp2" type="submit" form="resetpass">Change Password</button>
            </div>

        </form>
    </div>

</div>
    </section>
@endsection
