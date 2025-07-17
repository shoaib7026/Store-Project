// is page me sirf cart ka kam he cart page ka jis me product qunatity update hony pr price bhi update ho rahi he or total calclulation bhi ho rahi he or product remove wala kam bhi isi me he 

document.addEventListener("DOMContentLoaded", function () {
    const allQtyInputs = document.querySelectorAll("input[id^='qtyInput-cart_']");

    allQtyInputs.forEach((input) => {
        const productId = input.id.split("_")[1];

        const plusBtn = document.getElementById("plusBtn-cart_" + productId);
        const minusBtn = document.getElementById("minusBtn-cart_" + productId);
        const qtyInput = document.getElementById("qtyInput-cart_" + productId);
        const removeBtn = document.getElementById("removeBtn-cart_" + productId);

        // ➕ Plus
        plusBtn.addEventListener("click", function () {
            qtyInput.value = parseInt(qtyInput.value) + 1;
            updateCartQuantity(productId, qtyInput.value);
        });

        // ➖ Minus
        minusBtn.addEventListener("click", function () {
            if (parseInt(qtyInput.value) > 1) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
                updateCartQuantity(productId, qtyInput.value);
            }
        });

        // ❌ Remove
            // ❌ Remove
        removeBtn.addEventListener("click", function () {
            Swal.fire({
                title: "Are you sure?",
                text: "This product will be removed from your cart!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, remove it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/remove-from-cart/${productId}`, {
                        method: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                        },
                    })
                        .then((res) => res.json())
                        .then((data) => {
                            if (data.success) {
                                const row = document.getElementById("row_" + productId);
                                row.remove();

                                const totalEl = document.getElementById("totalAmount");
                                totalEl.innerText = "PKR:" + data.total;

                                // ✅ Update cart badge
                                const cartBadge = document.getElementById("cart-count-badge");
                                if (cartBadge) {
                                    if (data.cartCount > 0) {
                                        cartBadge.innerText = data.cartCount;
                                    } else {
                                        cartBadge.remove();
                                    }
                                }

                                if (data.total === 0) {
                                    document.querySelector("table").remove();
                                    totalEl.parentElement.innerHTML = `<div class="alert alert-warning">Your cart is empty.</div>`;
                                }

                               Swal.fire({
                                    title: "Removed!",
                                    text: "Product has been removed.",
                                    icon: "success",
                                    timer: 3000, // 3 seconds
                                    showConfirmButton: true,
                                });

                            }
                        });
                }
            });
        });
    });
});

// ✅ AJAX function for updating quantity
function updateCartQuantity(productId, newQty) {
    fetch(`/update-cart/${productId}`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
        },
        body: JSON.stringify({
            quantity: newQty,
        }),
    })
        .then((res) => res.json())
        .then((data) => {
            // ✅ Subtotal update karo
            const subtotalEl = document.getElementById("subtotal_" + productId);
            subtotalEl.innerText = "PKR:" + data.subtotal;

            // ✅ Total update karo
            const totalEl = document.getElementById("totalAmount");
            totalEl.innerText = "PKR:" + data.total;
        });
}
