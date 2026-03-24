# BÀI TẬP LỚN – Lập trình Web (HK2 2025-2026)

## Website Bán Sách (Book Store) | Nhóm 3 Thành Viên

> **Tech Stack:** HTML5, CSS3, JavaScript, PHP 7+, MySQL
> **Architecture:** Custom MVC (Manual)
> **Admin Template:** [Srtdash](https://github.com/puikinsh/srtdash-admin-dashboard)

---

## 🤝 PHẦN CHUNG (Cả 3 thành viên cùng làm)

- [ ] Thiết kế mô hình ứng dụng (MVC tự viết, không dùng PHP framework)
- [ ] Thiết kế cơ sở dữ liệu MySQL (Schema design)
- [ ] Thiết kế template chung cho website (Header, Footer, Navbar, Layout)
- [ ] Giao diện & tính năng Đăng ký / Đăng nhập (Auth)
- [ ] Phân quyền người dùng (Guest, Member, Admin)
- [ ] Tính năng thay đổi thông tin cá nhân, mật khẩu, avatar
- [ ] Quản trị viên: Quản lý người dùng (xem, reset mật khẩu, khoá, xoá)
- [ ] Responsive design (mobile, tablet, desktop)
- [ ] Kiểm tra W3C validation (HTML/CSS)
- [ ] Bảo mật cơ bản (SQL injection, XSS, CSRF,…)
- [ ] SEO cơ bản
- [ ] Viết báo cáo (tối thiểu 20 trang)

---

## 👤 PHÁT – Task: Trang Chủ, Liên Hệ & Giới Thiệu

### Giao diện (Frontend)
- [ ] Trang Chủ (Homepage - Book highlights, Banners)
- [ ] Trang Liên Hệ (Contact - inquiry form)
- [ ] Trang Giới Thiệu (Introduction - About us)

### Tính năng Quản trị (Admin – Srtdash)
- [ ] Quản lý nội dung Home, Contact, Introduction (thay đổi text, SĐT, địa chỉ, hình ảnh, logo,…)
- [ ] Quản lý liên hệ khách hàng (xem, đánh dấu đã đọc/chưa đọc/đã phản hồi, xoá)

### Validation & Pagination
- [ ] Validate form liên hệ (client JS + server PHP)
- [ ] Phân trang danh sách liên hệ (admin)

---

## 👤 TÂM – Task: Sản Phẩm (Sách) & Giỏ Hàng

### Giao diện (Frontend)
- [ ] Trang danh sách sản phẩm (Sách) - Tìm kiếm & Lọc
- [ ] Trang chi tiết sản phẩm (Book details)
- [ ] Trang giỏ hàng & Thanh toán (Cart & Checkout flow)

### Tính năng Quản trị (Admin – Srtdash)
- [ ] Quản lý Sản phẩm/Sách (xem, tìm kiếm, thêm, sửa, xoá)
- [ ] Quản lý Giỏ hàng / Đơn hàng (xem đơn, cập nhật trạng thái)

### Validation & Pagination
- [ ] Validate form thêm/sửa sản phẩm (client JS + server PHP)
- [ ] Phân trang danh sách sản phẩm (frontend + admin)
- [ ] Upload hình ảnh sách lên server

---

## 👤 KHANG – Task: Tin Tức, Bình Luận & FAQ

### Giao diện (Frontend)
- [ ] Trang danh sách bài viết / tin tức (Tìm kiếm bài viết)
- [ ] Trang chi tiết bài viết (Reading view)
- [ ] Trang Hỏi & Đáp (FAQ)

### Tính năng Quản trị (Admin – Srtdash)
- [ ] Quản lý tin tức (xem, tìm kiếm, thêm, sửa, xoá bài viết)
- [ ] Quản lý từ khoá, mô tả, tiêu đề bài viết (SEO per article)
- [ ] Quản lý bình luận / đánh giá trên bài viết (Duyệt/Xoá)
- [ ] Quản lý các câu hỏi FAQ

### Validation & Pagination
- [ ] Validate form thêm/sửa bài viết & FAQ (client JS + server PHP)
- [ ] Phân trang danh sách bài viết & bình luận (frontend + admin)
- [ ] Upload hình ảnh bài viết lên server

---

## ⚠️ QUY ĐỊNH QUAN TRỌNG

- ❌ Không dùng PHP Framework / CMF / CMS → **0 điểm**
- ❌ Không sao chép mã nguồn → **0 điểm**
- ✅ Được dùng CSS/JS libraries (Bootstrap, jQuery, Slick,…)
- ✅ Upload hình ảnh lên server (không dùng URL ảnh bên ngoài)
- ✅ Kiểm thử trên nhiều trình duyệt
- ✅ Nộp: mã nguồn + file DB + báo cáo (hard copy + soft copy)

