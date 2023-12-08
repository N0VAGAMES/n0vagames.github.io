function setTitle(title = "") {
    if (title) {
    localStorage.setItem("goofyahh", title);
    document.title = localStorage.getItem("goofyahh");
    }
}