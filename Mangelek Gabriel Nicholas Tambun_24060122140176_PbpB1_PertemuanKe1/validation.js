document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('productForm');
    const category = document.getElementById('category');
    const subCategory = document.getElementById('subCategory');
    const wholesaleYes = document.getElementById('wholesaleYes');
    const wholesaleNo = document.getElementById('wholesaleNo');
    const wholesalePrice = document.getElementById('wholesalePrice');
    const captchaText = document.getElementById('captchaText');
    const captcha = document.getElementById('captcha');

    const subCategoryOptions = {
        Baju: ['Baju Pria', 'Baju Wanita', 'Baju Anak'],
        Elektronik: ['Mesin Cuci', 'Kulkas', 'AC'],
        'Alat Tulis': ['Kertas', 'Map', 'Pulpen']
    };

    // Populate subcategories based on selected category
    category.addEventListener('change', () => {
        const selectedCategory = category.value;
        const options = subCategoryOptions[selectedCategory] || [];
        
        subCategory.innerHTML = '<option value="">Pilih Sub Kategori</option>';
        options.forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option;
            newOption.textContent = option;
            subCategory.appendChild(newOption);
        });
    });

    // Handle wholesale price field based on the selected wholesale option
    wholesaleYes.addEventListener('change', () => {
        wholesalePrice.disabled = false;
        wholesalePrice.required = true;
    });

    wholesaleNo.addEventListener('change', () => {
        wholesalePrice.disabled = true;
        wholesalePrice.value = ''; // Clear the value when disabled
        wholesalePrice.required = false;
    });

    // Generate and display captcha
    function generateCaptcha() {
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        let result = '';
        for (let i = 0; i < 5; i++) {
            result += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        return result;
    }

    const captchaCode = generateCaptcha();
    captchaText.textContent = captchaCode;

    // Form validation
    form.addEventListener('submit', (event) => {
        const selectedShipping = document.querySelectorAll('input[name="shippingServices"]:checked');

        if (selectedShipping.length < 3) {
            alert('Pilih minimal 3 jasa kirim!');
            event.preventDefault();
        }

        if (captcha.value !== captchaCode) {
            alert('Captcha tidak sesuai!');
            event.preventDefault();
        } else {
            alert('Form submitted successfully!');
        }
    });
});
