document.addEventListener("DOMContentLoaded", function () {
  const quantityInput = document.querySelector(".quantity-input");
  const addToCartLink = document.querySelector(".add-to-cart-link");

  updateAddToCartLink();

  document.querySelectorAll(".btn-minus, .btn-plus").forEach((button) => {
    button.addEventListener("click", function () {
      const input = this.closest(".quantity").querySelector(".quantity-input");
      let value = parseInt(input.value);

      input.value = value;
      updateAddToCartLink();
    });
  });

  function updateAddToCartLink() {
    const productId = addToCartLink.getAttribute("data-product-id");
    const quantity = quantityInput.value;
    addToCartLink.href = `/add_to_cart?product_id=${productId}&quantity=${quantity}`;
  }
});
