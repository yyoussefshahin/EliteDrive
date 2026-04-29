function viewCar(page) {

    if (!page) {
        alert("Car details page coming soon!");
        return;
    }

    let loggedIn = localStorage.getItem("loggedIn");

    if (loggedIn === "true") {
        window.location.href = page;
    } else {
        alert("Please login to view car details!");
        window.location.href = "login.html";
        return; 
    }
}
