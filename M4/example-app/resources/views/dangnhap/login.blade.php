<form action="/login" method="post">
    @csrf
    Tên đăng nhập: <input type="text" name="name" id=""><br>
    Mật khẩu: <input type="password" name="password" id=""><br>
    <input type="submit" value="Đăng nhập">
</form>