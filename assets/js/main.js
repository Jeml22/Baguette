function setCookie(c, v) {
  document.cookie = c + "=" + JSON.stringify(v) + ";path=/";
  getCookie(c);
}

function getCookie(c) {
  let name = c + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return JSON.parse(c.substring(name.length, c.length));
    }
  }
  return "";
}

function checkCookie(c) {
  let cookie = getCookie(c);
  return cookie ? true : false;
}

// Este codigo pertenece al submene que aparece al dar clic en Nosotros en el menu de navegacion
// Obtiene el elemento que tiene la clase 'has-submenu'
const hasSubmenu = document.querySelector(".has-submenu");
// Obtiene el submenú
const submenu = document.querySelector(".submenu");
// Asegura que la propiedad display del submenú esté inicialmente establecida en 'none'
submenu.style.display = "none";

// codigo de el menu desplegable del carrito de compras
// Define la función showCartMenu para mostrar el menú del carrito
document.querySelector(".fa.fa-shopping-cart").addEventListener("click", () => {
  // Obtiene el elemento del menú del carrito por su ID
  var cartMenu = document.getElementById("cartMenu");
  // Cambia la propiedad de estilo display del menú del carrito a "block" para hacerlo visible
  cartMenu.style.display = "block";
});
// Define la función hideCartMenu para ocultar el menú del carrito
function hideCartMenu() {
  // Obtiene el elemento del menú del carrito por su ID
  var cartMenu = document.getElementById("cartMenu");
  // Cambia la propiedad de estilo display del menú del carrito a "none" para ocultarlo
  cartMenu.style.display = "none";
}

function hideCard() {
  var hideCard = document.getElementById("card");
  hideCard.style.visibility = "hidden";
}

//Codigo de la seleccion del boton pedido: domicio o ir ala tienda
// Define una función llamada 'selectButton' que toma un parámetro llamado 'button'
function selectButton(button) {
  // Obtiene una referencia a un elemento en la página con el ID "button2" y lo almacena en la variable 'button2'
  var button2 = document.getElementById("button2");
  // Obtiene una referencia a un elemento en la página con el ID "button3" y lo almacena en la variable 'button3'
  var button3 = document.getElementById("button3");
  // Elimina la clase "selected" del elemento almacenado en 'button2'
  button2.classList.remove("selected");
  // Elimina la clase "selected" del elemento almacenado en 'button3'
  button3.classList.remove("selected");
  // Agrega la clase "selected" al elemento pasado como parámetro 'button'
  button.classList.add("selected");
}

//este codigo pertenece al menu del carrito de comprar donde cada producto se añadira aqui
// Agrega un evento de clic al elemento que tiene la clase 'has-submenu'
hasSubmenu.addEventListener("click", (event) => {
  // Evita que el enlace se siga
  event.preventDefault();
  // Si el submenú está oculto (display = 'none')
  if (submenu.style.display === "none") {
    // Muestra el submenú (display = 'block')
    submenu.style.display = "block";
  } else {
    // Si el submenú está visible, lo oculta (display = 'none')
    submenu.style.display = "none";
  }
});

const productos = document.querySelectorAll('.col[data-element="producto"]');
const carrito = document.querySelector(".cart-items");

const agregarProducto = (g, id, img, nom, pre, cant) => {
  const producto = document.createElement("div");
  producto.setAttribute("class", "cart-item");
  producto.setAttribute("data-id", id);
  producto.setAttribute("data-group-element", g);
  producto.innerHTML = `
    <div>
      <div class="item-image" style="display: flex;">
        <img src="${img}" alt="${nom}">
        <div class="item-details">
          <h3>${nom}</h3>
          <p>$<span class="precio">${pre}</span></p>
        </div>
        <button class="remove-btn">X</button>
      </div>
    </div>
    <div class="item-quantity">
      <button class="quantity-btn minus-btn">-</button>
      <input type="number" class="quantity-input" value="${cant}" min="0" readonly>
      <button class="quantity-btn plus-btn">+</button>
    </div>
  `;

  carrito.appendChild(producto);

  const restarBtn = producto.querySelector(".minus-btn");
  const sumarBtn = producto.querySelector(".plus-btn");
  const eliminarBtn = producto.querySelector(".remove-btn");

  const restarProductoLocal = () => {
    cambiarCantidadProducto(producto.querySelector("input"), -1, id, g);
  };

  const sumarProductoLocal = () => {
    cambiarCantidadProducto(producto.querySelector("input"), 1, id, g);
  };

  const eliminarProductoLocal = () => {
    eliminarProductoCookie(g, id);
    restarBtn.removeEventListener("click", restarProductoLocal);
    sumarBtn.removeEventListener("click", sumarProductoLocal);
    eliminarBtn.removeEventListener("click", eliminarProductoLocal);
    producto.remove();
    calcularTotal()
  };

  restarBtn.addEventListener("click", restarProductoLocal);
  sumarBtn.addEventListener("click", sumarProductoLocal);
  eliminarBtn.addEventListener("click", eliminarProductoLocal);
};

