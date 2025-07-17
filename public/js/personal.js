// is file me modal se quantity update or minus plus ka kam ho raha he or modal ki left side wali image change ka kam ho raha he 
// ye details waly modal ka quantity plus or minus ka js he 

document.addEventListener("DOMContentLoaded", function () {
    const allProducts = document.querySelectorAll('input[id^="qtyInput_"]');

    allProducts.forEach(input => {
        const productId = input.id.split("_")[1];

        const plusBtn = document.getElementById("plusBtn_" + productId);
        const minusBtn = document.getElementById("minusBtn_" + productId);
        const qtyInput = document.getElementById("qtyInput_" + productId);

        plusBtn.addEventListener("click", () => {
            qtyInput.value = parseInt(qtyInput.value) + 1;
        });

        minusBtn.addEventListener("click", () => {
            if (parseInt(qtyInput.value) > 1) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
            }
        });
    });
});
//  details waly modal ka quantity plus or minus ka js yaha pr khatm ho gaya 

// <!--  Har product ke liye separate image change function -->
   window.changeImage = function (productId, src) {
        const image = document.getElementById("mainImage" + productId);
        if (image) {
            image.src = src;
        }
    };






