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

    <script>
        function validateForm() {
            var categoryNameInput = document.getElementById('category_name');
            var categoryNameErr = document.getElementById('category_name_err');

          
            categoryNameErr.textContent = '';

           
            if (categoryNameInput.value.trim() === '') {
                categoryNameErr.textContent = 'Please enter a category name';
                return false;
            }

            return true;
        }
    </script>
</head>

<body>

    <body class="font-sans bg-gray-200">

      
        <section class="flex h-screen">


            <aside class="w-1/4 bg-indigo-800 text-white p-8 hidden lg:block"
                style="position: fixed; top: 0; height: 100vh;">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-4xl font-extrabold text-gray-800">
                        <?php echo $_SESSION['user_name']; ?>
                    </h2>

                </div>
                <nav>
                    <ul class="space-y-4">
                        <li>
                            <a href="<?php echo URLROOT; ?>/categories/index2"
                                class="flex items-center text-lg py-2 px-4 rounded hover:bg-indigo-700">
                               
                                <span class="mr-2">📁</span>
                                Manage Categories
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT; ?>/tags/index2"
                                class="flex items-center text-lg py-2 px-4 rounded hover:bg-indigo-700">
                             
                                <span class="mr-2">🏷️</span>
                                Manage Tags
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT; ?>/wikis/index1"
                                class="flex items-center text-lg py-2 px-4 rounded hover:bg-indigo-700">
                                
                                <span class="mr-2">📚</span>
                                Manage Wikis
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT; ?>/wikis/index"
                                class="flex items-center text-lg py-2 px-4 rounded hover:bg-indigo-700">
                               
                                <span class="mr-2">📊</span>
                                Dashboard Stats
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT; ?>/users/logout"
                                class="flex items-center text-lg py-2 px-4 rounded hover:bg-indigo-700">
                                <span class="mr-2">🚪</span> 
                                Logout
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <nav aria-label="alternative nav" class="md:hidden">
            <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">

                <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                        <li class="mr-3 flex-1">
                            <a href="<?php echo URLROOT; ?>/wikis/index" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                                <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block"> Dashboard Stats</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="<?php echo URLROOT; ?>/wikis/index1"class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block"> Manage Wikis</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                             <a href="<?php echo URLROOT; ?>/categories/index2"class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block"> Manage Categories</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                        <a href="<?php echo URLROOT; ?>/tags/index2" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-blue-600">
                                <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Manage Tags</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="<?php echo URLROOT; ?>/users/logout" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">logout</span>
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>





            <section class="container lg:ml-80 my-8 max-w-md:mx-auto overflow-x-hidden">
                <?php flash('category_message'); ?>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <h1>Categories</h1>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="<?php echo URLROOT; ?>/Categories/add" class="btn btn-primary">
                            <i class="fa fa-pencil"></i> Add Category
                        </a>
                    </div>
                </div>
                <div class="flex flex-row flex-wrap gap-20  bg-gray-200 ml-20">
                    <?php if (isset($data['categories']) && is_array($data['categories'])): ?>
                        <?php foreach ($data['categories'] as $category): ?>

                            <div
                                class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                                </svg>

                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                        <?php echo $category->category_name; ?>
                                    </h5>
                                </a>
                                <div class="mt-3">
                                <form class="d-inline" onsubmit="return validateForm()"
                            action="<?php echo URLROOT; ?>/categories/edit/<?php echo $category->category_id; ?>"
                            method="post">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $category->category_id; ?>">
                                <label for="category_name">Edit Category:</label>
                                <input type="text" id="category_name" name="category_name" class="form-control"
                                    value="<?php echo $category->category_name; ?>">
                                <p id="category_name_err" class="text-red-500 text-xs italic"></p>
                            </div>
                            <input type="submit" value="Enregistrer" class="btn btn-success">
                        </form>

                                    <form class="d-inline"
                                        action="<?php echo URLROOT; ?>/categories/delete/<?php echo $category->category_id; ?>"
                                        method="post">
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </div>
                            </div>


                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                </div>

            </section>

            </div>
        </section>

    </body>

    <?php require APPROOT . '/views/inc/footer.php'; ?>