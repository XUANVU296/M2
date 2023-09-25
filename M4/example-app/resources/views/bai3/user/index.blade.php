{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .thead-brown {
  background-color: purple;
  color: white;
}
.search-add-container {
    display: flex;
    align-items: center;
}

.custom-search-form {
    margin-left: auto;
    display: flex;
    align-items: center;
}

.custom-search-input {
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 20px 0 0 20px;
    font-size: 14px;
}

.custom-search-button {
    padding: 8px 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 0 20px 20px 0;
    font-size: 14px;
    cursor: pointer;
}

.btn {
    padding: 8px 16px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 20px;
    font-size: 14px;
    cursor: pointer;
}

.btn:hover {
    background-color: #1e7e34;
}
    </style>
</head>
<body>
  <div class="search-add-container">
    <a href="{{ route('user.create') }}" class="btn btn-success">Thêm</a>
    <form action="{{ route('user.index') }}" method="get" class="custom-search-form">
        <input type="search" name="keyword" class="custom-search-input" placeholder="Search">
        <input type="submit" value="Search" class="custom-search-button">
    </form>
</div>
  <table border= 2 class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-brown">
            <tr>
              <th scope="col">TT</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Image</th>
              <th scope="col">Password</th>
              <th scope="col">Action</th>
            </tr>
          </thead>

        <tbody>
            @foreach ($users as $key => $user)

            <tr>
                <td>{{$key+1}}</td>

                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                  <form action="{{ route('user.store', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')             
                    <img src="{{ asset($user->image) }}" width="90px" height="90px" alt="">
                    <br>
                    <label for="image"></label>
                  </form>
                </td>
                <td>{{$user->password}}</td>
               <td>
                <div class="d-flex">
                  <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-primary mr-2" style="background-color: #007bff; color: #fff;">Sửa</a>
                  <a href="{{ route('user.show', ['id' => $user->id]) }}" class="btn btn-secondary mr-2" style="background-color: #6c757d; color: #fff;">Xem</a>
                  <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" style="background-color: #dc3545; color: #fff;">Xóa</button>
                  </form>
              </div>
              </td>

            </tr>
            @endforeach
          


        </tbody>
    </table>
    <div class="pagination justify-content-center">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>

</body>
</html> --}}
@extends('bai3.admin.master')
@section('content')
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Danh sách người dùng</h4>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                <div class="search-add-container">
                  <a href="{{ route('user.create') }}" class="btn btn-success">Thêm</a>
              </div>
                  <table class="table table-responsive-md">
                      <thead>
                          <tr>
                              <th style="width:80px;"><strong>STT</strong></th>
                              <th><strong>Name</strong></th>
                              <th><strong>Email</strong></th>
                              <th><strong>Image</strong></th>
                              <th><strong>Password</strong></th>
                              <th><strong>Action</strong></th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $key => $user)
                          <tr>
                              <td><strong>{{$key+1}}</strong></td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td><form action="{{ route('user.store', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')             
                                <img src="{{ asset($user->image) }}" width="90px" height="90px" alt="">
                                <br>
                                <label for="image"></label>
                              </form></td>
                              <td>{{$user->password}}</td>
                              <td>
                                <div class="d-flex">
                                    <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-success light sharp" style="background-color: #007bff; color: #fff;">Sửa</a>
                                    <a href="{{ route('user.show', ['id' => $user->id]) }}" class="btn btn-success light sharp" style="background-color: #6c757d; color: #fff;">Xem</a>
                                    
                                    <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-success light sharp" style="background-color: #dc3545; color: #fff;">Xóa</button>
                                    </form>
                                </div>
                            </td>
                            @endforeach
                      </tbody>
                  </table>
                  <div class="pagination justify-content-center">
                    {{ $users->links('pagination::bootstrap-4') }}
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection



