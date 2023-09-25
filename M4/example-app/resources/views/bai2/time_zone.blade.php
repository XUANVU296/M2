<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timezone</title>
</head>
<body>
    <h1>Ứng dụng xem giờ hiện tại của các thành phố trên thế giới</h1>
    <label for="select-city"></label>
    <form action="/time-zone" method="post">
        @csrf
        <select name="location" id="select-city" onchange="form.submit();">
            <option>Chọn thành phố</option>
            <option value="America/Chihuahua">Chihuahua, Mexico</option>
            <option value="America/Costa_Rica">Costa Rica</option>
            <option value="America/Havana">La Habana, Cuba</option>
            <option value="Asia/Hong_Kong">Hồng Kông</option>
            <option value="Asia/Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
            <option value="Africa/Cairo">Cai rô, Ai Cập</option>
            <option value="Europe/Copenhagen">Copenhagen, Đan Mạch</option>
            <option value="Asia/Riyadh">Riyadh, Saudi Arabia</option>
            <option value="Europe/Dublin">Dublin, Ai Len</option>
        </select>
    </form>
</body>
</html>