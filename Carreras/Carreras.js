console.log('correcto');
let datos;

document.querySelector('#buscar').addEventListener('click', function () {
    const filtro = document.getElementById('filtro').value;
    buscarProductos(filtro);
});

traerDatos();

function traerDatos() {
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'Carreras.json', true);
    xhttp.send();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
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
}

function mostrarProductos(productos) {
    let res = document.querySelector('#res');
    res.innerHTML = '';

    for (let producto of productos) {
        if (producto.nombre) {
            const card = document.createElement('div');
            card.className = 'col-md-4 text-center producto';
            card.innerHTML = `
                <div class="card">
                    <div class="card-content">
                        <h3 class="nombre">${producto.nombre}</h3>
                    </div>
                </div>
            `;
            card.addEventListener('click', () => mostrarModal(producto));
            res.appendChild(card);
        }
    }
}

function mostrarModal(producto) {
    const { nombre, descripcion, imagen } = producto;

    // Asignar el contenido del modal
    document.getElementById('modalNombre').innerText = nombre;
    document.getElementById('modalDescripcion').innerText = descripcion;
    document.getElementById('modalImagen').src = imagen;

    // Mostrar el modal
    document.getElementById('myModal').style.display = 'block';

    // Desactivar scroll en el body
    document.body.style.overflow = 'hidden';
}

document.querySelector('.close').addEventListener('click', () => {
    document.getElementById('myModal').style.display = 'none';

    // Reactivar scroll en el body
    document.body.style.overflow = 'auto';
});

window.addEventListener('click', (event) => {
    const modal = document.getElementById('myModal');
    if (event.target === modal) {
        modal.style.display = 'none';

        // Reactivar scroll en el body
        document.body.style.overflow = 'auto';
    }
});

function buscarProductos(filtro) {
    const productosFiltrados = datos.filter(producto =>
        producto.nombre.toLowerCase().includes(filtro.toLowerCase()) ||
        producto.acronimo.toLowerCase().includes(filtro.toLowerCase())
    );
    mostrarProductos(productosFiltrados);
}

function filtrarPorCategoria(categoria) {
    const productosFiltrados = datos.filter(producto =>
        producto[categoria] === "si"
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
