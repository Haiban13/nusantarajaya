  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script >
    document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
        let target = parseInt(counter.getAttribute('data-target'));
        counter.textContent = "0"; // mulai dari 0
        let duration = 2000; // durasi total animasi (ms)
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
  </script>
</body>
</html>
