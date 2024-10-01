<?php
include 'header.php';
?>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/stylefooter.css">
<nav class="insert-file">
    <div class="insert-lesson">
        <button class="button-upload"><i class="fa-solid fa-upload"></i>Xuất tài liệu khóa học</button>
    </div>
    <div class="insert-filesmall">
        <button onclick="openModal('file')" class="button-file"><i class="fa-solid fa-file-arrow-up"></i></i>Tải tài liệu</button>
    </div>
    <div class="insert-video">
        <button onclick="openModal('video')" class="button-video"><i class="fa-solid fa-file-video"></i>Tải video</button>
    </div>

<!-- Modal cho thêm video -->
<div id="video-modal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('video')">&times;</span>
    <h3>Thêm Video</h3>

    <!-- Thêm border bottom để ngăn cách phần thêm video -->
    <div class="section-border">
      
      <!-- Tùy chọn giữa URL bên ngoài và từ máy tính -->
      <label for="video-type">Thêm:</label>
      <select id="video-type" onchange="toggleInput('video')">
        <option value="url">URL bên ngoài</option>
        <option value="file">Từ máy tính</option>
      </select>

      <!-- Câu dẫn dưới phần Thêm URL bên ngoài -->
      <div id="video-instruction-text">
        <p>Nhập URL và tên trang để thêm liên kết tới video từ URL.</p>
      </div>

      <!-- Mục thêm URL (URL và Tên trang xuống dòng riêng) -->
      <div id="video-url-inputs">
        <label for="video-url">URL:</label><br>
        <input type="text" id="video-url" name="video-url" placeholder="Nhập URL" class="input-full-width"><br>
        
        <label for="video-page-name">Tên trang:</label><br>
        <input type="text" id="video-page-name" name="video-page-name" placeholder="Nhập tên trang" class="input-full-width">
      </div>

      <!-- Mục thêm từ máy tính -->
      <div id="video-upload-input" style="display:none;">
        <label for="video-upload">Chọn video từ máy tính:</label><br>
        <input type="file" id="video-upload" name="video-upload" class="input-full-width">
      </div>
    </div>

    <div class="modal-actions">
      <button onclick="closeModal('video')">Hủy bỏ</button>
      <button onclick="uploadFile('video')">Thêm mục</button>
    </div>
  </div>
</div>


<!-- Modal cho thêm tài liệu -->
<div id="file-modal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('file')">&times;</span>
    <h3>Thêm Tài liệu</h3>

    <!-- Thêm border bottom để ngăn cách phần thêm file -->
    <div class="section-border">
      
      <!-- Tùy chọn giữa URL bên ngoài và từ máy tính -->
      <label for="file-type">Thêm:</label>
      <select id="file-type" onchange="toggleInput('file')">
        <option value="url">URL bên ngoài</option>
        <option value="file">Từ máy tính</option>
      </select>

      <!-- Câu dẫn dưới phần Thêm URL bên ngoài -->
      <div id="file-instruction-text">
        <p>Nhập URL và tên trang để thêm liên kết tới tài liệu từ URL.</p>
      </div>

      <!-- Mục thêm URL (URL và Tên trang xuống dòng riêng) -->
      <div id="file-url-inputs">
        <label for="file-url">URL:</label><br>
        <input type="text" id="file-url" name="file-url" placeholder="Nhập URL" class="input-full-width"><br>
        
        <label for="file-page-name">Tên trang:</label><br>
        <input type="text" id="file-page-name" name="file-page-name" placeholder="Nhập tên trang" class="input-full-width">
      </div>

      <!-- Mục thêm từ máy tính -->
      <div id="file-upload-input" style="display:none;">
        <label for="file-upload">Chọn tài liệu từ máy tính:</label><br>
        <input type="file" id="file-upload" name="file-upload" class="input-full-width">
      </div>
    </div>

    <div class="modal-actions">
      <button onclick="closeModal('file')">Hủy bỏ</button>
      <button onclick="uploadFile('file')">Thêm mục</button>
    </div>
  </div>
