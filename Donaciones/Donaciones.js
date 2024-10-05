document.addEventListener('DOMContentLoaded', function() {
    traerDatos();
});

function traerDatos() {
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'Donaciones.json', true);

    xhttp.onreadystatechange = function () {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                try {
                    datos = JSON.parse(this.responseText);
                    mostrarProductos(datos);
                } catch (error) {
                    console.error('Error al parsear JSON:', error);
                }
            } else {
                console.error('Error en la solicitud:', this.status);
            }
        }
    };

    xhttp.send();
}

function mostrarProductos(productos) {
    let res = document.querySelector('#res');
    res.innerHTML = '';
    productos.forEach(producto => {
        if (producto.nombre && producto.marca && producto.estado && producto.tamaño && producto.peso && producto.material && producto.color && producto.descripcion && producto.foto) {
            res.innerHTML += `
            <div class="producto">
                <div class="imagen">
                    <a href="${producto.url || '#'}">
                        <img src="${producto.foto}" alt="${producto.nombre}">
                    </a>
                </div>
                <div class="info">
                    <h2>${producto.nombre}</h2>
                    <div class="detalle">
                        <span class="etiqueta">Marca:</span> ${producto.marca}
                    </div>
                    <div class="detalle">
                        <span class="etiqueta">Estado:</span> ${producto.estado}
                    </div>
                    <div class="detalle">
                        <span class="etiqueta">Tamaño:</span> ${producto.tamaño}
                    </div>
                    <div class="detalle">
                        <span class="etiqueta">Peso:</span> ${producto.peso}
                    </div>
                    <div class="detalle">
                        <span class="etiqueta">Material:</span> ${producto.material}
                    </div>
                    <div class="detalle">
                        <span class="etiqueta">Color:</span> ${producto.color}
                    </div>
                    <p class="descripcion">${producto.descripcion}</p>
                </div>
            </div>
            `;
        }
    });
}

function buscarProductos(filtro) {
    if (!datos || datos.length === 0) return; // Evita errores si no hay datos
    const productosFiltrados = datos.filter(producto =>
        producto.nombre.toLowerCase().includes(filtro.toLowerCase())
    );
    mostrarProductos(productosFiltrados);
}

function filtrarPorCategoria(categoria) {
    if (!datos || datos.length === 0) return; // Evita errores si no hay datos
    const productosFiltrados = datos.filter(producto =>
        producto[categoria] === "si"  // Verifica que esta lógica se alinee con tus datos
    );
    mostrarProductos(productosFiltrados);
}

document.getElementById('filtrar').addEventListener('change', function () {
    const categoriaSeleccionada = this.value;
    if (categoriaSeleccionada !== 'ninguno') {
        filtrarPorCategoria(categoriaSeleccionada);
    } else {
        mostrarProductos(datos);
    }
});
