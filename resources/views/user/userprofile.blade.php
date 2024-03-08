<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('profilecss/profile.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-li,k active ms-0" href="{{route('home')}}">Home</a>
        <a class="nav-link active ms-0" href="{{route('profile.index')}}" >Profile</a>
        <a class="nav-link" href="" >Security</a>
        <a class="nav-link" href="{{route('notification')}}">Notifications</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                @if(Auth::user()->hasMedia('media/users'))
                    <img src="{{ $user->getFirstMediaUrl('media/users') }}" alt="profile_image" class=" border-radius-lg shadow-sm" style="width: 200px;height:200px">
                @else
                    <img class="w-100 border-radius-lg shadow-sm" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="" id="image" >
                @endif
                    <!-- Profile picture help block-->
                    <!-- Profile picture upload button-->
                    <form action="{{route('profile.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')
                        <input type="file" class="form-control" id="input-file" name="image" accept="image/*">
                        <button class="btn btn-primary" type="submit">Upload Image</button>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="{{route('profile.update', Auth::user()->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username </label>
                            <input class="form-control" id="inputUsername" type="text" name="username" placeholder="Enter your username" value="{{$user->username}}">
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" name="email" placeholder="Enter your email address" value="{{$user->email}}">
                        </div>

                        <div class="row gx-3 mb-3">

                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let image = document.getElementById("image");
let input = document.getElementById("input-file");

input.onchange = () => {
    image.src = URL.createObjectURL(input.files[0]);
}
  </script>
</body>
</html>