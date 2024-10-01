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
function openModal(type) {
  if (type === 'video') {
    document.getElementById('video-modal').style.display = 'block';
  } else if (type === 'file') {
    document.getElementById('file-modal').style.display = 'block';
  }
}

function closeModal(type) {
  if (type === 'video') {
    document.getElementById('video-modal').style.display = 'none';
  } else if (type === 'file') {
    document.getElementById('file-modal').style.display = 'none';
  }
}

// Thay đổi giữa URL và file upload
function toggleInput(type) {
  if (type === 'video') {
    var videoType = document.getElementById('video-type').value;
    if (videoType === 'url') {
      document.getElementById('video-url-inputs').style.display = 'block';
      document.getElementById('video-upload-input').style.display = 'none';
      document.getElementById('video-instruction-text').style.display = 'block';
    } else if (videoType === 'file') {
      document.getElementById('video-url-inputs').style.display = 'none';
      document.getElementById('video-upload-input').style.display = 'block';
      document.getElementById('video-instruction-text').style.display = 'none';
    }
  } else if (type === 'file') {
    var fileType = document.getElementById('file-type').value;
    if (fileType === 'url') {
      document.getElementById('file-url-inputs').style.display = 'block';
      document.getElementById('file-upload-input').style.display = 'none';
      document.getElementById('file-instruction-text').style.display = 'block';
    } else if (fileType === 'file') {
      document.getElementById('file-url-inputs').style.display = 'none';
      document.getElementById('file-upload-input').style.display = 'block';
      document.getElementById('file-instruction-text').style.display = 'none';
    }
  }
}

function uploadFile(type) {
  if (type === 'video') {
    var videoType = document.getElementById('video-type').value;
    if (videoType === 'url') {
      var videoUrl = document.getElementById('video-url').value;
      var videoPageName = document.getElementById('video-page-name').value;
      alert('Video URL: ' + videoUrl + '\nTên trang: ' + videoPageName);
    } else if (videoType === 'file') {
      var videoUpload = document.getElementById('video-upload').files[0];
      alert('Video upload: ' + videoUpload.name);
    }
    closeModal('video');
  } else if (type === 'file') {
    var fileType = document.getElementById('file-type').value;
    if (fileType === 'url') {
      var fileUrl = document.getElementById('file-url').value;
      var filePageName = document.getElementById('file-page-name').value;
      alert('File URL: ' + fileUrl + '\nTên trang: ' + filePageName);
    } else if (fileType === 'file') {
      var fileUpload = document.getElementById('file-upload').files[0];
      alert('File upload: ' + fileUpload.name);
    }
    closeModal('file');
  }
}
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
bookSelect.addEventListener('click', function () {
  hideAllContent();
  taiLieuContent.classList.add('active');
});

// Sự kiện khi nhấn vào Câu hỏi
bookSelect2.addEventListener('click', function () {
  hideAllContent();
  cauHoiContent.classList.add('active');
});

// Sự kiện khi nhấn vào Hộp Thư
bookSelect3.addEventListener('click', function () {
  hideAllContent();
  hopThuContent.classList.add('active');
});

// Sự kiện khi nhấn vào Báo Cáo
bookSelect4.addEventListener('click', function () {
  hideAllContent();
  baoCaoContent.classList.add('active');
});
const toggleMenuBtn = document.getElementById('toggleMenuBtn');
const menuContent = document.getElementById('menuContent');
// Hàm toggle hiển thị/ẩn menu
toggleMenuBtn.addEventListener('click', function (event) {
  event.stopPropagation(); // Ngăn việc đóng menu khi nhấp vào nút
  if (menuContent.style.display === "none" || menuContent.style.display === "") {
    menuContent.style.display = "block"; // Hiển thị menu
  } else {
    menuContent.style.display = "none"; // Ẩn menu
  }
});

// Đóng menu khi nhấp ra ngoài menu
document.addEventListener('click', function (event) {
  if (!toggleMenuBtn.contains(event.target) && !menuContent.contains(event.target)) {
    menuContent.style.display = "none"; // Ẩn menu khi click ngoài
  }
});

function toggleMenu(button) {
  var menu = button.nextElementSibling;

  // Đóng các menu khác trước
  document.querySelectorAll('.menu').forEach(function (otherMenu) {
    if (otherMenu !== menu) {
      otherMenu.style.display = 'none';
    }
  });

  // Đóng/mở menu hiện tại
  if (menu.style.display === 'flex') {
    menu.style.display = 'none';
  } else {
    menu.style.display = 'flex';
  }
}

// Đóng menu khi click ra ngoài
document.addEventListener('click', function (event) {
  var isClickInsideMenu = event.target.closest('.options');
  if (!isClickInsideMenu) {
    document.querySelectorAll('.menu').forEach(function (menu) {
      menu.style.display = 'none';
    });
  }
});
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