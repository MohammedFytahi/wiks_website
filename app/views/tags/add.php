<?php require APPROOT . '/views/inc/header.php'; ?>

<a href="<?php echo URLROOT; ?>/tags/index2" class="bg-red-500 text-white px-4 py-2 mt-10 inline-flex items-center"><i class="fa fa-backward mr-2"></i> Back</a>

<div class="bg-white mt-5 p-5 rounded-md shadow-md">
    <h2 class="text-3xl font-bold mb-4">ADD Tags</h2>

    <form action="<?php echo URLROOT; ?>/Tags/add" method="post" onsubmit="return validateForm()">
        <div class="mb-4">
            <label for="tag_name" class="block text-gray-700 text-sm font-bold mb-2">Tag Name: <sup>*</sup></label>
            <input type="text" name="tag_name" id="tag_name" class="w-full p-2 border rounded-md <?php echo (!empty($data['title_err'])) ? 'border-red-500' : ''; ?>" value="<?php echo $data['tag_name']; ?>">

            <?php if (!empty($data['title_err'])) : ?>
    <span class="text-red-500" id="tag_name_err">
        <?php echo $data['title_err']; ?>
    </span>
    <?php endif; ?>

        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">Select Category: <sup>*</sup></label>
            <select name="category_id" id="category_id" class="w-full p-2 border rounded-md <?php echo (!empty($data['category_id_err'])) ? 'border-red-500' : ''; ?>">
                <?php foreach ($data['categories'] as $category) : ?>
                    <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
                <?php endforeach; ?>
            </select>

            <?php if (!empty($data['category_id_err'])) : ?>
                <p class="text-red-500 text-xs italic" id="category_id_err"><?php echo $data['category_id_err']; ?></p>
            <?php endif; ?>
        </div>

        <input type="submit" value="Create" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
    </form>
</div>

<script>
    function validateForm() {
        var tagInput = document.getElementById('tag_name');
        var categorySelect = document.getElementById('category_id');
        var tagErr = document.getElementById('tag_name_err'); // Fix the ID here
        var categoryErr = document.getElementById('category_id_err'); // Keep the ID consistent

        // Reset previous errors
        tagErr.textContent = '';
        categoryErr.textContent = '';

        // Validate tag name
        if (tagInput.value.trim() === '') {
            tagErr.textContent = 'Please enter a name';
            return false;
        }

        // Validate category
        if (categorySelect.value === '') {
            categoryErr.textContent = 'Please select a category';
            return false;
        }

        return true;
    }
</script>


<?php require APPROOT . '/views/inc/footer.php'; ?>
