document.addEventListener("DOMContentLoaded", function (event) {

    jQuery('#myModal').modal({ show: false })

    const displayModal = () => {
        jQuery('#myModal').modal('show');
    }

    const buildHtml = (data) => {
        let html = `
            <img alt="image" src="${data.image_1}">
            ${data.image_2 ? `<img alt="image" src="${data.image_2}">` : ''}
            <div class="pricing-option boxed boxed--sm bg--white text-center">
                <h6>${data.title}</h6>
                <div class="pricing-option__price">
                        <span>$</span>
                        <span class="h1">${data.price}</span>
                </div>
                <p>${data.description}</p>
            </div>
        `
        document.getElementById('product-print').innerHTML = html
        displayModal()
    }

    const handlePurchase = (event) => {
        const post_id = event.currentTarget.closest('.purchase-btn').getAttribute('data-postId')
        const nonce = event.currentTarget.closest('.purchase-btn').getAttribute('data-nonce')

        jQuery.ajax({
            type: "post",
            dataType: "json",
            url: shop_ajax_object.ajax_url,
            data: { action: "post_purchase_product", post_id: post_id, nonce: nonce },
            success: function (response) {
                buildHtml(response)
            },
            error: function (jqXHR, status, err) {
                alert(err);
            },
        })        
    }

    const handlePurchaseSubmit = (event) => {
        
        const leftEye = document.getElementById('left-eye')
        const test1 = document.getElementById('test1')
        const test2 = document.getElementById('test2')
        const test3 = document.getElementById('test3')
        const rightEye = document.getElementById('right-eye')       
        const test_1 = document.getElementById('test-1')
        const test_2 = document.getElementById('test-2')
        const test_3 = document.getElementById('test-3')

        const values = {}

        values.leftEye = leftEye.options[leftEye.selectedIndex].value
        values.test1Val = test1.options[test1.selectedIndex].value
        values.test2Val = test2.options[test2.selectedIndex].value
        values.test3Val = test3.options[test3.selectedIndex].value
        values.rightEyeVal = rightEye.options[rightEye.selectedIndex].value
        values.test_1Val = test_1.options[test_1.selectedIndex].value
        values.test_2Val = test_2.options[test_2.selectedIndex].value
        values.test_3Val = test_3.options[test_3.selectedIndex].value

        // check that user entered values
        for (let item in values) {
            const value = values[item]
            if (value.length > 0) {
            } else {
                alert('All select fields need a value.')
                break;
            }
        }

        
    }
    
    const purchaseBtns = document.querySelectorAll('.purchase-btn')

    for (let btn of purchaseBtns) {
        btn.addEventListener('click', handlePurchase)
    }

    document.getElementById('purchaseSend').addEventListener('click', handlePurchaseSubmit)

    
    
});