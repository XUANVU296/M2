<!DOCTYPE html>
<html>
<head>
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

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Image</th>
    <th>Password</th>
  </tr>
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <img src="{{ asset($user->image) }}" alt="User Image" width="90px" height="90px">
          </td>
            <td>{{ $user->password }}</td>
        </tr>
</table>

</body>
</html>
