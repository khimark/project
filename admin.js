
const products = [];
const orders = []; // This would typically come from a database
const users = []; // This would also typically come from a database

document.getElementById('product-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const name = document.getElementById('product-name').value;
    const price = document.getElementById('product-price').value;
    const image = document.getElementById('product-image').files[0];

    const product = {
        id: products.length,
        name,
        price,
        image: URL.createObjectURL(image) // For demo purposes
    };

    products.push(product);
    displayProducts();
    this.reset();
});

function displayProducts() {
    const productList = document.getElementById('product-list');
    productList.innerHTML = '';
    products.forEach(product => {
        const productItem = document.createElement('div');
        productItem.className = 'product-item';
        productItem.innerHTML = `
            <h3>${product.name}</h3>
            <p>Price: Ksh ${product.price}</p>
            <img src="${product.image}" alt="${product.name}" style="width: 100px;">
            <button onclick="removeProduct(${product.id})">Remove</button>
        `;
        productList.appendChild(productItem);
    });
}

function removeProduct(id) {
    const index = products.findIndex(product => product.id === id);
    if (index > -1) {
        products.splice(index, 1);
        displayProducts();
    }
}

// Logout functionality
document.getElementById('logout-button').addEventListener('click', function() {
    // Clear any session data if necessary
    // For example, if you are using localStorage or sessionStorage
    // localStorage.removeItem('user'); // Uncomment if you have user data stored

    // Redirect to the home page
    window.location.href = 'index.html'; // Change this to your actual home page URL
});

// Placeholder functions for orders and users
function displayOrders() {
    const orderList = document.getElementById('order-list');
    orderList.innerHTML = 'No orders yet.'; // Replace with actual order data
}

function displayUsers() {
    const userList = document.getElementById('user-list');
    userList.innerHTML = 'No users yet.'; // Replace with actual user data
}

// Call display functions on page load
displayOrders();
displayUsers();