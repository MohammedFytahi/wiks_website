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
<!-- <script>
    $(document).ready(function () {
        console.log('jQuery version:', $.fn.jquery);
        console.log('jQuery Migrate version:', $.migrateVersion);

        $('#searchInput').on('keyup', function () {
            var searchTerm = $(this).val();

            console.log('Search Term:', searchTerm);

            $.ajax({
                url: '<?php echo URLROOT; ?>/wikis/search',
                type: 'POST',
                data: { searchTerm: searchTerm },
                success: function (response) {
                    console.log('Ajax Response:', response);
                    $('.wikis-list').html(response);
                },
                error: function (error) {
                    console.error('Error during Ajax request:', error);
                }
            });
        });
    });
</script> -->


    <title>
        <?php echo SITENAME; ?>
    </title>
</head>

<body>




    <body class="font-sans bg-gray-200">

   

        <!-- Admin Dashboard Section -->
        <section class="">
       

            <!-- Sidebar Section -->
            <aside class="w-1/4 bg-indigo-800 text-white p-8" style="position: fixed; top: 0; height: 100vh;">
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
            <div class=" p-8  rounded-md shadow-md overflow-x-hidden h-screen">
            <!-- <div class="flex items-center p-6 space-x-6 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500">
      <div class="flex bg-gray-100 p-4 w-72 space-x-4 rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        <input class="bg-gray-100 outline-none" type="text" placeholder="Article name or keyword..." />
      </div>
      <div class="flex py-3 px-4 rounded-lg text-gray-500 font-semibold cursor-pointer">
        <span>All categorie</span>

        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </div>
      <div class="bg-indigo-600 py-3 px-5 text-white font-semibold rounded-lg hover:shadow-lg transition duration-3000 cursor-pointer">
        <span>Search</span>
      </div>
    </div> -->
    
                
                <!-- Dashboard Section -->
                <section class="container ml-80 my-8 ">
                <div class="flex bg-gray-100 p-4 w-72 space-x-4 rounded-lg mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
    </svg>
    <input id="searchInput" class="bg-gray-100 outline-none" type="text" placeholder="Rechercher par titre, tags, catégorie ou contenu..." />
</div>

<div id="searchResults" ></div>
    <div id="searchResultsContainer">
                <?php flash('wiki_message'); ?>


                    <div class="flex flex-row flex-wrap gap-20  bg-gray-200">
                    
                        <?php foreach ($data['wikis'] as $wiki): ?>
                            <div class="max-w-sm rounded overflow-hidden shadow-lg ">
                                <img class="w-full" src="https://v1.tailwindcss.com/img/card-top.jpg"
                                    alt="Sunset in the mountains">
                                <div class="px-6 py-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="font-bold text-xl">
                                            <?php echo $wiki->title; ?>
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

            </div>
        </section>
        

       
    <!-- Display search results here -->
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
                    <h2>${result.title}</h2>
                    <p>${result.content}</p>
                    <p>Category: ${result.category_name}</p>
                    <p>Tags: ${result.tags || 'None'}</p>
                    <!-- Add more data as needed -->

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