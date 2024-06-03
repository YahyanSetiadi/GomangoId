window.addEventListener("DOMContentLoaded", function () {
  // Fetch the products from the database
  fetch("get_products.php")
    .then((response) => response.json())
    .then((data) => {
      const produkSelect = document.getElementById("produk");
      data.forEach((product) => {
        const option = document.createElement("option");
        option.value = product.id;
        option.textContent = product.name;
        produkSelect.appendChild(option);
      });
    })
    .catch((error) => console.log(error));
});
