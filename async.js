function logMessage(message){
    const output = document.getElementById("output");
    const log = document.createElement("p");
    log.textContent = message;
    output.appendChild(log);
}

async function afficherUtilisateurs() {
    logMessage("Début de la fonction Asynchrone");

    try {
        const response = await fetch('http://jsonplaceholder.typicode.com/users');
        const users = await response.json();

        document.getElementById('utilisateurs').innerHTML = users
            .map(user => `<li><strong>${user.name}</strong> - ${user.email}</li>`)
            .join('');

        logMessage("Fin de la fonction Asynchrone");
    }
    catch(error) {
        logMessage("Erreur de la fonction Asynchrone");
    }
}

afficherUtilisateurs();
logMessage("Début de la fonction Synchrone");