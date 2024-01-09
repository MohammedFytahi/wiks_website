<!-- views/wikis/index.php -->
<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row mb-3">
    <div class="col-md-6">
        <h1>Wikis</h1>
    </div>
</div>

<!-- Add Wiki Button -->
<div class="mb-3">
    <a href="<?php echo URLROOT; ?>/wikis/add" class="btn btn-success"><i class="bi bi-plus"></i> Add Wiki</a>
</div>

<div id="wikiContainer">
    <!-- Display the list of wikis -->
    <?php foreach ($data['wikis'] as $wiki): ?>
        <div class="card card-body mb-3">
            <!-- Use the correct property names based on your database schema -->
            <h4 class="card-title"><?php echo $wiki->title; ?></h4>
            <p><?php echo $wiki->content; ?></p>

            <!-- Display Category -->
            <?php if (property_exists($wiki, 'category_name')): ?>
                <p>Category: <?php echo $wiki->category_name; ?></p>
            <?php endif; ?>

            <!-- Display Tags -->
            <?php if (property_exists($wiki, 'tags') && is_array($wiki->tags)): ?>
                <p>Tags: <?php echo implode(', ', $wiki->tags); ?></p>
            <?php endif; ?>

            <!-- Buttons for Edit and Delete -->
            <div class="d-flex justify-content-between">
                <!-- Link to the edit page -->
                <a href="<?php echo URLROOT; ?>/wikis/edit/<?php echo $wiki->wiki_id; ?>" class="btn btn-primary"><i class="bi bi-pencil"></i> Edit</a>

                <!-- Delete Form -->
                <form class="d-inline" action="<?php echo URLROOT; ?>/wikis/delete/<?php echo $wiki->wiki_id; ?>" method="post">
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
