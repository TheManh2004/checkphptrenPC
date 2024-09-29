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
        <button class="button-file"><i class="fa-solid fa-file-arrow-up"></i></i>Tải tài liệu</button>
    </div>
    <div class="insert-video">
        <button class="button-video"><i class="fa-solid fa-file-video"></i>Tải video</button>
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
                                    <i class="fas fa-check complete"></i>
                                    <button class="options-button"><i class="fas fa-ellipsis-v"></i></button>
                                </div>
                            </li>
                            <li>
                                <div class="lesson-content">
                                    <i class="fas fa-link link-icon"></i>
                                    <span>Bài 2</span>
                                </div>
                                <div>
                                    <i class="fas fa-check complete"></i>
                                    <button class="options-button"><i class="fas fa-ellipsis-v"></i></button>
                                </div>
                            </li>
                            <li>
                                <div class="lesson-content">
                                    <i class="fas fa-link link-icon"></i>
                                    <span>Bài giảng demo</span>
                                </div>
                                <div>
                                    <i class="fas fa-ban not-available"></i>
                                    <button class="options-button"><i class="fas fa-ellipsis-v"></i></button>
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
                                    <i class="fas fa-check complete"></i>
                                    <button class="options-button"><i class="fas fa-ellipsis-v"></i></button>
                                </div>
                            </li>
                            <li class="completed1">
                                <div class="lesson-content1">
                                    <i class="fas fa-file-alt file-icon"></i>
                                    <span>Bài 1</span>
                                </div>
                                <div>
                                    <i class="fas fa-check complete"></i>
                                    <button class="options-button"><i class="fas fa-ellipsis-v"></i></button>
                                </div>
                            </li>
                            <li>
                                <div class="lesson-content1">
                                    <i class="fas fa-link link-icon"></i>
                                    <span>Bài 2</span>
                                </div>
                                <div>
                                    <i class="fas fa-check complete"></i>
                                    <button class="options-button"><i class="fas fa-ellipsis-v"></i></button>
                                </div>
                            </li>
                            <li>
                                <div class="lesson-content1">
                                    <i class="fas fa-link link-icon"></i>
                                    <span>Bài Test</span>
                                </div>
                                <div>
                                    <i class="fas fa-ban not-available"></i>
                                    <button class="options-button"><i class="fas fa-ellipsis-v"></i></button>
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