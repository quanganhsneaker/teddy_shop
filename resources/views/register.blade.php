<!DOCTYPE html>
<html lang="en">
<head>
    @include('parts.head')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Màu nền nhẹ nhàng */
            color: #333; /* Màu chữ tối */
            display: flex;
            justify-content: center; /* Căn giữa nội dung */
            align-items: center; /* Căn giữa theo chiều dọc */
            height: 100vh; /* Chiều cao toàn bộ màn hình */
            margin: 0; /* Không có margin cho body */
        }

        .container {
            background-color: #ffffff; /* Nền trắng cho container */
            padding: 40px; /* Padding bên trong */
            border-radius: 8px; /* Bo góc */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ cho container */
            width: 600px; /* Chiều rộng cố định */
            
        }

        h2 {
            margin-bottom: 20px; /* Khoảng cách dưới tiêu đề */
            color: #000; /* Màu chữ đen */
            text-align: center; /* Căn giữa chữ */
        }

        .form-group {
            margin-bottom: 15px; /* Khoảng cách giữa các form group */
        }

       a, label {
            display: block; /* Hiển thị label như một block */
            margin-bottom: 5px; /* Khoảng cách dưới label */
            font-weight: bold; /* Chữ đậm cho label */
            color: #555; /* Màu chữ nhẹ cho label */
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 500px; /* Chiếm toàn bộ chiều rộng */
            padding: 10px; /* Padding cho input */
            border: 1px solid #ccc; /* Viền nhẹ */
            border-radius: 4px; /* Bo góc cho input */
            font-size: 16px; /* Kích thước chữ trong input */
            background-color: #f8f8f8; /* Nền input */
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #000; /* Đổi màu viền khi focus */
            outline: none; /* Loại bỏ outline mặc định */
        }

        button {
            background-color: #000; /* Màu nền cho nút đen */
            color: white; /* Màu chữ trắng */
            padding: 10px; /* Padding cho nút */
            border: none; /* Không có viền */
            border-radius: 4px; /* Bo góc cho nút */
            cursor: pointer; /* Thay đổi con trỏ khi hover */
            font-size: 16px; /* Kích thước chữ */
            width: 100%; /* Chiếm toàn bộ chiều rộng */
            transition: background-color 0.3s; /* Hiệu ứng chuyển màu */
        }

        button:hover {
            background-color: #333; /* Đổi màu khi hover */
        }

        p {
            font-style: italic;
            color: red; /* Màu chữ đỏ cho thông báo lỗi */
            margin: 10px 0; /* Khoảng cách cho thông báo */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Đăng ký</h2>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Xác nhận mật khẩu</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit">Đăng ký</button>
            <p> Bằng việc đăng ký, bạn đã chấp nhận các chính sách của chúng tôi</p>
           <div class="form-group">
            <a href="{{ route('logins') }}"> Tôi đã có tài khoản</a>
           </div>
        </form>
    </div>
</body>
</html>