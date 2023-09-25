<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('user.update',$user->id)}}" method ="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="{{$user->name}}"><br>
  <label for="email ">Email:</label><br>
  <input type="text" id="email" name="email" value="{{$user->email}}"><br>
  <label for="image">Image:</label>
        <br>
        <input type="file" class="form-control-file" id="image" name="image">
        <br>
        <img src="{{ asset($user->image) ?? asset('public/images/' . old('image', $user->image)) }}" width="90px" height="90px" id="blah1" alt="">
        <br><br>
  <label for="password">PassWord:</label><br>
  <input type="text" id="password" name="password" value="{{$user->password}}"><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
