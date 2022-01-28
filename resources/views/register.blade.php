<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    {{-- render components and passing arguments --}}
    <x-navbar />
    <form action="{{ $url }}" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">{{ $title }}</h3>

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $register->name }}" required />
            </div>
            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                {{-- <x-input type="text" name="name" label="Name*" placeholder="Enter Your name" /> --}}


                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $register->email }}" required />
                </div>
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    {{-- <x-input type="email" name="email" label="Email*" placeholder="Enter Your email" /> --}}

                    <x-input type="number" name="contact" label="Contact*" placeholder="Enter Your Contact Number" />
                    {{-- value="{{ $register->contact }}" /> --}}
                    <span class="text-danger">@error('contact'){{ $message }}@enderror</span>

                        <x-input type="text" name="address" label="Address*" placeholder="Enter Your Address" />
                        {{-- value="{{ $register->address }}" /> --}}
                        <span class="text-danger">@error('address'){{ $message }}@enderror</span>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Qualification</label>
                                <input type="text" name="qualification" placeholder="Enter Your Email" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $register->qualification }}"
                                    required />
                            </div>
                            {{-- <x-input type=" text" name="qualification" label="Qualification*" placeholder="Enter Your Qualification" /> --}}
                            <span class="text-danger">@error('qualification'){{ $message }}@enderror</span>

                                <x-input type="date" name="dob" label="Date of Birth*" placeholder="Enter Your Date of Birth" />
                                {{-- value="{{ $register->dob }}" /> --}}
                                <span class="text-danger">@error('dob'){{ $message }}@enderror</span>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gender</label>
                                        <input type="text" name="gender" placeholder="Enter Your Gender ('Male, 'Female', 'Other')"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        {{-- value="{{ $register->gender }}" /> --}}
                                    </div>
                                    <button type=" submit" name="submit" class="btn btn-primary m-auto"
                                        style="width:50%;">{{ $btn_title }}</button>
                                </div>
                            </form>
                        </body>

                        </html>
