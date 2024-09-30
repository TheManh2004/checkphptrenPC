// Toggle Password Change Box visibility
document.getElementById('changePasswordCheckbox').addEventListener('change', function () {
    var passwordBox = document.getElementById('passwordBox');
    if (this.checked) {
        passwordBox.style.display = 'block';
    } else {
        passwordBox.style.display = 'none';
    }
});

 // Password Change Confirmation Logic
 document.getElementById("confirmPasswordChange").onclick = function() {
    var oldPassword = document.getElementById("oldPassword").value;
    var newPassword = document.getElementById("newPassword").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    if (!oldPassword || !newPassword || !confirmPassword) {
        alert("Vui lòng điền đầy đủ thông tin!");
        return;
    }

    if (newPassword !== confirmPassword) {
        alert("Mật khẩu mới không khớp!");
        return;
    }

    var confirmation = confirm("Bạn có chắc chắn muốn đổi mật khẩu không?");
    if (confirmation) {
        alert("Mật khẩu đã được đổi thành công!");
        // Here, you would normally process the password change server-side
    }
}
// Function to handle inline edits
function toggleEdit(field) {
    var displayElement = document.getElementById(field + "Display");
    var inputElement = document.getElementById(field + "Input");
    var saveButton = document.getElementById("save" + capitalizeFirstLetter(field) + "Btn");
    var editIcon = displayElement.nextElementSibling; // Arrow icon
    var cancelIcon = displayElement.nextElementSibling.nextElementSibling; // Cancel (X) icon

    displayElement.style.display = "none";   // Hide the current display
    inputElement.style.display = "block";    // Show the input field
    saveButton.style.display = "inline-block"; // Show the save button
    editIcon.style.display = "none";         // Hide the edit arrow icon
    cancelIcon.style.display = "inline-block"; // Show the cancel (X) icon
}

// Function to cancel edit
function cancelEdit(field) {
    var displayElement = document.getElementById(field + "Display");
    var inputElement = document.getElementById(field + "Input");
    var saveButton = document.getElementById("save" + capitalizeFirstLetter(field) + "Btn");
    var editIcon = displayElement.nextElementSibling; // Arrow icon
    var cancelIcon = displayElement.nextElementSibling.nextElementSibling; // Cancel (X) icon

    inputElement.value = "";  // Reset input field
    inputElement.style.display = "none";  // Hide input
    saveButton.style.display = "none";    // Hide save button
    cancelIcon.style.display = "none";    // Hide cancel icon (X)
    editIcon.style.display = "inline-block"; // Show the edit arrow icon
    displayElement.style.display = "block";  // Show the current display text
}

// Function to save the edit
function saveEdit(field) {
    var displayElement = document.getElementById(field + "Display");
    var inputElement = document.getElementById(field + "Input");
    var saveButton = document.getElementById("save" + capitalizeFirstLetter(field) + "Btn");

    var newValue = inputElement.value;
    if (newValue.trim() !== "") {
        if (field === "phone") {
            displayElement.textContent = "Thông tin liên hệ: Nguyễn Thế Mạnh, " + newValue;
        } else if (field === "gmail") {
            displayElement.textContent = "Gmail: " + newValue;
        } else if (field === "gender") {
            displayElement.textContent = "Giới tính: " + newValue;
        } else if (field === "role") {
            displayElement.textContent = "Vai trò: " + newValue;
        }

        cancelEdit(field);  // Reset after saving
    } else {
        alert("Vui lòng nhập thông tin mới!");
    }
}

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
// Logout Button Functionality
document.getElementById("logoutBtn").onclick = function () {
    var confirmation = confirm("Bạn có chắc chắn muốn đăng xuất không?");
    if (confirmation) {
        window.location.href = "./login.php";  // Replace with actual logout functionality
    }
};