<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('tag_message'); ?>

<div class="row mb-3">
    <div class="col-md-6">
        <h1>Tags</h1>
    </div>
    <div class="col-md-6 text-right">
        <a href="<?php echo URLROOT; ?>/tags/add" class="btn btn-primary">
            <i class="fa fa-pencil"></i> Ajouter Tag
        </a>
    </div>
</div>

<?php foreach ($data['tags'] as $tag): ?>
    <div class="card card-body mb-3">
        <h4 class="card-title"><?php echo $tag->tagName; ?></h4>

        <div class="bg-light p-2 mb-3">
            Créé par <?php echo $tag->categoryName; ?> le <?php echo $tag->tagName; ?>
        </div>

        <!-- Add any additional tag details or actions as needed -->

        <?php if ($tag->categoryId == $_SESSION['user_id']): ?>
            <div class="mt-3">
                <a href="<?php echo URLROOT; ?>/tags/edit/<?php echo $tag->tagId; ?>" class="btn btn-dark">Modifier</a>

                <form class="d-inline" action="<?php echo URLROOT; ?>/tags/delete/<?php echo $tag->tagId; ?>" method="post">
                    <input type="submit" value="Supprimer" class="btn btn-danger">
                </form>
            </div>
        <?php endif; ?>
    </div>
<?php endforeach; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>
