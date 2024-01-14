<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="flex justify-center mt-5">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-4">Create An Account</h2>
            <p class="mb-4">Please fill out this form to register with us</p>
            <form action="<?php echo URLROOT; ?>/users/register" method="post">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Name: <sup>*</sup></label>
                    <input type="text" name="username" class="form-input w-full <?php echo (!empty($data['name_err'])) ? 'border-red-500' : ''; ?>" value="<?php echo $data['username']; ?>">
                    <span class="text-red-500 text-xs"><?php echo $data['name_err']; ?></span>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email: <sup>*</sup></label>
                    <input type="email" name="email" class="form-input w-full <?php echo (!empty($data['email_err'])) ? 'border-red-500' : ''; ?>" value="<?php echo $data['email']; ?>">
                    <span class="text-red-500 text-xs"><?php echo $data['email_err']; ?></span>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password: <sup>*</sup></label>
                    <input type="password" name="password" class="form-input w-full <?php echo (!empty($data['password_err'])) ? 'border-red-500' : ''; ?>" value="<?php echo $data['password']; ?>">
                    <span class="text-red-500 text-xs"><?php echo $data['password_err']; ?></span>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-green hover:bg-green-600">
                        Register
                    </button>
                    <a href="<?php echo URLROOT; ?>/users/login" class="text-gray-600 hover:underline">Have an account? Login</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form");

        form.addEventListener("submit", function (event) {
            let isValid = true;

            const nameRegex = /^[A-Za-z\s]+$/;
            const usernameInput = document.querySelector('input[name="username"]');
            if (!nameRegex.test(usernameInput.value)) {
                displayError(usernameInput, "Le nom ne peut contenir que des lettres et des espaces");
                isValid = false;
            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const emailInput = document.querySelector('input[name="email"]');
            if (!emailRegex.test(emailInput.value)) {
                displayError(emailInput, "Veuillez entrer une adresse e-mail valide");
                isValid = false;
            }

            const passwordRegex = /^.{6,}$/;
            const passwordInput = document.querySelector('input[name="password"]');
            if (!passwordRegex.test(passwordInput.value)) {
                displayError(passwordInput, "Le mot de passe doit contenir au moins 6 caractères");
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault();
            }
        });

        function displayError(input, message) {
            const formGroup = input.closest(".mb-4");
            const errorSpan = formGroup.querySelector(".text-red-500");

            input.classList.add("border-red-500");
            errorSpan.textContent = message;
        }
    });
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>
