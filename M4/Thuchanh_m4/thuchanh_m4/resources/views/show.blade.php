<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Xem chi tiết</h2>

<table class="table tablesorter " id="simple-table">
    <thead class=" text-primary">
        <tr>
            <th>
                Danh mục
            </th>
            <th>
                Ngày chi tiêu
            </th>
            <th>
               Gía
            </th>
            <th>
                Ghi chú
            </th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td>
                {{ $chitieu->DANHMUC }}
                
            </td>
            <td>
                {{ $chitieu->DATE }}
            </td>
            <td>
                {{ $chitieu->PRICE }}
                
            </td>
            <td>
                {{ $chitieu->GHICHU }}
            </td>
        </tr>
    </tbody>

</body>
</html>

