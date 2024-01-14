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





    <body class="font-sans bg-gray-200 overflow-x-hidden">



        <!-- Admin Dashboard Section -->
        <section class="">


            <!-- Sidebar Section -->
            <aside class="w-1/4 bg-indigo-800 text-white p-8 hidden lg:block"
                style="position: fixed; top: 0; height: 100vh;">
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
            <nav aria-label="alternative nav" class="md:hidden">
                <div
                    class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">

                    <div
                        class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                        <ul
                            class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                            <li class="mr-3 flex-1">
                                <a href="<?php echo URLROOT; ?>/wikis/index2"
                                    class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                                    <i class="fas fa-tasks pr-0 md:pr-3"></i><span
                                        class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Home</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="<?php echo URLROOT; ?>/wikis/userWikis"
                                    class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                    <i class="fa fa-envelope pr-0 md:pr-3"></i><span
                                        class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">
                                        Mes wikis</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="<?php echo URLROOT; ?>/wikis/add"
                                    class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-blue-600">
                                    <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span
                                        class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Add
                                        wiki</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="<?php echo URLROOT; ?>/users/logout"
                                    class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                    <i class="fa fa-wallet pr-0 md:pr-3"></i><span
                                        class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>


                </div>
            </nav>






            <!-- Dashboard Section -->
            <section class="container lg:ml-80 my-8 max-w-md:mx-auto overflow-x-hidden">
                <div class="flex bg-gray-100 p-4 w-72 space-x-4 rounded-lg mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-30" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input id="searchInput" class="bg-gray-100 outline-none" type="text"
                        placeholder="Rechercher par titre, tags, catégorie ou contenu..." />
                </div>

                <div id="searchResults"></div>
                <div id="searchResultsContainer">
                    <?php flash('wiki_message'); ?>


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
                                            <?php if ($wiki->author_id == $_SESSION['user_id']): ?>
                                                <a href="<?php echo URLROOT; ?>/wikis/edit/<?php echo $wiki->wiki_id; ?>"
                                                    class="text-blue-500 hover:text-blue-700 border border-blue-500 hover:border-blue-700 px-3 py-1 rounded-full flex items-center transition duration-300">
                                                    <i class="fas fa-edit mr-1"></i> Modifier
                                                </a>
                                                <form class="d-inline"
                                                    action="<?php echo URLROOT; ?>/wikis/delete/<?php echo $wiki->wiki_id; ?>"
                                                    method="post"
                                                    onsubmit="return confirm('Are you sure you want to delete this wiki?');">
                                                    <button type="submit"
                                                        class="mt-2 text-red-600 border border-red-600 hover:border-red-700 px-3 py-1 rounded-full flex items-center transition duration-300">
                                                        <i class="fas fa-trash-alt mr-1"></i> Supprimer
                                                    </button>
                                                </form>
                                            <?php endif; ?>


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
                                    <a href="<?php echo URLROOT; ?>/wikis/show/<?php echo $wiki->wiki_id; ?>"
                                        class="inline-block bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-700">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

            </section>


        </section>




        </div>

        <!-- Ajoutez cette balise de script avant la fermeture du corps body -->

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const searchInput = document.getElementById('searchInput');
                const searchResultsContainer = document.getElementById('searchResultsContainer');

                searchInput.addEventListener('input', function () {
                    const searchTerm = searchInput.value.trim();

                    // Check if the search term is empty
                    if (searchTerm === '') {
                        // Clear the search results container
                        searchResultsContainer.innerHTML = '';
                        return;
                    }

                    // Perform AJAX request
                    const xhr = new XMLHttpRequest();

                    xhr.open('GET', `<?php echo URLROOT; ?>/Wikis/search?search=${searchTerm}`, true);

                    xhr.onload = function () {
                        if (xhr.status >= 200 && xhr.status < 400) {
                            // Success! Handle the response and update the content
                            const response = JSON.parse(xhr.responseText);
                            // Update the content based on the response
                            updateSearchResults(response);
                        } else {
                            // Error handling
                            console.error('Request failed');
                        }
                    };

                    xhr.onerror = function () {
                        // Network error
                        console.error('Network error');
                    };

                    xhr.send();
                });

                function updateSearchResults(results) {
                    // Clear previous results
                    searchResultsContainer.innerHTML = '';

                    if (results.length > 0) {
                        // Display the search results
                        results.forEach(result => {
                            const resultElement = document.createElement('div');
                            resultElement.classList.add('search-result');

                            // Display result data (customize based on your data structure)
                            resultElement.innerHTML = `
                            <div class="max-w-sm rounded overflow-hidden shadow-lg ">
                                <img class="w-full" src="https://v1.tailwindcss.com/img/card-top.jpg"
                                    alt="Sunset in the mountains">
                                <div class="px-6 py-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="font-bold text-xl">
                                         ${result.title}
                                        </div>
                                        <div class="flex">
                                            <?php if ($wiki->author_id == $_SESSION['user_id']): ?>
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
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <p class="text-gray-700 text-base break-words">
                                    ${result.content}
                                    </p>

                                    <p class="card-text"><strong>Catégorie:</strong>
                                    ${result.category_name}
                                    </p>
                                </div>
                                <div class="px-3 pt-4 pb-2">
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#
                                        ${result.tags || 'None'}
                                    </span>
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                                </div>

                                <div class="px-6 pt-4 pb-2">
                                    <a href="<?php echo URLROOT; ?>/wikis/show/<?php echo $wiki->wiki_id; ?>"
                                        class="inline-block bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-700">
                                        Read More
                                    </a>
                                </div>
                            </div>

                    <hr>
                `;

                            searchResultsContainer.appendChild(resultElement);
                        });
                    } else {
                        // Display a message when no results are found
                        const noResultsMessage = document.createElement('p');
                        noResultsMessage.textContent = 'No results found.';
                        searchResultsContainer.appendChild(noResultsMessage);
                    }
                }
            });
        </script>




        <?php require APPROOT . '/views/inc/footer.php'; ?>