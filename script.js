
    document.addEventListener("DOMContentLoaded", () => {
        function calcularDiasRestantes(fechaObjetivo) {
            const fechaActual = new Date();
            const diferenciaTiempo = new Date(fechaObjetivo) - fechaActual;
            const diasRestantes = Math.ceil(diferenciaTiempo / (1000 * 60 * 60 * 24));
            return diasRestantes;
        }

        const fechaObjetivo = "2025-12-11"; // Cambia por tu fecha objetivo
        const diasRestantes = calcularDiasRestantes(fechaObjetivo);

        document.getElementById("contador-numero").innerText = diasRestantes;
    });

	document.addEventListener("DOMContentLoaded", () => {
		const icons = document.querySelectorAll(".icon-footer");
		const popup = document.getElementById("popup");
		const popupImage = document.getElementById("popup-image");
		const popupTitle = document.getElementById("popup-title");
		const closeButton = popup.querySelector(".close");
	
		// Evento para abrir la ventana emergente
		icons.forEach((icon) => {
			icon.addEventListener("click", () => {
				const imagenId = icon.parentElement.dataset.imagen;
				popupImage.src = `Imagenes/imagenesGaleria/${imagenId}.jpg`;
				popupTitle.textContent=`${imagenId}`;
				popup.style.display = "block";
			});
		});
	
		// Evento para cerrar la ventana emergente
		closeButton.addEventListener("click", () => {
			popup.style.display = "none";
		});
	
		// Cerrar la ventana emergente al hacer clic fuera de ella
		window.addEventListener("click", (event) => {
			if (event.target === popup) {
				popup.style.display = "none";
			}
		});
	});
	
document.addEventListener("DOMContentLoaded", () => {
	document.getElementById("highlighted-word").addEventListener("click", () => {
		const rainContainer = document.getElementById("rain-container");
	
		for (let i = 0; i < 50; i++) {
			const rainText = document.createElement("div");
			rainText.classList.add("rain-text");
			rainText.textContent = "Futura Esposa";
	
			// Posiciones iniciales aleatorias en X y Y
			const startPositionX = Math.random() * window.innerWidth;
			const startPositionY = Math.random() * window.innerHeight - 100; // Evita caer desde muy abajo
	
			// Estilo inicial
			rainText.style.left = `${startPositionX}px`;
			rainText.style.top = `${startPositionY}px`;
	
			// Duración aleatoria de la animación
			const animationDuration = 3 + Math.random() * 3; // Entre 3 y 6 segundos
			rainText.style.animationDuration = `${animationDuration}s`;
	
			// Añade el texto al contenedor
			rainContainer.appendChild(rainText);
	
			// Elimina el texto después de la animación
			rainText.addEventListener("animationend", () => {
				rainText.remove();
			});
		}
	});	
});