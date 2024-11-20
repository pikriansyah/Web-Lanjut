// validate.js

// Fungsi untuk memeriksa apakah password dan konfirmasi password cocok
function validateForm() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;

    // Cek apakah password dan konfirmasi password sama
    if (password !== confirmPassword) {
        alert("Password Tidak Cocok!");
        return false; // Jangan lanjutkan form submit
    }

    return true; // Lanjutkan form submit
}
