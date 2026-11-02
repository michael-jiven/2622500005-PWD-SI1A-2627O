const contactForm = document.getElementById("contactForm");
const formFeedback = document.getElementById("formFeedback");

const namaInput = document.getElementById("nama");
const noWaInput = document.getElementById("no-wa");
const jenisHpInput = document.getElementById("jenis-hp");
const jumlahUnitInput = document.getElementById("jumlah-unit");
const alamatInput = document.getElementById("alamat");

contactForm.addEventListener("submit", (event)=> {
    event.preventDefault();

    formFeedback.className = "form-feedback-error";

    const nama = namaInput.value.trim();
    if (nama.length < 3 || nama.length > 50) {
        formFeedback.textContent = "Nama lengkap harus diisi 3 sampai 50 karakter";
        return;
    }

    const noWa = noWaInput.value.trim();
    if (noWa.length < 12 || noWa.length > 15) {
        formFeedback.textContent = "Nomor WhatsApp wajib diisi";
        return;
    }

    const jenisHp = jenisHpInput.value;
    if (jenisHp === "") {
        formFeedback.textContent = "Pilih jenis HP yang ingin dibeli";
        return;
    }
    
    const jumlahUnit = Number (jumlahUnitInput.value);
    if (jumlahUnitInput.value === "" || jumlahUnit < 1 || jumlahUnit > 10) {
        formFeedback.textContent = "Jumlah unit minimal 1 maksimal 10";
        return;
    }

    const alamat = alamatInput.value.trim(); 
    if (alamat.length === 0 ) {
        formFeedback.textContent = "Alamat harus diisi";
        return;
    }

    if (alamat.length > 200) {
        formFeedback.textContent = "Alamat maksimal 200 karakter";
        return;
    }

    formFeedback.textContent = "Form berhasil dikirim";
    formFeedback.className = "form-feedback-success";
});

contactForm.addEventListener("reset", () => {
    formFeedback.textContent = "";
    formFeedback.className= "";
});