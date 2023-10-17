
<!DOCTYPE html>
<html>
    
<body>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
  <div class="container">
<h2 style="text-align: center;">Sửa thông tin</h2>

<form action="{{route('chitieu.update',$chitieu->ID)}}" method ="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <label for="danhmuc">Danh mục chi tiêu:</label><br>
  <input style="width:100%;" type="text" id="danhmuc" name="DANHMUC" value="{{$chitieu->DANHMUC}}"><br>
  <label for="date ">Ngày chi tiêu:</label><br>
  <input style="width:100%;" type="date" id="date" name="DATE" value="{{$chitieu->DATE}}"><br>
  <label for="price">Gía:</label><br>
  <input style="width:100%;" type="text" id="price" name="PRICE" value="{{$chitieu->PRICE}}"><br>
  @error('PRICE')
  <div style="color: red">{{ $message  }}</div>
@enderror
  <label for="ghichu ">Ghi chú:</label><br>
  <input style="width:100%;" type="text" id="ghichu" name="GHICHU" value="{{$chitieu->GHICHU}}"><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>

