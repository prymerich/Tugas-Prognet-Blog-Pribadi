document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Validasi sederhana
    if (name === "" || email === "" || message === "") {
        alert("Semua field harus diisi!");
        return;
    }

    // Menampilkan pesan sukses
    const formMessage = document.getElementById('form-message');
    formMessage.innerHTML = `<p>Terima kasih, ${name}! Pesan Anda telah terkirim.</p>`;
    
    // Reset form setelah pengiriman
    document.getElementById('contact-form').reset();
});