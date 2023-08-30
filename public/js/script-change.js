const fotoBesar = document.getElementById("fotoBesar");
const fotoKecil = document.querySelectorAll(".fotoKecil");
let indeksSaatIni = 0;

// Fungsi untuk mengganti gambar besar dengan gambar kecil dan sebaliknya
function gantiGambar(sumberBaru) {
    const sumberFotoBesar = fotoBesar.src;
    fotoBesar.style.opacity = "0"; // Mengatur opasitas menjadi 0
    setTimeout(() => {
        fotoBesar.src = sumberBaru;
        fotoBesar.style.opacity = "1"; // Mengatur opasitas menjadi 1 setelah perpindahan gambar
    }, 500); // Menunggu 500ms sebelum mengganti gambar dan mengatur opasitas kembali
    fotoKecil[indeksSaatIni].src = sumberFotoBesar;

    // Update indeks gambar
    indeksSaatIni = Array.from(fotoKecil).findIndex(
        (foto) => foto.src === sumberBaru
    );
}
