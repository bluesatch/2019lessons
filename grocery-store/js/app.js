var cart = {};
var itemTotal = 1;
var itemsPurchased = 0;
var cartItems = 0;
var quantity = 1;
function addToCart(item, price) {
    cart['item' + itemTotal] = [item, price, quantity];
    itemTotal++;
    itemsPurchased++;
    cartItems++;
    // quantity++;
    // how do i fix quantity
    // if (item)
    console.log(cart);
    var itemCount = document.getElementById('itemCount');
    itemCount.innerHTML = `<p>Items purchased: ${itemsPurchased}</p>`
    var cartCount = document.getElementById('cartCount');
    cartCount.innerText = `My Cart(${cartItems})`;
}

function checkout() {
    cartCount.innerText = `My Cart(0)`;
    //get the DOM element to use for output;
    var output = document.getElementById('output');

    //do the math operations to get subtotals, tax and totals
    var subtotal = 0;

    for (var item in cart) {
        var itemArray = cart[item];
        subtotal += itemArray[1];
    }
    var tax = .09;
    var taxTotal = subtotal * tax;
    var bill = taxTotal + subtotal;

    //output the list and totals to the screen
    var list = '';
    for (var item in cart) {
        var itemArray = cart[item];
        list += `<li>${itemArray[0]} ----- ${itemArray[1]}</li>`;
    }
    output.innerHTML = `
        <ul>
            ${list}
            <li class="li-break">Subtotal: ${subtotal.toFixed(2)}</li>
            <li>Tax: ${taxTotal.toFixed(2)}</li>
            <li>Total: ${bill.toFixed(2)}</li>
        </ul>
    `;
}