const calcularTotal = () => {
  const productos = carrito.querySelectorAll(".cart-item")
  const subtotal = document.querySelector('[data-element="carrito-subtotal"]')

  subtotal.innerHTML = 0

  productos.forEach((p) => {
    const cant = parseInt(p.querySelector("input").value)
    const precio = parseInt(p.querySelector(".precio").innerHTML)
    subtotal.innerHTML = parseInt(subtotal.innerHTML) + (precio * cant)
  })
}

const cambiarCantidadProducto = (p, v, id, g) => {
  const enCookie = (v) => {
    const cookieCarritoArray = checkCookie("carrito")
      ? getCookie("carrito")
      : {};
    cookieCarritoArray[g][id].cantidad += v;
    setCookie("carrito", cookieCarritoArray);
  };

  p.value = parseInt(p.value) + v;
  enCookie(v);

  if (p.value < 1) {
    p.value = 1;
    enCookie(1);
  }
  calcularTotal();
};

const agregarProductoCookie = (g, id, img, nom, pre) => {
  const cookieCarritoArray = checkCookie("carrito")
    ? getCookie("carrito")
    : { [g]: {} };

  let cookieProducto = Object.hasOwn(cookieCarritoArray, g) &&  Object.hasOwn(cookieCarritoArray[g], id)? cookieCarritoArray[g][id] : false;

  if (!cookieProducto) {
    cookieProducto = {
      imagen: img,
      nombre: nom,
      precio: pre,
      cantidad: 1,
    };
  }

  setCookie("carrito", {
    ...cookieCarritoArray,
    [g]: {
      ...cookieCarritoArray[g],
      [id]: {
        ...cookieProducto,
      },
    },
  });
};

const eliminarProductoCookie = (g, id) => {
  const cookieCarritoArray = checkCookie("carrito") ? getCookie("carrito") : {};
  delete cookieCarritoArray[g][id];
  setCookie("carrito", cookieCarritoArray);
};

productos.forEach((producto) => {
  const group = producto.getAttribute("data-group-element");
  const id = producto.getAttribute("data-id");
  const img = producto.querySelector('[data-element="imagen-producto"]').src;
  const nom = producto.querySelector(
    '[data-element="nombre-producto"]'
  ).innerHTML;
  const pre = producto.querySelector(
    '[data-element="precio-producto"]'
  ).innerHTML;

  const add = producto.querySelector(".add-to-cart1");

  add.addEventListener("click", (e) => {
    const productoExistente = carrito.querySelector(
      `.cart-item[data-id="${id}"][data-group-element="${group}"]`
    );
    if (productoExistente) {
      cambiarCantidadProducto(
        productoExistente.querySelector("input"),
        1,
        id,
        group
      );
    } else {
      agregarProducto(group, id, img, nom, pre, 1);
      agregarProductoCookie(group, id, img, nom, pre);
    }
    calcularTotal();
  });
});

(() => {
  const cookieCarrito = checkCookie("carrito") ? getCookie("carrito") : {};
  for (let p in cookieCarrito) {
    for (let g in cookieCarrito[p]) {
      agregarProducto(
        p,
        g,
        cookieCarrito[p][g].imagen,
        cookieCarrito[p][g].nombre,
        cookieCarrito[p][g].precio,
        cookieCarrito[p][g].cantidad
      );
    }
  }
  calcularTotal();
})();
