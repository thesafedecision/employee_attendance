function recordAction(action) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "record_action.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("action=" + action);
}

function logout() {
    window.location.href = "logout.php";
}