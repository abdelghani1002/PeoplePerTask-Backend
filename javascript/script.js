$(document).ready(function () {
    /* Dark & light theme */
    let activeDark = () => {
        localStorage.setItem('theme', 'dark');
        $(".darkmodeBtn").addClass('hidden');
        $(".lightmodeBtn")[0].classList.remove('hidden');
        document.documentElement.classList.add("dark")
    }

    let activeLight = () => {
        localStorage.setItem('theme', 'light');
        $(".lightmodeBtn").addClass('hidden');
        $(".darkmodeBtn")[0].classList.remove('hidden');
        document.documentElement.classList.remove("dark")
    }

    if (localStorage.theme) {
        localStorage.theme === "dark" ? activeDark() : null
        localStorage.theme === "light" ? activeLight() : null
    }

    $(".darkmodeBtn").click(() => activeDark());

    $(".lightmodeBtn").click(() => activeLight());

    /* Mobile Navbar */
    if (window.innerWidth < 1023) {
        $("#navbar").hide(0);
    }

    $("#hamberger_btn").click(function () {
        $("#navbar").slideToggle(500);
    })

    function test_nav_status() {
        if (window.innerWidth >= 1023) {
            $("#navbar").show(0);
        }

        setTimeout(test_nav_status, 500)
    }
    test_nav_status();

});
