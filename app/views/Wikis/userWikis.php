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

    <title>
        <?php echo SITENAME; ?>
    </title>
</head>

<body class="font-sans bg-gray-200">

    <!-- Admin Dashboard Section -->
    <section class="flex h-screen">

        <!-- Sidebar Section -->
        <aside class="w-1/4 bg-indigo-800 text-white p-8 " style="position: sticky; top: 0; height: 100vh; ">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-4xl font-extrabold text-gray-800">
                    <?php echo $_SESSION['user_name']; ?>
                </h2>
            </div>
            <nav>
                <ul class="space-y-4 ">
                <li>
                            <a href="<?php echo URLROOT; ?>/wikis/index2"
                                class="flex items-center text-lg py-2 px-4 rounded hover:bg-indigo-700">
                                <!-- Utilisation de couleurs Tailwind -->
                                <span class="mr-2">🏠</span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT; ?>/wikis/userWikis"
                                class="flex items-center text-lg py-2 px-4 rounded hover:bg-indigo-700">
                                <!-- Utilisation de couleurs Tailwind -->
                                <span class="mr-2">📚</span>
                               Mes wikis
                            </a>
                        </li>
                       <li>
                            <a href="<?php echo URLROOT; ?>/wikis/add"
                                class="flex items-center text-lg py-2 px-4 rounded hover:bg-indigo-700">
                                <span class="mr-2">➕</span> <!-- Icône de porte ouverte, vous pouvez changer cela -->
                                Add wiki
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT; ?>/users/logout"
                                class="flex items-center text-lg py-2 px-4 rounded hover:bg-indigo-700">
                                <span class="mr-2">🚪</span> <!-- Icône de porte ouverte, vous pouvez changer cela -->
                                Logout
                            </a>
                        </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Section -->
        <div class="w-3/4 p-8  rounded-md shadow-md"> <!-- Utilisation de couleurs Tailwind -->

            <!-- Main Content Section -->

            <!-- Dashboard Section -->
            <section class="container mx-auto my-8">

<div class="flex flex-row flex-wrap gap-20 mx-auto bg-gray-200">
    <?php foreach ($data['userWikis'] as $wiki): ?>
        <div class="max-w-sm rounded overflow-hidden shadow-lg ">
            <img class="w-full" src="https://v1.tailwindcss.com/img/card-top.jpg"
                alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="flex justify-between items-center mb-2">
                    <div class="font-bold text-xl">
                        <?php echo $wiki->title; ?>
                    </div>
                    <div class="flex">
                        <a href="<?php echo URLROOT; ?>/wikis/edit/<?php echo $wiki->wiki_id; ?>"
                            class="text-blue-500 hover:text-blue-700 mr-2">
                            <i class="fas fa-edit"></i> Modifier
                        </a>

                        <form class="d-inline"
                            action="<?php echo URLROOT; ?>/wikis/delete/<?php echo $wiki->wiki_id; ?>"
                            method="post"
                            onsubmit="return confirm('Are you sure you want to delete this wiki?');">
                            <button type="submit" class="mt-2 text-red-600">Supprimer</button>
                        </form>
                    </div>
                </div>
                <p class="text-gray-700 text-base break-words">
                    <?php echo $wiki->content; ?>
                </p>

                <div class="px-6 pt-4 pb-2">
                    <?php if (property_exists($wiki, 'category_name')): ?>
                        <p class="card-text"><strong>Catégorie:</strong> <?php echo $wiki->category_name; ?></p>
                    <?php endif; ?>

                    <?php if (property_exists($wiki, 'tags') && is_array($wiki->tags)): ?>
                        <?php foreach ($wiki->tags as $tag): ?>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#<?php echo $tag; ?></span>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <div class="px-6 pt-4 pb-2">
                    <a href="<?php echo URLROOT; ?>/wikis/show/<?php echo $wiki->wiki_id; ?>"
                        class="inline-block bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-700">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</section>




        </div>
    </section>

</body>

<?php require APPROOT . '/views/inc/footer.php'; ?>
