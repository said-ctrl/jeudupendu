

fetch("proxy/songs/85", {
    headers: {
        "Content-Type": "application/json"
    },
})
.then(response => response.json())
.then(data => console.log(data));