function goToBrand(page) {
    const validPages = [
        "ferrari.html",
        "lamborghini.html",
        "RollsRoyce.html",
        "Porsche.html",
        "Bentley.html",
        "Maserati.html",
        "Mercedes.html"
    ];

    if (validPages.includes(page)) {
        window.location.href = page;
    } else {
        alert("Page not available yet!");
    }
}