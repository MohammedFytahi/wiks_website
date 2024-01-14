<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="flex justify-center mt-5">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <?php flash('register_success'); ?>
            <h2 class="text-2xl font-bold mb-4">Login</h2>
            <p>Please fill in your credentials to log in</p>
            <form action="<?php echo URLROOT; ?>/users/login" method="post">
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
                        Login
                    </button>
                    <a href="<?php echo URLROOT; ?>/users/register" class="text-gray-600 hover:underline">No account? Register</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
