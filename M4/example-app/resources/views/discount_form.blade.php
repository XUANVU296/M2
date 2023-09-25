<form method="POST" action="/calculate-discount">
    @csrf
    <div>
        <label for="product_description">Mô tả sản phẩm:</label>
        <input type="text" id="product_description" name="product_description">
    </div>
    <div>
        <label for="list_price">Giá</label>
        <input type="number" id="list_price" name="list_price">
    </div>
    <div>
        <label for="discount_percent">Tỉ lệ chiết khẩu:</label>
        <input type="number" id="discount_percent" name="discount_percent" step = 0.01>
    </div>
    <div>
        <button type="submit">Tính chiết khẩu</button>
    </div>
</form>