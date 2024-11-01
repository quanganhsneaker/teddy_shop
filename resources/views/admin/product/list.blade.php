@extends('admin.main')
@section('content')

<div class="admin-content-main-content-prouct-list">
<h2>Hot</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Bán</th>
                <th>Giá Giảm</th>
                <th>Ngày Đăng</th>
                <th>Tuỳ Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotProducts as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><img style="width: 70px;" src="{{ asset($product->image) }}" alt=""></td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price_nomal) }}</td>
                <td>{{ number_format($product->price_sale) }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                    <a href="/admin/product/edit/{{ $product->id }}" class="edit-class">Sửa</a>
                    <a onclick="removeRow({{ $product->id }}, '/admin/product/delete')" class="delete-class" href="">Xoá</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h2>Acer</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Bán</th>
                <th>Giá Giảm</th>
                <th>Ngày Đăng</th>
                <th>Tuỳ Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($acerProducts as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><img style="width: 70px;" src="{{ asset($product->image) }}" alt=""></td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price_nomal) }}</td>
                <td>{{ number_format($product->price_sale) }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                    <a href="/admin/product/edit/{{ $product->id }}" class="edit-class">Sửa</a>
                    <a onclick="removeRow({{ $product->id }}, '/admin/product/delete')" class="delete-class" href="">Xoá</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Dell</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Bán</th>
                <th>Giá Giảm</th>
                <th>Ngày Đăng</th>
                <th>Tuỳ Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dellProducts as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><img style="width: 70px;" src="{{ asset($product->image) }}" alt=""></td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price_nomal) }}</td>
                <td>{{ number_format($product->price_sale) }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                    <a href="/admin/product/edit/{{ $product->id }}" class="edit-class">Sửa</a>
                    <a onclick="removeRow({{ $product->id }}, '/admin/product/delete')" class="delete-class" href="">Xoá</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tương tự cho các danh mục 'macbook' và 'hot' -->
    
    <h2>Macbook</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Bán</th>
                <th>Giá Giảm</th>
                <th>Ngày Đăng</th>
                <th>Tuỳ Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($macbookProducts as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><img style="width: 70px;" src="{{ asset($product->image) }}" alt=""></td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price_nomal) }}</td>
                <td>{{ number_format($product->price_sale) }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                    <a href="/admin/product/edit/{{ $product->id }}" class="edit-class">Sửa</a>
                    <a onclick="removeRow({{ $product->id }}, '/admin/product/delete')" class="delete-class" href="">Xoá</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Accessory</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Bán</th>
                <th>Giá Giảm</th>
                <th>Ngày Đăng</th>
                <th>Tuỳ Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accessoryProducts as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><img style="width: 70px;" src="{{ asset($product->image) }}" alt=""></td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price_nomal) }}</td>
                <td>{{ number_format($product->price_sale) }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                    <a href="/admin/product/edit/{{ $product->id }}" class="edit-class">Sửa</a>
                    <a onclick="removeRow({{ $product->id }}, '/admin/product/delete')" class="delete-class" href="">Xoá</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection

@section('footer')
<script>
  function removeRow(product_id, url) {
    if (confirm('Mày chắc xoá chưa ?')) {
      $.ajax({
        url: url,
        data: { product_id },
        method: 'GET',
        dataType: 'JSON',
        success: function (res) {
          if (res.success == true) {
            location.reload();
          }
        }
      });
    }
  }
</script>
@endsection