// function creer(element) {
//     return document.createElement(element)
// }


// function recup(parent, el) {
//     return parent.appenchild(el);
// }
// let text = document.getElementById('text');
// let all = [];
// let bon = [];
// let parole = null;

fetch("proxy/songs/10", {
    headers: {
        "Content-Type": "application/json"
    },
})
    .then(response => response.json())
    .then(data => {
        all.push(data)
        // console.log(all['0']['response']['full_title']);
        // bon.push(all['0']['response']['full_title']);
        console.log(data);


    })

// parole = bon['0'];
    
