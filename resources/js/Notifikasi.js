document.addEventListener("DOMContentLoaded", function () {
    const notifBtn = document.getElementById("notif-btn");
    const notifMenu = document.getElementById("notif-menu");

    console.log(notifBtn, notifMenu); // DEBUG

    if (!notifBtn || !notifMenu) return;

    notifBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        notifMenu.classList.toggle("hidden");
    });

    document.addEventListener("click", function (e) {
        if (!notifMenu.contains(e.target) && !notifBtn.contains(e.target)) {
            notifMenu.classList.add("hidden");
        }
    });
});