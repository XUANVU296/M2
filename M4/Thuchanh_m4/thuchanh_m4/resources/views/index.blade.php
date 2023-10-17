<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<div class="col-md-12 mb-5">
    <div class="card ">
        <div class="card-header">
            <h4 style="text-align:center;" class="card-title"> DANH SÁCH CHI TIÊU</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{ route('chitieu.create') }}" class="btn btn-success">Thêm</a>
                <table class="table tablesorter " id="simple-table">
                    <thead class=" text-primary">
                        <tr>
                            <th>
                                STT
                            </th>
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
                            <th>
                               Hành động
                            </th>
                        </tr>
                    </thead>
                    @php
                         $total = 0;
                        @endphp
                    @foreach($chitieu as $index => $chitieus)
                    <tbody>
                        <tr>
                            <td>
                                {{ $index + 1 }}
                            </td>
                            <td>
                                {{ $chitieus->DANHMUC }}
                                
                            </td>
                            <td>
                                {{ $chitieus->DATE }}
                            </td>
                            <td>
                                {{ $chitieus->PRICE }}
                                
                            </td>
                            <td>
                                {{ $chitieus->GHICHU }}
                            </td>
                            <td>
                                    <a href="{{ route('chitieu.edit', ['chitieu' => $chitieus->ID]) }}">
                                        <button class="btn btn-primary">
                                            <i class="fas fa-edit"></i> Sửa
                                        </button>
                                    </a>
                                    <a href="{{ route('chitieu.show', ['chitieu' => $chitieus->ID]) }}">
                                        <button class="btn btn-secondary">
                                            <i class="fas fa-eye"></i> Xem
                                        </button>
                                    </a>
                                    <form action="{{ route('chitieu.destroy', $chitieus->ID) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i> Xóa
                                        </button>
                                    </form>
                            </td>
                        </tr>
                        @php
                        $total += $chitieus->PRICE;
                        
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                        @php
                        echo 'Tổng tiền chi tiêu là: ' . $total . ' VND';
                        @endphp
            </div>
        </div>
    </div>
</div>