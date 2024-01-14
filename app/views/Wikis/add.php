<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>



    <title>
        <?php echo SITENAME; ?>
    </title>
</head>





    <body>

    
<?php flash('wiki_message'); ?>

<div class="flex items-center justify-center my-8">
    <h1 class="text-2xl font-extrabold text-blue-500">Create a New Wiki</h1>
</div><a href="<?php echo URLROOT; ?>/wikis/index2" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-10">
        <i class="fa fa-backward mr-2"></i> Back
    </a>

<form action="<?php echo URLROOT; ?>/wikis/add" method="post" class="max-w-md mx-auto mb-10 bg-white p-8 rounded-lg shadow-md" onsubmit="return validateForm(event)">

    <div class="mb-6">
        <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
        <input type="text" name="title" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" required>
        <span class="text-red-500 text-xs"> <?php echo flash('title_err'); ?></span>
    </div>

    <div class="mb-6">
        <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">Content</label>
        <textarea name="content" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" required></textarea>
        <span class="text-red-500 text-xs"><?php echo flash('content_err'); ?></span>
    </div>

    <div class="mb-6">
        <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">Category</label>
        <select name="category_id" id="categoryId" class="form-select w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" required>
            <?php foreach ($data['categories'] as $category): ?>
                <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
            <?php endforeach; ?>
        </select>
        <span class="text-red-500 text-xs"><?php echo flash('category_err'); ?></span>
    </div>

    <div class="mb-3">
        <label for="selectedTagsInput" class="block text-sm font-semibold text-gray-700 mb-2">Tags</label>
        <input type="hidden" id="selectedTagsInput" name="selectedTagsInput" class="form-input" required>
        <span class="text-red-500 text-xs"><?php echo flash('tags_err'); ?></span>

        <div id="tagsContainer" class="flex flex-wrap gap-2"></div>
    </div>

    <div class="flex justify-end">
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700" type="submit" name="submit">Valider</button>
    </div>

</form>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var selectedTags = [];
        var tagsContainer = document.getElementById("tagsContainer");
        var categorySelect = document.getElementById("categoryId");

        function updateTags() {
            tagsContainer.innerHTML = "";

            var categoryId = categorySelect.value;
            var tags = <?php echo json_encode($data['categoryTags']); ?>[categoryId];

            if (tags) {
                tags.forEach(function (tag) {
                    var tagButton = document.createElement("button");
                    tagButton.textContent = tag.tag_name;
                    tagButton.type = "button";
                    tagButton.classList.add("bg-green-400", "m-2", "text-white", "text-sm", "font-medium", "me-2", "cursor-pointer", "px-3", "py-1", "rounded");
                    tagButton.dataset.tagId = tag.tag_id;

                    tagButton.addEventListener("click", function () {

                        this.classList.toggle("bg-blue-500");
                        var index = selectedTags.indexOf(tag.tag_id);
                        if (index === -1) {
                            selectedTags.push(tag.tag_id);
                        } else {
                            selectedTags.splice(index, 1);
                        }
                        selectedTagsInput.value = JSON.stringify(selectedTags);
                        console.log(selectedTags);
                    });

                    tagsContainer.appendChild(tagButton);
                });
            }
        }

        updateTags();

        categorySelect.addEventListener("change", function () {
            selectedTags = [];
            updateTags();
        });
    });

    function validateForm(event) {
        var titleInput = document.querySelector('input[name="title"]');
        var contentInput = document.querySelector('textarea[name="content"]');
        var categorySelect = document.getElementById('categoryId');
        var tagsInput = document.getElementById('selectedTagsInput');
        var titleErr = document.querySelector('#title_err');
        var contentErr = document.querySelector('#content_err');
        var categoryErr = document.querySelector('#category_err');
        var tagsErr = document.querySelector('#tags_err');

       
        titleErr.textContent = '';
        contentErr.textContent = '';
        categoryErr.textContent = '';
        tagsErr.textContent = '';

       
        if (titleInput.value.trim() === '') {
            titleErr.textContent = 'Le titre est requis';
            event.preventDefault(); 
            return false;
        }

       
        if (contentInput.value.trim() === '') {
            contentErr.textContent = 'Le contenu est requis';
            event.preventDefault(); 
            return false;
        }

       
        if (categorySelect.value === '') {
            categoryErr.textContent = 'La catégorie est requise';
            event.preventDefault(); 
            return false;
        }

      
        if (tagsInput.value === '[]') {
            tagsErr.textContent = 'Au moins un tag est requis';
            event.preventDefault(); 
            return false;
        }

        return true; 
    }
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>
