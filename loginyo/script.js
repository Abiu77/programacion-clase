const loginForm = document.getElementById('login-form');
const errorMessage = document.getElementById('error-message');

loginForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === 'YO' && password === 'YO') {
        alert('Inicio de sesión exitoso');
    } else {
        errorMessage.textContent = 'Credenciales incorrectas. Inténtelo de nuevo.';
    }
});


const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");
const registerModal = document.getElementById("registerModal");
const registrationForm = document.getElementById("registrationForm");

openModalBtn.addEventListener("click", () => {
    registerModal.style.display = "block";
});

closeModalBtn.addEventListener("click", () => {
    registerModal.style.display = "none";
});

window.addEventListener("click", (event) => {
    if (event.target === registerModal) {
        registerModal.style.display = "none";
    }
});

registrationForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const apellido = document.getElementById("apellido").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const telefono = document.getElementById("telefono").value;

    // Enviar los datos a un archivo PHP para el registro en la base de datos
    fetch("hola.php", {
        method: "POST",
        body: new URLSearchParams({ username, apellido, email, password, telefono}),
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                alert("Registro exitoso");
                registerModal.style.display = "none";
            } else {
                alert("Error en el registro");
            }
        })
        .catch((error) => {
            console.error(error);
        });
});
