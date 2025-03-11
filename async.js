async function afficherUtilisateurs() {
    const response = await fetch('http://jsonplaceholder.typicode.com/users');
    const users = await response.json();

    document.getElementById('utilisateurs').innerHTML = users
        .map(user => `<li><strong>${user.name}</strong> - ${user.email}</li>`)
        .join('');

}

afficherUtilisateurs();