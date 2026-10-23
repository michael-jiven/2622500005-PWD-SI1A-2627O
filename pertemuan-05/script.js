const navToggle = document.getElementById("navToggle");
const navMenu = document.getElementById("navMenu");

navToggle.addEventListener("click", () => {
    const isOpenc= navMenu.classList.toggle("nav-open");

    navToggle.setAttribute("aria-expanded", isOpen);

    if (isOpen){
        navToggle.setAttribute("aria-label", "Tutup Navigasi")
    } else {
        navToggle.setAttribute("aria-label", "Buka Navigasi");
    }
});

const contactForm = document.getElementById("contactForm");
const formFeedBack = document.getElementById("formFeedBack")

const namaInput = document.getElementById('nama');
const emailInput = document.getElementById('email');
const semesterInput = document.getElementById('semester');
const tanggalInput = document.getElementById('tanggal');
const prodiInput = document.getElementById('prodi');
const pesanInput = document.getElementById('pesan');

contactForm.addEventListener("submin", (event) => {
    event.preventDefault();
    formFeedBack.className = "form-feedback-error";

    const nama = namaInput.value.trim();
    if (nama.length < 3 || nama.length > 50) {
        formFeedBack.textContent = "Nama lengkap harus diisi 3 sampai 50 karakter.";
        return;
    }

    const email = emailInput.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        formFeedBack.textContent = "Masukkan alamat email yang valid.";
        return;
    }

    const semester = Number(semesterInput.value);
    if (semester.Input.value == ""  || semester < 1  || semester > 14) {
        return;
    }
    const tanggal = tanggalInput.value;
    if (tanggal === "") {
        formFeedBack.textContent = "Tanggal kunjungan harus diisi.";
        return;
    }
    const jenisPesan = document.querySelector(
        'input[name="jenis_pesan"]:checked',
    );
    if (!jenisPesan) {
        formFeedBack.textContent = "Pilih jenis pesan.";
        return;
    }
    
    const topikDiPilih = document.querySelectorAll('input[name="minat]:checked');
    if (topikDiPilih.length === 0) {
        formFeedBack.textContent = "Pilih minimal satu topik yang diminati.";
        return;
    }

    const prodi = prodiInput.value;
    if (prodi === ""){
        formFeedBack.textContent = "Pilih program studi"
    }
})