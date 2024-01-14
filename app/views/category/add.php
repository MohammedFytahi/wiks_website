<?php require APPROOT . '/views/inc/header.php'; ?>

<a href="<?php echo URLROOT; ?>/tags/index" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i class="fa fa-backward mt-10 "></i> Back</a>

<div class="card bg-gray-100 mt-5 p-5">
    <h2 class="text-3xl font-bold mb-4">ADD Category</h2>

    <form action="<?php echo URLROOT; ?>/Categories/add" method="post" onsubmit="return validateForm()">
        <div class="mb-4">
            <label for="category_name" class="block text-gray-700 text-sm font-bold mb-2">Category Name: <sup>*</sup></label>
            <input type="text" name="category_name" id="category_name" class="w-full p-2 border rounded <?php echo (!empty($data['category_name_err'])) ? 'border-red-500' : 'border-gray-300'; ?>" value="<?php echo $data['category_name']; ?>">

            <?php if (!empty($data['category_name_err'])) : ?>
                <p class="text-red-500 text-xs italic" id="category_name_err"><?php echo $data['category_name_err']; ?></p>
            <?php endif; ?>
        </div>

        <input type="submit" value="Create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>
</div>

<script>
    function validateForm() {
        var categoryNameInput = document.getElementById('category_name');
        var categoryNameErr = document.getElementById('category_name_err');

        // Reset previous errors
        categoryNameErr.textContent = '';

        // Validate category name
        if (categoryNameInput.value.trim() === '') {
            categoryNameErr.textContent = 'Please enter a category name';
            return false;
        }

        return true;
    }
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>
