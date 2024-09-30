<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/ef5ee47b32.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="account-content">
        <div class="header">
            <img style="width: 100px;
                        height: 100px;" src="../image/logo.png" alt="logo">
            <h2>Tài Khoản</h2>    
                    </div>

        <!-- Personal Information Section -->
        <div id="personalInfo" class="info-box">
            <!-- Phone Number -->
            <div class="info-item">
                <span id="phoneDisplay">Thông tin liên hệ: Nguyễn Thế Mạnh, +84963331381</span>
                <i class="fa fa-arrow-right edit-icon" onclick="toggleEdit('phone')"></i>
                <i class="fa fa-times cancel-icon" onclick="cancelEdit('phone')" style="display:none;"></i>
            </div>
            <input type="text" id="phoneInput" placeholder="Nhập số điện thoại mới">
            <button class="save-btn" id="savePhoneBtn" onclick="saveEdit('phone')">Lưu</button>

            <!-- Gmail -->
            <div class="info-item">
                <span id="gmailDisplay">Gmail: themanh20004@gmail.com</span>
                <i class="fa fa-arrow-right edit-icon" onclick="toggleEdit('gmail')"></i>
                <i class="fa fa-times cancel-icon" onclick="cancelEdit('gmail')" style="display:none;"></i>
            </div>
            <input type="email" id="gmailInput" placeholder="Nhập Gmail mới">
            <button class="save-btn" id="saveGmailBtn" onclick="saveEdit('gmail')">Lưu</button>

            <!-- Gender -->
            <div class="info-item">
                <span id="genderDisplay">Giới tính: Nam</span>
                <i class="fa fa-arrow-right edit-icon" onclick="toggleEdit('gender')"></i>
                <i class="fa fa-times cancel-icon" onclick="cancelEdit('gender')" style="display:none;"></i>
            </div>
            <input type="text" id="genderInput" placeholder="Nhập giới tính mới">
            <button class="save-btn" id="saveGenderBtn" onclick="saveEdit('gender')">Lưu</button>

            <!-- Role -->
            <div class="info-item">
                <span id="roleDisplay">Vai trò: Giảng viên</span>
                <i class="fa fa-arrow-right edit-icon" onclick="toggleEdit('role')"></i>
                <i class="fa fa-times cancel-icon" onclick="cancelEdit('role')" style="display:none;"></i>
            </div>
            <input type="text" id="roleInput" placeholder="Nhập vai trò mới">
            <button class="save-btn" id="saveRoleBtn" onclick="saveEdit('role')">Lưu</button>
        </div>

       
         <!-- Password Change Section (optional) -->
         <div id="passwordChange" class="info-box">
            <h3>Đổi mật khẩu</h3>
            <label>Mật khẩu cũ</label>
            <input type="password" id="oldPassword" placeholder="Nhập mật khẩu cũ">
            <label>Mật khẩu mới</label>
            <input type="password" id="newPassword" placeholder="Nhập mật khẩu mới">
            <label>Xác nhận mật khẩu mới</label>
            <input type="password" id="confirmPassword" placeholder="Nhập lại mật khẩu mới">
            <button id="confirmPasswordChange">Đổi mật khẩu</button>
        </div>

       
        <!-- Logout Button -->
        <button class="logout" id="logoutBtn">Đăng xuất</button>
    </div>


    <script src="./js/script.js"></script>
</body>

</html>