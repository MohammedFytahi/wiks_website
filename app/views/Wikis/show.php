<?php require APPROOT . '/views/inc/header.php'; ?>

<?php if ($_SESSION['user_role'] == 'user'): ?>
    <a href="<?php echo URLROOT; ?>/wikis/index2" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-10">
        <i class="fa fa-backward mr-2"></i> Back
    </a>
<?php endif; ?>
<?php if ($_SESSION['user_role'] == 'admin'): ?>
    <a href="<?php echo URLROOT; ?>/wikis/index1" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-10">
        <i class="fa fa-backward mr-2"></i> Back
    </a>
<?php endif; ?>
<div class="container mx-auto mt-8 p-8 bg-white shadow-lg rounded-lg">
    <h1 class="text-3xl font-bold mb-4"><?php echo $data['wiki']->title; ?></h1>
    
    <p class="text-gray-700 mb-2">Created by: <?php echo $data['wiki']->author_name; ?></p>
    <p class="text-gray-500 mb-2">Created on: <?php echo $data['wiki']->created_at; ?></p>
    
    <p class="text-gray-700 mb-4"><?php echo $data['wiki']->content; ?></p>
    
    <p class="text-gray-500 mb-4">Category: <?php echo $data['wiki']->category_name; ?></p>
    
    <div class="mb-4">
        Tags:
        <?php foreach ($data['wiki']->tags as $tag): ?>
            <span class="inline-block bg-blue-500 text-white rounded-full px-3 py-1 text-sm font-semibold mr-2 mb-2">
                <?php echo $tag; ?>
            </span>
        <?php endforeach; ?>
    </div>
    
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
