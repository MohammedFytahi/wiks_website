<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="flex flex-row flex-wrap md:mx-auto gap-20  bg-gray-200">

<?php foreach ($data['wikis'] as $wiki): ?>
    <div class="max-w-sm rounded overflow-hidden shadow-lg ">
        <img class="w-full" src="https://v1.tailwindcss.com/img/card-top.jpg"
            alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="flex justify-between items-center mb-2">
                <div class="font-bold text-xl">
                    <?php echo $wiki->title; ?>
                </div>
                <div class="flex items-center space-x-4">
                  


                </div>

            </div>
            <p class="text-gray-700 text-base break-words">
                <?php echo (strlen($wiki->content) > 100) ? substr($wiki->content, 0, 50) . '...' : $wiki->content; ?>
            </p>

            <p class="card-text"><strong>Catégorie:</strong>
                <?php echo $wiki->category_name; ?>
            </p>
        </div>
        <div class="px-3 pt-4 pb-2">
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#
                <?php echo implode(', ', (array) $wiki->tags); ?>
            </span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>

        <div class="px-6 pt-4 pb-2">
            <a href="<?php echo URLROOT; ?>/users/login/<?php echo $wiki->wiki_id; ?>"
                class="inline-block bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-700">
                Read More
            </a>
        </div>
    </div>
<?php endforeach; ?>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>