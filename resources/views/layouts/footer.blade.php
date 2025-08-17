{{-- maps js --}}
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>

{{-- animasi scroll --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    // loading screen
    // Simulasi waktu loading (misalnya 3 detik)
    window.addEventListener('load', () => {
        setTimeout(() => {
            const loadingScreen = document.getElementById('loading-screen');
            const mainContent = document.getElementById('main-content');

            // Tambah class hide untuk animasi keluar
            loadingScreen.classList.add('hide');

            // Tampilkan konten setelah animasi selesai
            setTimeout(() => {
                loadingScreen.style.display = 'none';
                document.body.classList.add('loaded');
                mainContent.style.display = 'block';
            }, 800); // sesuai durasi animasi CSS
        }, 300); // durasi loading
        // }, 3000); // durasi loading
    });

 


    // counterP
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter => {
            let target = parseInt(counter.getAttribute('data-target'));
            counter.textContent = "0"; // mulai dari 0
            let duration = 3000; // durasi total animasi (ms)
            let startTime = null;

            function updateCount(currentTime) {
                if (!startTime) startTime = currentTime;
                let progress = Math.min((currentTime - startTime) / duration, 1);
                counter.textContent = Math.floor(progress * target);
                if (progress < 1) {
                    requestAnimationFrame(updateCount);
                }
            }

            requestAnimationFrame(updateCount);
        });
    });


    // infinity scroll


    document.addEventListener("DOMContentLoaded", function() {
        const scrollContent = document.getElementById("scrollContent");

        // Gandakan konten 3x supaya mulus
        scrollContent.innerHTML += scrollContent.innerHTML + scrollContent.innerHTML;

        let speed = 0.5; // kecepatan scroll
        let position = 0;

        function smoothScroll() {
            position -= speed;
            // Reset posisi jika sudah geser setengah panjang konten
            if (Math.abs(position) >= scrollContent.scrollWidth / 3) {
                position = 0;
            }
            scrollContent.style.transform = `translateX(${position}px)`;
            requestAnimationFrame(smoothScroll);
        }
        smoothScroll();

        // Pause saat hover
        scrollContent.addEventListener('mouseenter', () => speed = 0);
        scrollContent.addEventListener('mouseleave', () => speed = 0.5);

        // Drag manual
        let isDown = false;
        let startX;
        scrollContent.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX;
        });
        scrollContent.addEventListener('mouseup', () => isDown = false);
        scrollContent.addEventListener('mouseleave', () => isDown = false);
        scrollContent.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            const move = e.pageX - startX;
            startX = e.pageX;
            position += move;
        });
    });

    // redirect dan share social media
    function shareTo(platform) {
        const url = window.location.href;
        const text = "Cek halaman ini: ";
        let shareUrl = "";

        switch (platform) {
            case 'wa':
                shareUrl = `https://wa.me/?text=${encodeURIComponent(text + url)}`;
                break;
            case 'fb':
                shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
                break;
            case 'ig':
                shareUrl = `https://www.instagram.com/direct/inbox/`;
                alert("Kamu akan diarahkan ke Instagram Direct. Silakan tempel link halaman ini secara manual.");
                break;
            default:
                alert("Platform tidak dikenali.");
                return;
        }

        window.open(shareUrl, "_blank");
    }
</script>
</body>

</html>
