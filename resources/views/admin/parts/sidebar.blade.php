<div class="admin-side-bar-top">
             <a href="/admin">   <img src="{{asset('backend/asset/images/logotron.png')}}" alt=""></a>
            </div>
            
            <div class="admin-sidebar-content">
            <ul>
                <li><a href="/admin"><i class="ri-dashboard-line"></i>Dashboard<i class="ri-add-box-line"></i></a>
                    <ul class="sub-menu">
                      
                        <div class="sub-menu-items">  <li><a href="{{ route('admin.dashboard') }}"><i class="ri-arrow-right-circle-fill"></i>Tổng quan</a>
                        </li></div>
                        
                    </ul>
                </li>
                <li><a href=""><i class="ri-arrow-right-s-fill"></i></i>Đơn hàng<i class="ri-add-box-line"></i></a>
                    <ul class="sub-menu">
                    <div class="sub-menu-items">  
                        <li><a href="/admin/oder/list"><i class="ri-arrow-right-circle-fill"></i>Danh sách đơn hàng</a>
                    </li></div>
                        
                    </ul>
                </li>
                <li><a href=""><i class="ri-arrow-right-s-fill"></i></i>Sản phẩm<i class="ri-add-box-line"></i></a>
                    <ul class="sub-menu">
                        <div class="sub-menu-items"><li>
                            <a href="/admin/product/list"><i class="ri-arrow-right-circle-fill"></i>Danh sách</a></li>
                        <li><a href="/admin/product/create"><i class="ri-arrow-right-circle-fill"></i>Thêm</a></li></div>
                    </ul>
                </li>
                <li><a href=""><i class="ri-arrow-right-s-fill"></i></i>Thống kê<i class="ri-add-box-line"></i></a>
                    <ul class="sub-menu">
                        <div class="sub-menu-items"><li>
                            <li><a href="{{ route('statistics.revenue') }}"><i class="ri-arrow-right-circle-fill"></i>Doanh thu</a></li>
                            <li><a href="{{ route('statistics.orders') }}"><i class="ri-arrow-right-circle-fill"></i>Thống kê Đơn hàng</a></li>
                            <li><a href="{{ route('user.statistics') }}"><i class="ri-arrow-right-circle-fill"></i>Người dùng (user)</a></li>

                    </ul>
                </li>
                <li><a href=""><i class="ri-arrow-right-s-fill"></i></i>Quản lý nội dung<i class="ri-add-box-line"></i></a>
                    <ul class="sub-menu">
                        <div class="sub-menu-items"><li>
                            <a href=""><i class="ri-arrow-right-circle-fill"></i>Danh mục bài viết</a></li>
                        <li><a href=""><i class="ri-arrow-right-circle-fill"></i>Hình ảnh/side bar</a></li></div>
                    </ul>
                </li>
            </ul>
            </div>
