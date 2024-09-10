// async function fetchData() {
//     try {
//         const response = await fetch('https://genius.com/endpoint');
//         const data = await response.json();
        
//         // Supposons que le contenu du textarea soit dans data.content
//         document.getElementById('myTextarea').value = data.content;
//     } catch (error) {
//         console.error('Erreur:', error);
//     }
// }

// fetchData();



// function sendData() {
//     // Récupérer le contenu du textarea
//     const textareaValue = document.getElementById('myTextarea').value;

//     // Préparer les données à envoyer
//     const data = { content: textareaValue };

//     // Envoyer les données à l'API
//     fetch('https://votre-api.com/endpoint', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify(data)
//     })
//     .then(response => response.json())
//     .then(data => {
//         console.log('Succès:', data);
//     })
//     .catch((error) => {
//         console.error('Erreur:', error);
//     });
// }
