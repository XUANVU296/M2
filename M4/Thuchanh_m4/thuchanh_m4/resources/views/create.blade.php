<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Thêm chi tiêu cá nhân</h2>
  <form action="{{route('chitieu.store')}}" method='post'>
    @csrf
    <div class="form-group">
      <label for="email">Danh mục chi tiêu:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="DANHMUC">
    </div>
    <div class="form-group">
      <label for="pwd">Ngày chi tiêu:</label>
      <input type="date" class="form-control" id="pwd" placeholder="Enter description" name="DATE">
    <div class="form-group">
        <label for="email">Gía:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter price" name="PRICE">
      </div>
      @error('PRICE')
      <div style="color: red">{{ $message  }}</div>
   @enderror
    </div>
      <div class="form-group">
        <label for="pwd">Ghi chú:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter ..." name="GHICHU">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>