</div>
</nav>
<div class="inner-wrap">
    <div class="container">
        <div class="subject">
            <div class="subject-select">
                <ul>
                    <li id="docTab">
                        <div class="book-select">
                            <img src="./image/book.png" alt="book">
                            <div class="book-caption">
                                <h2>Tài liệu</h2>
                                <p>+ Thêm tài liệu</p>
                            </div>
                        </div>
                    </li>
                    <li id="questionTab">
                        <div class="book-select2">
                            <img src="./image/bank.png" alt="bank">
                            <div class="book-caption">
                                <h2>Câu hỏi</h2>
                                <p>+ Thêm câu hỏi</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="book-select3">
                            <img src="./image/education.png" alt="education">
                            <div class="book-caption">
                                <h2>Hộp Thư</h2>
                                <p>+ Thêm hộp thư</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="book-select4">
                            <img src="./image/chart.png" alt="chart">
                            <div class="book-caption">
                                <h2>Báo Cáo</h2>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="docsContent" class="main-subject">
                <div id="tai-lieu-content" class="content-section active">
                    <div class="accordion">
                        <div class="accordion-header">
                            <div class="header-left">
                                <i class="fa-solid fa-list-ul"></i>
                                <h3>Thử nghiệm</h3>
                                <button id="toggle-button" class="arrow">&#9660;</button>
                            </div>
                            <div class="header-right">
                                <i class="fa-solid fa-square-check fa-bounce" style="color: #63E6BE;"></i>
                                <button class="add-button"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>

                        <ul class="lesson-list" id="lesson-list">
                            <li class="completed">
                                <div class="lesson-content">
                                    <i class="fas fa-file-alt file-icon"></i>
                                    <span>Bài mở đầu</span>
                                </div>
                                <div>
                                    <div class="options">
                                        <i class="fas fa-check complete"></i>
                                        <button class="options-button" onclick="toggleMenu(this)"><i class="fas fa-ellipsis-v"></i></button>
                                        <div class="menu">
                                            <button onclick="editLesson(this)">Sửa</button>
                                            <button onclick="deleteLesson(this)">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="completed">
                                <div class="lesson-content">
                                    <i class="fas fa-file-alt file-icon"></i>
                                    <span>Bài 1</span>
                                </div>
                                <div>
                                    <div class="options">
                                        <i class="fas fa-check complete"></i>
                                        <button class="options-button" onclick="toggleMenu(this)"><i class="fas fa-ellipsis-v"></i></button>
                                        <div class="menu">
                                            <button onclick="editLesson(this)">Sửa</button>
                                            <button onclick="deleteLesson(this)">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="lesson-content">
                                    <i class="fas fa-link link-icon"></i>
                                    <span>Bài 2</span>
                                </div>
                                <div>
                                    <div class="options">
                                        <i class="fas fa-check complete"></i>
                                        <button class="options-button" onclick="toggleMenu(this)"><i class="fas fa-ellipsis-v"></i></button>
                                        <div class="menu">
                                            <button onclick="editLesson(this)">Sửa</button>
                                            <button onclick="deleteLesson(this)">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="lesson-content">
                                    <i class="fas fa-link link-icon"></i>
                                    <span>Bài giảng demo</span>
                                </div>
                                <div>
                                    <div class="options">
                                        <i class="fas fa-check complete"></i>
                                        <button class="options-button" onclick="toggleMenu(this)"><i class="fas fa-ellipsis-v"></i></button>
                                        <div class="menu">
                                            <button onclick="editLesson(this)">Sửa</button>
                                            <button onclick="deleteLesson(this)">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="accordion1">
                        <div class="accordion-header1">
                            <div class="header-left1">
                                <i class="fa-solid fa-list-ul"></i>
                                <h3>Thiết kế Web</h3>
                                <button id="toggle-button1" class="arrow">&#9660;</button>
                            </div>
                            <div class="header-right1">
                                <i class="fa-solid fa-square-check fa-bounce" style="color: #63E6BE;"></i>
                                <button class="add-button"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>

                        <ul class="lesson-list1" id="lesson-list1">
                            <li class="completed1">
                                <div class="lesson-content1">
                                    <i class="fas fa-file-alt file-icon"></i>
                                    <span>HTML&CSS semi</span>
                                </div>
                                <div>
                                    <div class="options">
                                        <i class="fas fa-check complete"></i>
                                        <button class="options-button" onclick="toggleMenu(this)"><i class="fas fa-ellipsis-v"></i></button>
                                        <div class="menu">
                                            <button onclick="editLesson(this)">Sửa</button>
                                            <button onclick="deleteLesson(this)">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="completed1">
                                <div class="lesson-content1">
                                    <i class="fas fa-file-alt file-icon"></i>
                                    <span>Bài 1</span>
                                </div>
                                <div>
                                    <div class="options">
                                        <i class="fas fa-check complete"></i>
                                        <button class="options-button" onclick="toggleMenu(this)"><i class="fas fa-ellipsis-v"></i></button>
                                        <div class="menu">
                                            <button onclick="editLesson(this)">Sửa</button>
                                            <button onclick="deleteLesson(this)">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="lesson-content1">
                                    <i class="fas fa-link link-icon"></i>
                                    <span>Bài 2</span>
                                </div>
                                <div>
                                    <div class="options">
                                        <i class="fas fa-check complete"></i>
                                        <button class="options-button" onclick="toggleMenu(this)"><i class="fas fa-ellipsis-v"></i></button>
                                        <div class="menu">
                                            <button onclick="editLesson(this)">Sửa</button>
                                            <button onclick="deleteLesson(this)">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="lesson-content1">
                                    <i class="fas fa-link link-icon"></i>
                                    <span>Bài Test</span>
                                </div>
                                <div>
                                    <div class="options">
                                        <i class="fas fa-check complete"></i>
                                        <button class="options-button" onclick="toggleMenu(this)"><i class="fas fa-ellipsis-v"></i></button>
                                        <div class="menu">
                                            <button onclick="editLesson(this)">Sửa</button>
                                            <button onclick="deleteLesson(this)">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="cau-hoi-content" class="content-section">
                    <h3>Danh sách câu hỏi</h3>
                    <ul>
                        <li>Câu hỏi 1</li>
                        <li>Câu hỏi 2</li>
                        <li>Câu hỏi 3</li>
                    </ul>
                </div>
                <div id="hop-thu-content" class="content-section">
                    <h3>Hộp thư</h3>
                    <!-- Nội dung hộp thư -->
                </div>

                <div id="bao-cao-content" class="content-section">
                    <h3>Báo cáo</h3>
                    <!-- Nội dung báo cáo -->
                </div>
            </div>

        </div>
    </div>
</div>
<?php
include 'footer.php';
?>