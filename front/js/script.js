document.addEventListener("DOMContentLoaded", () => {
    const h1 = document.querySelector("h1");
    const form = document.querySelector("form");
    const lista = document.querySelector("ul");
    const parrafos = document.querySelectorAll("p");

    // 1. Si estamos en un ejercicio (hay formulario), agregamos boton para volver al inicio
    if (form && h1) {
        const linkVolver = document.createElement("a");
        linkVolver.href = "../index.php";
        linkVolver.textContent = "← Volver a la lista de ejercicios";
        linkVolver.className = "back-link";
        document.body.insertBefore(linkVolver, h1);

        form.classList.add("fade-in");
    }

    // 2. Animacion suave para los resultados mostrados
    parrafos.forEach((p) => {
        p.classList.add("fade-in");
    });

    // 3. Si estamos en el index.php (hay lista de ejercicios), agregamos un buscador
    if (lista && h1) {
        const buscador = document.createElement("input");
        buscador.type = "text";
        buscador.placeholder = "Buscar ejercicio por numero o nombre...";
        buscador.className = "search-box";

        document.body.insertBefore(buscador, lista);

        const items = lista.querySelectorAll("li");
        buscador.addEventListener("input", () => {
            const texto = buscador.value.toLowerCase();
            items.forEach((li) => {
                const coincide = li.textContent.toLowerCase().includes(texto);
                li.style.display = coincide ? "" : "none";
            });
        });
    }
});

