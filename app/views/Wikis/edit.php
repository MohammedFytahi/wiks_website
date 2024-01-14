
<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/wikis/index2" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-10">
        <i class="fa fa-backward mr-2"></i> Back
    </a>

<div class="container mx-auto my-8">
    <h1 class="text-3xl font-bold mb-6">Edit Wiki</h1>

    <form action="<?php echo URLROOT; ?>/wikis/edit/<?php echo $data['wiki']->wiki_id; ?>" method="post" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">

        <div class="mb-4">
            <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
            <input type="text" name="title" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" value="<?php echo $data['wiki']->title; ?>">
            <span class="text-red-500"><?php echo $data['title_err']; ?></span>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">Content</label>
            <textarea name="content" class="form-textarea w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500"><?php echo $data['wiki']->content; ?></textarea>
            <span class="text-red-500"><?php echo $data['content_err']; ?></span>
        </div>

        <div class="mb-4">
            <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">Category</label>
            <select name="category_id" class="form-select w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500">
                <?php foreach ($data['categories'] as $category): ?>
                    <option value="<?php echo $category->category_id; ?>" <?php echo ($category->category_id == $data['wiki']->category_id) ? 'selected' : ''; ?>><?php echo $category->category_name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-4">
            <label for="tags" class="block text-sm font-semibold text-gray-700 mb-2">Tags</label>
            <div class="relative">
                <select name="tags[]" id="tags" class="form-multiselect block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" multiple>
                <?php foreach ($data['tags'] as $tag): ?>
    <option value="<?php echo $tag->tag_id; ?>" <?php echo (property_exists($data['wiki'], 'tags') && is_array($data['wiki']->tags) && in_array($tag->tag_id, $data['wiki']->tags)) ? 'selected' : ''; ?>><?php echo $tag->tag_name; ?></option>
<?php endforeach; ?>

                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7 4l4 4m0 0l4-4m-4 4V18"></path></svg>
                </div>
            </div>
            <span class="text-red-500"><?php echo $data['tag_err']; ?></span>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-700">Update Wiki</button>

    </form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
