<?php require('views/partials/head.php') ?>
<?php require('views/partials/navbar.php') ?>

<!-- main -->
<main class="flex-grow">
    <div class="container mx-auto">


        <form method="post" action="/blogs/update" class="max-w-lg mx-auto px-4 py-3 border shadow rounded space-y-3">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value=<?= $blog['id'] ?>>
            <h2 class="text-center text-xl font-semibold text-gray-900">Edit blog</h2>

            <div class="">
                <label for="name"> Title</label>
                <input required class="input input-bordered input-sm w-full mt-1" value="<?= $blog['title'] ?>" type="text" id="name" name="title">
            </div>

            <div class="">
                <label for="body">Description</label>
                <textarea required class="textarea textarea-bordered textarea-sm w-full mt-1" name="body" id="body">
                    <?= $blog['body'] ?>
                </textarea>
            </div>

            <button class="btn btn-sm btn-primary" type="submit">Update</button>
        </form>
    </div>
</main>

<?php require('views/partials/footer.php') ?>