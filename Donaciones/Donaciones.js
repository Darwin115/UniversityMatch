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
        if (producto.nombre && producto.foto) { // Asegúrate de que tengas un precio en tus datos
            res.innerHTML += `
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="${producto.foto}" alt="${producto.nombre}">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href="#"><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="#">${producto.nombre}</a>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        ${'<small class="fa fa-star text-primary mr-1"></small>'.repeat(5)}<small>(99)</small>
                    </div>
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
