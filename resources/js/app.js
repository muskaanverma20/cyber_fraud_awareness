/*home-jss*/
window.addEventListener("scroll", function () {
    let reveals = document.querySelectorAll(".reveal");

    reveals.forEach(el => {
        let windowHeight = window.innerHeight;
        let elementTop = el.getBoundingClientRect().top;

        if (elementTop < windowHeight - 100) {
            el.classList.add("active");
        }
    });
});

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = 1;
      entry.target.style.transform = "translate(0,0)";
    }
  });
});

document.querySelectorAll('.animate').forEach(el => {
  el.style.opacity = 0;
  observer.observe(el);
});

document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".animate");

    function checkScroll() {
        elements.forEach(el => {
            const position = el.getBoundingClientRect().top;
            const screen = window.innerHeight;

            if (position < screen - 100) {
                el.classList.add("show");
            }
        });
    }

    window.addEventListener("scroll", checkScroll);
    checkScroll();
});










document.addEventListener("DOMContentLoaded", function () {

    const sections = document.querySelectorAll("section");

    const reveal = () => {
        sections.forEach(sec => {
            let top = sec.getBoundingClientRect().top;
            let windowHeight = window.innerHeight;

            if (top < windowHeight - 100) {
                sec.style.opacity = 1;
                sec.style.transform = "translateY(0)";
            }
        });
    };

    sections.forEach(sec => {
        sec.style.opacity = 0;
        sec.style.transform = "translateY(50px)";
        sec.style.transition = "all 0.6s ease";
    });

    window.addEventListener("scroll", reveal);
});
/*alerts-page*/
document.addEventListener("DOMContentLoaded", function () {

    const searchInput = document.getElementById("searchAlert");
    const filterSelect = document.getElementById("filterType");
    const alerts = document.querySelectorAll(".alert-item");
    const noResult = document.getElementById("noResult");

    function filterAlerts() {
        const searchValue = searchInput.value.toLowerCase();
        const filterValue = filterSelect.value;

        let visible = 0;

        alerts.forEach(alert => {
            const text = alert.innerText.toLowerCase();

            const matchSearch = text.includes(searchValue);
            const matchFilter = filterValue === "all" || alert.classList.contains(filterValue);

            if (matchSearch && matchFilter) {
                alert.style.display = "block";
                visible++;
            } else {
                alert.style.display = "none";
            }
        });

        noResult.style.display = visible === 0 ? "block" : "none";
    }

    searchInput.addEventListener("input", filterAlerts);
    filterSelect.addEventListener("change", filterAlerts);

});
/*identity */
document.querySelectorAll('.portal-item').forEach(item => {
    item.style.transition = "transform 0.3s ease";
    item.addEventListener('mouseenter', () => {
        item.style.transform = "translateY(-5px)";
    });
    item.addEventListener('mouseleave', () => {
        item.style.transform = "translateY(0)";
    });
});
/*payment*/
document.querySelectorAll('.cpf-card').forEach(card => {
    card.addEventListener('click', function() {
        console.log("Card clicked: " + this.querySelector('.cpf-title').innerText);
    });
});

/*terms-page*/
document.querySelectorAll('.link-item').forEach(link => {
    link.addEventListener('click', function(e) {
        console.log("Navigating to: " + this.innerText);
    });
});

