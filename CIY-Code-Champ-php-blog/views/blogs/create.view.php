<?php require('views/partials/head.php') ?>
<?php require('views/partials/navbar.php') ?>

<!-- main -->
<main class="flex-grow">
    <div class="container mx-auto">


        <form method="POST" class="max-w-lg mx-auto px-4 py-3 border shadow rounded space-y-3">
            <h2 class="text-center text-xl font-semibold text-gray-900">Create new blog</h2>

            <div class="">
                <label for="name"> Title</label>
                <input class="input input-bordered input-sm w-full mt-1" type="text" id="name" name="title">
            </div>

            <?php if (isset($errors['title'])) : ?>
                <li class="text-sm text-red-500 list-none"><?= $errors['title'] ?></li>
            <?php endif; ?>

            <div class="">
                <label for="body">Description</label>
                <textarea class="textarea textarea-bordered textarea-sm w-full mt-1" name="body" id="body"></textarea>
            </div>

            <?php if (isset($errors['body'])) : ?>
                <li class="text-sm text-red-500 list-none"><?= $errors['body'] ?></li>
            <?php endif; ?>

            <button class="btn btn-sm btn-primary" type="submit">Save</button>
        </form>
    </div>
</main>

<?php require('views/partials/footer.php') ?>