document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("toggle-button");
  const lessonList = document.getElementById("lesson-list");

  toggleButton.addEventListener("click", function () {
    // Kiểm tra trạng thái hiện tại
    const isExpanded = lessonList.style.height && lessonList.style.height !== "0px";

    if (isExpanded) {
      // Thu gọn danh sách
      lessonList.style.height = "0px";
      toggleButton.innerHTML = "&#9660;"; // Mũi tên chỉ xuống khi đóng
    } else {
      // Tính toán chiều cao thực tế của danh sách
      const scrollHeight = lessonList.scrollHeight + "px";
      lessonList.style.height = scrollHeight;
      toggleButton.innerHTML = "&#9650;"; // Mũi tên chỉ lên khi mở
    }
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const toggleButton1 = document.getElementById("toggle-button1");
  const lessonList1 = document.getElementById("lesson-list1");

  toggleButton1.addEventListener("click", function () {
    // Kiểm tra trạng thái hiện tại
    const isExpanded = lessonList1.style.height && lessonList1.style.height !== "0px";

    if (isExpanded) {
      // Thu gọn danh sách
      lessonList1.style.height = "0px";
      toggleButton1.innerHTML = "&#9660;"; // Mũi tên chỉ xuống khi đóng
    } else {
      // Tính toán chiều cao thực tế của danh sách
      const scrollHeight = lessonList1.scrollHeight + "px";
      lessonList1.style.height = scrollHeight;
      toggleButton1.innerHTML = "&#9650;"; // Mũi tên chỉ lên khi mở
    }
  });
});
// Lấy các phần tử icon và nội dung
const bookSelect = document.querySelector('.book-select');
const bookSelect2 = document.querySelector('.book-select2');
const bookSelect3 = document.querySelector('.book-select3');
const bookSelect4 = document.querySelector('.book-select4');

// Lấy các phần tử nội dung
const taiLieuContent = document.getElementById('tai-lieu-content');
const cauHoiContent = document.getElementById('cau-hoi-content');
const hopThuContent = document.getElementById('hop-thu-content');
const baoCaoContent = document.getElementById('bao-cao-content');

// Hàm để ẩn tất cả nội dung
function hideAllContent() {
    taiLieuContent.classList.remove('active');
    cauHoiContent.classList.remove('active');
    hopThuContent.classList.remove('active');
    baoCaoContent.classList.remove('active');
}

// Sự kiện khi nhấn vào Tài liệu
bookSelect.addEventListener('click', function() {
    hideAllContent();
    taiLieuContent.classList.add('active');
});

// Sự kiện khi nhấn vào Câu hỏi
bookSelect2.addEventListener('click', function() {
    hideAllContent();
    cauHoiContent.classList.add('active');
});

// Sự kiện khi nhấn vào Hộp Thư
bookSelect3.addEventListener('click', function() {
    hideAllContent();
    hopThuContent.classList.add('active');
});

// Sự kiện khi nhấn vào Báo Cáo
bookSelect4.addEventListener('click', function() {
    hideAllContent();
    baoCaoContent.classList.add('active');
});
const toggleMenuBtn = document.getElementById('toggleMenuBtn');
const menuContent = document.getElementById('menuContent');

// Hàm toggle hiển thị/ẩn menu
toggleMenuBtn.addEventListener('click', function(event) {
  event.stopPropagation(); // Ngăn việc đóng menu khi nhấp vào nút
  if (menuContent.style.display === "none" || menuContent.style.display === "") {
    menuContent.style.display = "block"; // Hiển thị menu
  } else {
    menuContent.style.display = "none"; // Ẩn menu
  }
});

// Đóng menu khi nhấp ra ngoài menu
document.addEventListener('click', function(event) {
  if (!toggleMenuBtn.contains(event.target) && !menuContent.contains(event.target)) {
    menuContent.style.display = "none"; // Ẩn menu khi click ngoài
  }
});
// Toggle hiển thị menu khi nhấn vào dấu 3 chấm
function toggleMenu(el) {
  let menu = el.nextElementSibling;
  if (menu.style.display === "none" || menu.style.display === "") {
      menu.style.display = "block";
  } else {
      menu.style.display = "none";
  }
}

// Xóa bài học với xác nhận
function deleteLesson(el) {
  if (confirm("Bạn có chắc chắn muốn xóa bài học này?")) {
      let lesson = el.closest('.lesson');
      lesson.remove(); // Hoặc gọi API để xóa bài học từ server
  }
}

// Sửa tên bài học
function editLesson(el) {
  let lessonHeader = el.closest('.lesson-header');
  let lessonName = lessonHeader.querySelector('h3').textContent;
  let newName = prompt("Sửa tên bài học:", lessonName);
  if (newName && newName.trim() !== "") {
      lessonHeader.querySelector('h3').textContent = newName;
      // Gửi dữ liệu mới lên server nếu cần
  }
}