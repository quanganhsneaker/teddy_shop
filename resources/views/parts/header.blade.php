<header id="header">
        <div class="container">
            <div class="row-flex">
                <div class="header-bar-icon">
                    <i class="ri-menu-line"></i>
                </div>
                <div class="header-logo">
                <a href="/">   <img src="{{asset('fontend/asset/images/logotron.png')}}" alt=""> </a>
                </div>
                <div class="header-logo-mobile">
                <img src="{{asset('fontend/asset/images/logotron.png')}}" alt=""> 
                </div>
                <div class="header-nav ">
                    <nav>
                        <ul>

                            <li><a href="/">Trang Chủ</a></li>
                            <li><a href="/producttype">Sản Phẩm</a></li>
                            <li><a href="/contact">Liên Hệ</a></li>
                            <li><a href="/info">Thông Tin</a></li>
                            <li><a href="/">Đăng Nhập </a></li>
                            <li><a href="/">Đăng Ký</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-search">
                 <input type="text" id="search-query" placeholder="Tìm kiếm" onkeyup="searchProducts()" required> <!-- Thêm onkeyup -->
                    <div id="search-results" class="search-results"></div> <!-- Div để hiển thị kết quả -->
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function searchProducts() {
                 let query = $('#search-query').val(); // Lấy giá trị từ ô tìm kiếm

                  if (query.length > 0) {
                    $.ajax({
                    url: '/search', // Đường dẫn đến route xử lý tìm kiếm
                    method: 'GET',
                    data: { query: query }, // Gửi từ khóa tìm kiếm
                    success: function(data) {
                    $('#search-results').html(data); // Hiển thị kết quả trả về trong div
                        }
                    });
                } else {
                    $('#search-results').empty(); // Nếu không có từ khóa, xóa kết quả
                    }
                }
        </script>


                <div class="header-cart">
                    <a href="/cart"><i class="ri-shopping-cart-line"number= "0"></i></a>
                </div>
            </div>
        </div>
    </header>