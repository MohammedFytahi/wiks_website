<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('tag_message'); ?>

<div class="container mx-auto my-8">
    <h1 class="text-3xl font-semibold mb-8 text-gray-800">Manage Tags</h1>

    <!-- Existing Tags -->
    <div class="grid grid-cols-2 gap-4">
        <?php foreach ($data['tags'] as $tag): ?>
            <div class="bg-gray-100 p-4 rounded-md transition duration-300 transform hover:scale-105">
                <h3 class="text-xl font-semibold mb-4 text-gray-800"><?php echo $tag->tagName; ?></h3>
                <div class="flex items-center space-x-2 mt-2">
                    <a href="<?php echo URLROOT; ?>/tags/edit/<?php echo $tag->tagId; ?>" class="edit-btn">Edit</a>
                    <form class="inline-block" action="<?php echo URLROOT; ?>/tags/delete/<?php echo $tag->tagId; ?>" method="post">
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <a href="<?php echo URLROOT; ?>/tags/add" class="btn btn-primary mt-4">
        <i class="fa fa-pencil"></i> Ajouter Tag
    </a>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
